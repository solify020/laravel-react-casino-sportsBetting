
<div data-v-988aaf82="" class="casino-game-item">
    <div data-v-12e05bc3="" data-v-988aaf82=""
        class="casino-game-card">
        <div data-v-2574a256="" data-v-12e05bc3=""
            class="game-preview radius-m shine-m shine wide-preview">
            <img data-v-2574a256="" class="lazy image" src="/frontend/Default/img/_src/game_loader.png" data-src="{{ $game->name ? '/frontend/Default/ico/' . $game->name . '.jpg' : '' }}" alt="{{ $game->title }}">
            <!---->
            <div data-v-558dc477="" data-v-2574a256=""
                class="border-gradient favourite-border"
                style="border-radius: 10px;">
                <svg data-v-558dc477="" version="1.1"
                    width="100%" height="100%"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" class="">
                    <defs data-v-558dc477="">
                        <linearGradient data-v-558dc477=""
                            id="gradient5970" x1="0%" y1="100%"
                            x2="100%" y2="0%">
                            <stop data-v-558dc477="" offset="0"
                                stop-color="#d0a825">
                            </stop>
                            <stop data-v-558dc477=""
                                offset="0.5"
                                stop-color="#fff29d">
                            </stop>
                            <stop data-v-558dc477="" offset="1"
                                stop-color="#c39400">
                            </stop>
                        </linearGradient>
                    </defs>
                    <rect data-v-558dc477="" x="0" y="0"
                        width="100%" height="100%" rx="10px"
                        fill="transparent"
                        clip-path="url(#clip5970)" class="rect"
                        style="stroke: url(&quot;#gradient5970&quot;); stroke-width: 0;">
                    </rect>
                </svg>
            </div>
        </div>
        <div class="play-btn" style="background: transparent;top: 35%;">
        @if(Auth::check())
            <a href="{{ route('frontend.game.go', $game->name) }}?api_exit=/" class="checkAgreed btn" style="padding: 3px 6px;margin: 2px 0px;">Play</a>
        @else
            <a href="javascript:;" data-name="modal-login" class="checkAgreed btn modal-btn" style="padding: 3px 6px;margin: 2px 0px;">Login</a>

        @endif
        </div>
        <div data-v-12e05bc3="" class="info">
            <div data-v-12e05bc3="" class="name">{{ $game->title }}</div>
            <!---->
        </div>
    </div>
</div>
