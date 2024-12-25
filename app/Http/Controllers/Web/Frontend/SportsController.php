<?php

namespace VanguardLTE\Http\Controllers\Web\Frontend {

    use \VanguardLTE\SportData;
    use \VanguardLTE\SportBet;
    use \VanguardLTE\SportLeagues;
    use \VanguardLTE\SportCountries;

    include_once(base_path() . '/app/ShopCore.php');
    include_once(base_path() . '/app/ShopGame.php');
    class SportsController extends \VanguardLTE\Http\Controllers\Controller
    {
        private function getCategories($request, $category1 = '', $category2 = '')
        {
            // if (\Illuminate\Support\Facades\Auth::check() && !auth()->user()->hasRole('user')) {
            //     return redirect()->route('backend.dashboard');
            // }
            // if (!\Illuminate\Support\Facades\Auth::check() && false) {
            //     return redirect()->route('frontend.auth.login');
            // }
            $categories = [];
            $game_ids = [];
            $cat1 = false;
            $is_game_page = true;
            $title = trans('app.games');
            $body = '';
            $keywords = '';
            $description = '';
            $shop_id = (\Illuminate\Support\Facades\Auth::check() ? auth()->user()->shop_id : 1);
            $shop = \VanguardLTE\Shop::find($shop_id);
            $games = \VanguardLTE\Game::where([
                'view' => 1,
                'shop_id' => $shop_id
            ]);

            $frontend = settings('frontend');
            if ($shop_id && $shop) {
                $frontend = $shop->frontend ? $shop->frontend : 'Default';
            }
            // if ($redirect = $this->check_redirect($request, $category1)) {
            //     return $redirect;
            // }
            \Illuminate\Support\Facades\Cookie::queue('currentCategory' . (\Illuminate\Support\Facades\Auth::check() ? auth()->user()->id : 0), $category1, 2678400);
            if ($category1 != '') {
                $cat1 = \VanguardLTE\Category::where(['href' => $category1])->first();
                if (!$cat1 && !in_array($category1, [
                    'all',
                    'my_games',
                    'new',
                    'hot'
                ])) {
                    abort(404);
                }
                if ($category2 != '') {
                    $cat2 = \VanguardLTE\Category::where([
                        'href' => $category2,
                        'parent' => $cat1->id
                    ])->first();
                    if (!$cat2) {
                        abort(404);
                    }
                    $categories[] = $cat2->id;
                } else if (in_array($category1, [
                    'all',
                    'my_games',
                    'new',
                    'hot'
                ])) {
                    $categories = \VanguardLTE\Category::where(['parent' => 0])->pluck('id')->toArray();
                } else {
                    $categories = \VanguardLTE\Category::where(['parent' => $cat1->id])->pluck('id')->toArray();
                    $categories[] = $cat1->id;
                }
                if ($frontend == 'Amatic') {
                    $Amatic = \VanguardLTE\Category::where(['title' => 'Amatic'])->first();
                    if ($Amatic) {
                        $categories = \VanguardLTE\Category::where(['parent' => $Amatic->id])->pluck('id')->toArray();
                        $categories[] = $Amatic->id;
                    }
                }
                if ($frontend == 'NetEnt') {
                    $Amatic = \VanguardLTE\Category::where(['title' => 'NetEnt'])->first();
                    if ($Amatic) {
                        $categories = \VanguardLTE\Category::where(['parent' => $Amatic->id])->pluck('id')->toArray();
                        $categories[] = $Amatic->id;
                    }
                }
                if (count($categories) > 0) {
                    $games = $games->whereRaw('original_id IN (SELECT game_id FROM `w_game_categories` WHERE category_id IN(' . implode(',', $categories) . '))');
                    if ($category1 == 'my_games') {
                        $my_games = \VanguardLTE\Lib\GetHotNewMyGames::get_my_games();
                        if (count($my_games)) {
                            $games = $games->whereIn('id', $my_games);
                        } else {
                            $games = $games->where('id', 0);
                        }
                    }
                    if ($category1 == 'new') {
                        $new_games = \VanguardLTE\Lib\GetHotNewMyGames::get_new_games();
                        if (count($new_games)) {
                            $games = $games->whereIn('id', $new_games);
                        } else {
                            $games = $games->where('id', 0);
                        }
                    }
                    if ($category1 == 'hot') {
                        $hot_games = \VanguardLTE\Lib\GetHotNewMyGames::get_hot_games();
                        if (count($hot_games)) {
                            $games = $games->whereIn('id', $hot_games);
                        } else {
                            $games = $games->where('id', 0);
                        }
                    }
                } else {
                    $games = $games->where('id', 0);
                }
            }
            $detect = new \Detection\MobileDetect();
            $devices = [];
            if ($detect->isMobile() || $detect->isTablet()) {
                $games = $games->whereIn('device', [
                    0,
                    2
                ]);
                $devices = [
                    0,
                    2
                ];
            } else {
                $games = $games->whereIn('device', [
                    1,
                    2
                ]);
                $devices = [
                    1,
                    2
                ];
            }
            if ($shop) {
                switch ($shop->orderby) {
                    case 'AZ':
                        $games = $games->orderBy('name', 'ASC');
                        break;
                    case 'Rand':
                        $games = $games->inRandomOrder();
                        break;
                    case 'RTP':
                        $games = $games->orderBy(\DB::raw('CASE WHEN(stat_in > 0) THEN(stat_out*100)/stat_in ELSE 0 END '), 'DESC');
                        break;
                    case 'Count':
                        $games = $games->orderBy('bids', 'DESC');
                        break;
                    case 'Date':
                        $games = $games->orderBy('created_at', 'DESC');
                        break;
                }
            }
            $games = $games->get();
            $jpgs = \VanguardLTE\JPG::where('shop_id', $shop_id)->get();
            $jpgSum = \VanguardLTE\JPG::where('shop_id', $shop_id)->sum('balance');
            $categories = false;
            $currentSliderNum = -1;
            if ($games) {
                $cat_ids = \VanguardLTE\GameCategory::whereIn('game_id', array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28))->groupBy('category_id')->pluck('category_id');

                // $cat_ids = \VanguardLTE\GameCategory::whereIn('game_id', \VanguardLTE\Game::where([
                //     'view' => 1, 
                //     'shop_id' => $shop_id
                // ])->pluck('original_id'))->groupBy('category_id')->pluck('category_id');
                if (count($cat_ids)) {
                    $categories = \VanguardLTE\Category::whereIn('id', $cat_ids)->orderBy('position', 'ASC')->get();
                    if ($category1 != '') {
                        foreach ($categories as $index => $cat) {
                            if ($cat->href == $category1) {
                                $currentSliderNum = $cat->href;
                                break;
                            }
                        }
                    }
                }
            }
            if (settings('use_all_categories') && $category1 == 'all') {
                $currentSliderNum = 'all';
            }
            if (settings('use_my_games') && $category1 == 'my_games' && \VanguardLTE\Lib\GetHotNewMyGames::get_my_games(true)) {
                $currentSliderNum = 'my_games';
            }
            if (settings('use_new_categories') && $category1 == 'new' && \VanguardLTE\Lib\GetHotNewMyGames::get_new_games(true)) {
                $currentSliderNum = 'new';
            }
            if (settings('use_hot_categories') && $category1 == 'hot' && \VanguardLTE\Lib\GetHotNewMyGames::get_hot_games(true)) {
                $currentSliderNum = 'hot';
            }
            $tournament = \VanguardLTE\Tournament::where('shop_id', $shop_id)->where('start', '<=', \Carbon\Carbon::now())->where('end', '>=', \Carbon\Carbon::now())->orderBy('end', 'ASC')->first();
            if (!$tournament) {
                $tournament = \VanguardLTE\Tournament::where('shop_id', $shop_id)->where('start', '>=', \Carbon\Carbon::now())->where('end', '>=', \Carbon\Carbon::now())->orderBy('end', 'ASC')->first();
            }
            $gamestat = array();
            $depositlist = array();
            if (isset(auth()->user()->id)) {
                $gamestat = \VanguardLTE\StatGame::where('user_id', auth()->user()->id)->orderByDesc('date_time')->limit(50)->get();
                $depositlist = \VanguardLTE\Payment::where('user_id', auth()->user()->id)->orderByDesc('id')->limit(50)->get();
            }
            return array($title, $categories, $category1);
        }

        public function test()
        {
            return json_decode('this is test response!');
        }

        public function index()
        {
            return redirect()->route('frontend.home');
        }

        public function pre()
        {
            if (auth()->check()) {
                return array('status' => true, 'user' => auth()->user());
            } else {
                return array('status' => false, 'user' => 'null');
            }
        }

        public function home()
        {
            return view('frontend.app');
        }

        public function prematch(\Illuminate\Http\Request $request, $category1 = '', $category2 = '')
        {
            $res = $this->getCategories($request, '', '');
            $title = $res[0];
            $categories = $res[1];
            $category1 = $res[2];
            return view('frontend.Default.sports.prematch', compact('title', 'categories', 'category1'));
        }

        public function live(\Illuminate\Http\Request $request, $category1 = '', $category2 = '')
        {
            $res = $this->getCategories($request, '', '');
            $title = $res[0];
            $categories = $res[1];
            $category1 = $res[2];
            $detect = new \Detection\MobileDetect();
            if ($detect->isMobile() || $detect->isTablet()) {
                return view('frontend.Default.sports.mobileLive', compact('title', 'categories', 'category1'));
            } else {
                return view('frontend.Default.sports.live', compact('title', 'categories', 'category1'));
            }
        }

        public function event(\Illuminate\Http\Request $request, $category1 = '', $category2 = '')
        {
            $res = $this->getCategories($request, '', '');
            $title = $res[0];
            $categories = $res[1];
            $category1 = $res[2];
            return view('frontend.Default.sports.event', compact('title', 'categories', 'category1'));
        }

        public function get_sports(\Illuminate\Http\Request $request)
        {
            $sports = SportData::select('SportId', 'SportName', \DB::raw('COUNT(SportId) as count'))
                ->where('IsPreMatch', $request->isPreMatch)
                ->groupBy("SportId")
                ->get();
            return $sports;
        }

        public function get_league(\Illuminate\Http\Request $request)
        {
            $data = SportData::select('LeagueId', "LeagueName", "RegionId", "RegionName", "cc")
                ->where('SportId', $request->SportId)
                ->where('IsPreMatch', $request->isPreMatch)
                ->groupBy("LeagueId")
                ->get();
            return $data;
        }

        public function get_sports_data(\Illuminate\Http\Request $request)
        {
            $data = array();
            if ($request->isPreMatch) {
                if ($request->SportId && $request->LeagueId) {
                    $data = SportData::where('IsPreMatch', 1)
                        ->where('SportId', $request->SportId)
                        ->where('LeagueId', $request->LeagueId)
                        ->get();
                } else if ($request->SportId && $request->country) {
                    if ($request->country == 'null') {
                        $data = SportData::where('IsPreMatch', 1)
                            ->where('SportId', $request->SportId)
                            ->where('cc', null)
                            ->get();
                    } else {
                        $data = SportData::where('IsPreMatch', 1)
                            ->where('SportId', $request->SportId)
                            ->where('RegionId', $request->RegionId)
                            ->get();
                    }
                } else if ($request->SportId) {
                    $data = SportData::where('IsPreMatch', 1)
                        ->where('SportId', $request->SportId)
                        ->get();
                } else {
                    $data = SportData::where('IsPreMatch', 1)
                        ->get();
                }
            }
            ///Live Sports
            else {
                if ($request -> EventId){
                    $data = SportData::where('Id', $request -> EventId) -> get();
                }
                else if ($request->SportId && $request->LeagueId) {
                    $data = SportData::where('IsPreMatch', 0)
                        ->where('SportId', $request->SportId)
                        ->where('LeagueId', $request->LeagueId)
                        ->get();
                } else if ($request->SportId && $request->isMobile) {
                    $data = SportData::where('IsPreMatch', 0)
                        ->where('SportId', $request->SportId)
                        ->get();
                } else if ($request->SportId && $request->RegionId) {
                    if ($request->RegionId == 'null') {
                        $data = SportData::where('IsPreMatch', 0)
                            ->where('SportId', $request->SportId)
                            ->where('RegionId', null)
                            ->get();
                    } else {
                        $data = SportData::where('IsPreMatch', 0)
                            ->where('SportId', $request->SportId)
                            ->where('RegionId', $request->RegionId)
                            ->get();
                    }
                } else if($request -> SportId) {
                    $data = SportData::where('IsPreMatch', 0) -> where('SportId', $request -> SportId) -> get();
                } else {
                    $data = SportData::where('IsPreMatch', 0)
                        ->limit(100)
                        ->get();
                }
            }
            return $data;
        }

        public function get_init_league(\Illuminate\Http\Request $request)
        {
            $data = [];
            if ($request->sport_id && $request->league_id) {
                $data = SportData::where('IsPreMatch', 0)
                    ->where('SportId', $request->sport_id)
                    ->where('LeagueId', $request->league_id)
                    ->get();
            } else if ($request->sport_id) {
                $data = SportData::where('IsPreMatch', 0)
                    ->where('SportId', $request->sport_id)
                    ->get();
            } else {
                $topLeague = SportLeagues::select('id')
                    ->where('has_toplist', 1)
                    ->get();
                $league = array();
                foreach ($topLeague as $index => $lea) {
                    array_push($league, $lea->id);
                }
                $data = SportData::whereIn('LeagueId', $league)
                    ->where('IsPreMatch', 0)
                    ->get();
            }
            return json_encode($data);
        }

        public function get_init_live(\Illuminate\Http\Request $request)
        {
            $data = [];
            if ($request->sport_id && $request->league_id) {
                $data = SportData::where('IsPreMatch', 1)
                    ->where('SportId', $request->sport_id)
                    ->where('LeagueId', $request->league_id)
                    ->get();
            } else if ($request->sport_id) {
                $data = SportData::where('IsPreMatch', 1)
                    ->where('SportId', $request->sport_id)
                    ->get();
            } else {
                $data = SportData::where('IsPreMatch', 1)
                    ->get();
            }
            return json_encode($data);
        }

        public function getEvent(\Illuminate\Http\Request $request)
        {
            $data = SportData::where('id', $request->id)->get();
            return $data;
        }

        public function bet(\Illuminate\Http\Request $request)
        {
            $user = \VanguardLTE\User::find(auth()->user()->id);
            $balance = 0;
            $balance_error = 'Not enough your balance';
            if ($request['betType'] == 'single') {
                for ($i = 0; $i < count($request['bet']); $i++) {
                    $balance += $request['bet'][$i]['stake'];
                }
                if ($user->balance < $balance) {
                    return array('status' => false, 'msg' => $balance_error);
                }
                for ($i = 0; $i < count($request['bet']); $i++) {
                    $sportBet = new SportBet;
                    $sportBet->user_id = $request["user_id"];
                    $sportBet->betsId = mt_rand();
                    $sportBet->SportId = $request['bet'][$i]['SportId'];
                    $sportBet->SportName = $request['bet'][$i]['SportName'];
                    $sportBet->home = $request['bet'][$i]['home'];
                    $sportBet->marketType = $request['bet'][$i]['marketType'];
                    $sportBet->away = $request['bet'][$i]['away'];
                    $sportBet->league = $request['bet'][$i]['league'];
                    $sportBet->eventId = $request['bet'][$i]['eventId'];
                    $sportBet->odds = $request['bet'][$i]['odds'];
                    $sportBet->stake = $request['bet'][$i]['stake'];
                    $sportBet->potential = $request['bet'][$i]['potential'];
                    $sportBet->marketId = $request['bet'][$i]['marketId'];
                    $sportBet->handicap = $request['bet'][$i]['handicap'];
                    $sportBet->oddType = $request['bet'][$i]['oddType'];
                    $sportBet->betType = $request['betType'];
                    $sportBet->status = 'BET';
                    $sportBet->createdAt = date("Y-m-d h:i:s");
                    $sportBet->updatedAt = date("Y-m-d h:i:s");
                    $sportBet->save();
                }
            } else {
                $balance = $request['multi']['stake'];
                if ($user->balance < $balance) {
                    return array('status' => false, 'msg' => $balance_error);
                }
                for ($i = 0; $i < count($request['bet']); $i++) {
                    $betsId = mt_rand();
                    $sportBet = new SportBet;
                    $sportBet->user_id = $request["user_id"];
                    $sportBet->betsId = $betsId;
                    $sportBet->SportId = $request['bet'][$i]['SportId'];
                    $sportBet->SportName = $request['bet'][$i]['SportName'];
                    $sportBet->home = $request['bet'][$i]['home'];
                    $sportBet->away = $request['bet'][$i]['away'];
                    $sportBet->league = $request['bet'][$i]['league'];
                    $sportBet->eventId = $request['bet'][$i]['eventId'];
                    $sportBet->odds = $request['bet'][$i]['odds'];
                    $sportBet->stake = $request['multi']['stake'];
                    $sportBet->potential = $request['multi']['profit'];
                    $sportBet->marketId = $request['bet'][$i]['marketId'];
                    $sportBet->handicap = $request['bet'][$i]['handicap'];
                    $sportBet->oddType = $request['bet'][$i]['oddType'];
                    $sportBet->betType = $request['betType'];
                    $sportBet->status = 'BET';
                    $sportBet->createdAt = date("Y-m-d h:i:s");
                    $sportBet->updatedAt = date("Y-m-d h:i:s");
                    $sportBet->save();
                }
            }
            $ok = \VanguardLTE\User::where('id', $user->id)->decrement('balance', $balance);
            $user = \VanguardLTE\User::where('id', $user->id)->get();

            foreach ($request['matchs'] as $value) {
                \VanguardLTE\SportData::where('id', $value)->increment('popular', 1);
            }
            return array('status' => $ok, 'data' => $user, 'msg' =>  $ok ? 'Success!' : 'Failed!');
        }

        public function get_history(\Illuminate\Http\Request $request)
        {
            $data = [];
            if (isset(auth()->user()->id)) {
                $data = \VanguardLTE\SportBet::where('user_id', auth()->user()->id)->orderByDesc('created_at')->get();
            }
            return $data;
        }

        public function get_casino_history()
        {
            $data = [];
            if (isset(auth()->user()->id)) {
                $data = \VanguardLTE\StatGame::where('user_id', auth()->user()->id)->orderByDesc('date_time')->get();
            }
            return $data;
        }

        public function get_deposit_history()
        {
            $data = [];
            if (isset(auth()->user()->id)) {
                $data = \VanguardLTE\Payment::where('user_id', auth()->user()->id)->orderByDesc('id')->get();
            }
            return $data;
        }

        public function get_search(\Illuminate\Http\Request $request)
        {
            $data = SportData::where('IsPreMatch',  $request->isLive)
                ->whereRaw('LOWER(`home`) LIKE ? ', '%' . $request->key . '%')
                ->orWhereRaw('LOWER(`away`) LIKE ? ', '%' . $request->key . '%')
                ->get();
            return json_encode($data);
        }

        public function getPrePopular(\Illuminate\Http\Request $request)
        {
            $popular = SportData::where('popular',  '>', 0)
                ->where('IsPreMatch', 0)
                ->get();
            $top = SportLeagues::select('id')->where('has_toplist', 1)->get();
            $inFilter = [];
            foreach ($top as $val) {
                array_push($inFilter, $val->id);
            }
            $league = SportData::where('IsPreMatch', 0)
                ->whereIn('LeagueId', $inFilter)->get();

            return ['popular' => $popular, 'league' => $league];
        }

        public function livePopular(\Illuminate\Http\Request $request)
        {
            $top = SportLeagues::select('id')->where('has_toplist', 1)->get();
            $inFilter = [];
            foreach ($top as $val) {
                array_push($inFilter, $val->id);
            }
            $popular = SportData::where('IsPreMatch', 1)
                ->where('SportId', $request->sport_id)
                ->whereIn('LeagueId', $inFilter)->get();

            $live = SportData::where('IsPreMatch', 1)
                ->where('SportId', $request->sport_id)
                ->whereNotIn('LeagueId', $inFilter)->get();

            return ['popular' => $popular, 'live' => $live];
        }

        public function home_casino()
        {
            $games = \VanguardLTE\Game::offset(0)->take(50)->get();
            return json_decode($games);
        }

        public function get_provider()
        {
            $categories = \VanguardLTE\GameCategory::Select(\DB::raw('COUNT(*) as count'), 'category_id', 'title', 'href')
                ->groupBy('category_id')
                ->leftJoin('categories', 'game_categories.category_id', '=', 'categories.id')
                ->get();
            return json_decode($categories);
        }

        public function get_casino_game(\Illuminate\Http\Request $request)
        {
            if ($request->id == 'all') {
                $games = \VanguardLTE\Game::offset($request->page * 12)->take(12)->get();
                return json_decode($games);
            } else {
                $gameId = \VanguardLTE\GameCategory::where('category_id', $request->id)->get();
                $categoryId = [];
             
                foreach($gameId as $item) {
                    array_push($categoryId, $item->game_id);
                }

                if (count($categoryId)) {
                    $games = \VanguardLTE\Game::whereIn('id', $categoryId)->offset($request->page * 12)->take(12)->get();
                } else {
                    $games = \VanguardLTE\Game::where('id', 0)->offset($request->page * 12)->take(12)->get();
                }
                return json_decode($games);
            }
        }
    }
}
