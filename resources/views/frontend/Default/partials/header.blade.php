@php
if(Auth::check()){

$refund = false;
if( auth()->user()->shop && auth()->user()->shop->progress_active ){
$refund = \VanguardLTE\Progress::where(['shop_id' => auth()->user()->shop_id, 'rating' => auth()->user()->rating])->first();
}

$currency = auth()->user()->present()->shop ? auth()->user()->present()->shop->currency : '';
} else{
$currency = '';
$refund = false;
}
$rules = \VanguardLTE\Rule::get();
$detect = new \Detection\MobileDetect();
@endphp


{{-- <div class="menu__wrap">
    @if( settings('use_all_categories') )
    <a href="{{ route('frontend.game.list.category', 'all') }}" class="menu__link @if($currentSliderNum != -1 && $currentSliderNum == 'all') active @endif"><span>@lang('app.all')</span></a>
@endif
@if( settings('use_my_games') && \VanguardLTE\Lib\GetHotNewMyGames::get_my_games(true))
<a href="{{ route('frontend.game.list.category', 'my_games') }}" class="menu__link @if($currentSliderNum != -1 && $currentSliderNum == 'my_games') active @endif"><span>@lang('app.my_games')</span></a>
@endif
@if( settings('use_new_categories') && \VanguardLTE\Lib\GetHotNewMyGames::get_new_games(true))
<a href="{{ route('frontend.game.list.category', 'new') }}" class="menu__link @if($currentSliderNum != -1 && $currentSliderNum == 'new') active @endif"><span>@lang('app.new')</span></a>
@endif
@if( settings('use_hot_categories') && \VanguardLTE\Lib\GetHotNewMyGames::get_hot_games(true))
<a href="{{ route('frontend.game.list.category', 'hot') }}" class="menu__link @if($currentSliderNum != -1 && $currentSliderNum == 'hot') active @endif"><span>@lang('app.hot')</span></a>
@endif
@if ($categories && count($categories))
@foreach($categories AS $index=>$category)
<a href="{{ route('frontend.game.list.category', $category->href) }}" class="menu__link @if($currentSliderNum != -1 && $category->href == $currentSliderNum) active @endif"><span>{{ $category->title }}</span></a>
@endforeach
@endif
<!--<div class="bottom_banner"></div>-->
</div> --}}
<!-- MENU END -->
<header data-v-05e5f05c="" id="header" class="" data-v-34ecc166="">
    <!---->
    <div data-v-05e5f05c="" class="header-content">
        <!---->
        <a data-v-05e5f05c="" href="/" class="logo-wrapper logo-link">
            <div data-v-d16af0da="" data-v-05e5f05c="" class="logo-mobile logo">
                <img data-v-d16af0da="" src="/frontend/Default/img/spc.png" class="logo-mobile-image">
            </div>
        </a>
        <!---->
        <div data-v-05e5f05c="" class="controls">
            @if( !Auth::check() )
            <a data-v-05e5f05c="" href="javascript:;" data-name="modal-login" class="btn modal-btn login-btn control-item button sm default">
                <span class="button-content">
                    <span data-v-05e5f05c="" class="control-item__title">Sign in</span>
                    <svg data-v-05e5f05c="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" aria-hidden="true" role="img" class="icon control-item__icon icon icon-user sm margin square" icon="user" margin="" square="">
                        <path d="M7 6.25a3 3 0 110-6 3 3 0 010 6zm-6.75 6.9c.291-3.58 3.196-5.4 6.738-5.4 3.59 0 6.54 1.72 6.76 5.4.01.147 0 .6-.563.6H.795c-.187 0-.56-.406-.545-.6z">
                        </path>
                    </svg>
                </span>
            </a>
            <a data-v-05e5f05c="" href="javascript:;" data-name="modal-register" class="btn modal-btn registration control-item button sm success">
                <span class="button-content">
                    <div data-v-05e5f05c="" class="control-item__inner">
                        <span data-v-05e5f05c="" class="control-item__title">Sign up</span>
                        <small data-v-05e5f05c="" class="control-item__subtitle">Complete</small>
                    </div>
                </span>
            </a>
            @else
            <a data-v-05e5f05c="" href="javascript:;" data-name="modal-profile" class="btn modal-btn profile-btn control-item button sm success">
                <span class="button-content">
                    <span data-v-05e5f05c="" class="control-item__title">Profile</span>
                    <svg data-v-05e5f05c="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" aria-hidden="true" role="img" class="icon control-item__icon icon icon-user sm margin square" icon="user" margin="" square="">
                        <path d="M7 6.25a3 3 0 110-6 3 3 0 010 6zm-6.75 6.9c.291-3.58 3.196-5.4 6.738-5.4 3.59 0 6.54 1.72 6.76 5.4.01.147 0 .6-.563.6H.795c-.187 0-.56-.406-.545-.6z">
                        </path>
                    </svg>
                </span>
            </a>
            <a data-v-05e5f05c="" href="{{ route('frontend.auth.logout') }}" class="btn control-item button sm default">
                <span class="button-content">
                    {{-- <div data-v-05e5f05c="" class="control-item__inner"> --}}
                    <span data-v-05e5f05c="" class="control-item__title">Sign out</span>
                    {{-- <small data-v-05e5f05c="" class="control-item__subtitle">Complete</small>
                    </div> --}}
                </span>
            </a>
            @endif

            <button data-v-5d560be8="" data-v-05e5f05c="" class="burger-menu-button burger-button">
                <svg data-v-5d560be8="" xmlns="http://www.w3.org/2000/svg" width="21" height="19" viewBox="0 0 21 19" aria-hidden="true" role="img" class="icon burger-menu-button__icon icon icon-burger_icon sm" icon="burger_icon">
                    <path d="M19.5 16a1.5 1.5 0 010 3h-18a1.5 1.5 0 010-3h18zm0-8a1.5 1.5 0 010 3h-18a1.5 1.5 0 010-3h18zm0-8a1.5 1.5 0 010 3h-18a1.5 1.5 0 010-3h18z" fill="#FFF" fill-rule="evenodd">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</header>
<!-- menu -->
<div data-v-34ecc166="" class="navigation-top main-layout-item" style="">
    <div data-v-3147bff8="" id="navigation" class="with-controls" style="height:initial;">
        <section data-v-663d326c="" data-v-3147bff8="" class="menu-bar" style="--navigation__tint-width:0px;">
            <!-- <div class="providers ng-isolate-scope mobile-providers" style="width:100%">
                <div class="providers__panel">
                    <a class="providers__btn-all ng-scope" href="{{ route('frontend.game.list.category', 'all') }}">@lang('app.all')</a>
                    <ul class="providers__panel-list">
                        @if ($categories && count($categories))
                        @foreach($categories AS $index=>$category)
                        <li class="providers__item ng-scope">
                            <a class="providers__link" scroll-up="" href="{{ route('frontend.game.list.category', $category->href) }}">
                                <span class="providers__icon">
                                    <img class="providers__icon-img providers__icon-img--{{$category->href}}" alt="" src="/1wrri/providers/small/{{$category->href}}.svg">
                                </span>
                                <span class="providers__name ng-scope">{{ $category->title }}</span> </a>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div> -->
            <div class="providers ng-isolate-scope desktop-providers" style="width:100%">
                <div class="providers__panel">
                    <ul class="providers__panel-list">
                        <li class="providers__item ng-scope">
                            <a class="providers__link" scroll-up="" href="{{ route('frontend.home') }}">
                                <span class="providers__name ng-scope">Home</span>
                            </a>
                        </li>
                        <li class="providers__item ng-scope">
                            <a class="providers__link" scroll-up="" href="{{ route('frontend.sports.live') }}">
                                <span class="providers__name ng-scope">Live</span>
                            </a>
                        </li>
                        <li class="providers__item ng-scope">
                            <a class="providers__link" scroll-up="" href="{{ route('frontend.sports.prematch') }}">
                                <span class="providers__name ng-scope">Sports</span>
                            </a>
                        </li>
                        <li class="providers__item ng-scope">
                            <a class="providers__link" scroll-up="" href="{{ route('frontend.game.list.category', 'all') }}">
                                <span class="providers__name ng-scope">Casino</span>
                                <!-- <span class="providers__name ng-scope">@lang('app.all')</span> -->
                            </a>
                        </li>
                        @php
                        $top_categories = ['netent', 'playtech', 'pragmatic', 'wazdan', 'amatic', 'isoftbet','egt','playtech','gamomat','playngo'];
                        @endphp
                        @foreach ($top_categories as $k=>$v)
                        <li class="providers__item ng-scope">
                            <a class="providers__link" scroll-up="" href="{{ route('frontend.game.list.category', $v) }}">
                                <span class="providers__icon">
                                    <img class="providers__icon-img providers__icon-img--{{$v}}" alt="{{$v}}" src="/1wrri/providers/small/{{$v}}.svg">
                                </span>
                                <span class="providers__name ng-scope">{{ lcfirst($v) }}</span> </a>
                        </li>
                        @endforeach
                    </ul>
                    @if (!$detect->isMobile() && !$detect->isTablet())
                    <button class="providers__toggler">
                        <span class="providers__toggler-text ng-scope">All Providers</span>
                        <span class="ng-scope ng-hide">@lang('app.close')</span>
                    </button>
                    <div data-v-ee7e2048="" data-v-3147bff8="" class="nav-controls search-container">
                        <div data-v-ee7e2048="" class="search">
                            <svg data-v-ee7e2048="" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon icon icon icon-search sm margin square" icon="search" margin="" square="">
                                <path d="M10.027 8.624c.033.025.064.053.094.083l2.829 2.829a1 1 0 01-1.414 1.414L8.707 10.12a1.01 1.01 0 01-.083-.094 5.5 5.5 0 111.403-1.403zM5.5 9a3.5 3.5 0 100-7 3.5 3.5 0 000 7z">
                                </path>
                            </svg>
                        </div>
                        <input type="text" id="game-search">
                    </div>
                    @endif
                </div>
                <ul class="providers__dropdown ng-hide">
                    @if ($categories && count($categories))
                    @foreach($categories AS $index=>$category)
                    @if (!in_array($category->href, $top_categories))
                    <li class="providers__dropdown-item ng-scope">
                        <a class="providers__link" href="{{ route('frontend.game.list.category', $category->href) }}">
                            <span class="providers__icon">
                                <img class="providers__icon-img providers__icon-img--1x2gaming" alt="" src="/woocasino/logos/{{$category->href}}.svg">
                            </span>
                            <span class="providers__name ng-scope">{{ $category->title }}</span> </a>
                    </li>
                    @endif
                    @endforeach
                    @endif
                </ul>
            </div>
        </section>
    </div>
</div>
<!-- menu -->
<script>
    $(".search-container").click(function() {
        this.style.marginRight = "0px";
    });
    $(".search-container").focusout(function() {
        this.style.marginRight = "-210px";
    });
</script>
@include('frontend.Default.partials.menu')