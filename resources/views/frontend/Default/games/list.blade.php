@extends('frontend.Default.layouts.app')
@section('page-title', $title)
@section('add-body-class', 'locked')
@section('add-header-class', 'header--redirected')

@section('content')

@php
if(Auth::check() && auth()->user()->email == 'demo01@gmail.com'){
\Auth::logout();
echo "<script>
    location.reload()
</script>";
}
if(Auth::check()){
$currency = auth()->user()->present()->shop ? auth()->user()->present()->shop->currency : '';
} else{
$currency = '';
}
$limit = 11;
$detect = new \Detection\MobileDetect();
@endphp

@include('frontend.Default.partials.messages')
@include('frontend.Default.partials.header')

<div data-v-34ecc166="" class="body main-layout-item">
    <div class="sports-aside-left">
        <div class="sports-bets-navigation sports-panel">
            <div class="bets-navigation__buttons no-search">
                <div class="bets-navigation__button bordered df-aic" onclick='initSearch(true)'>
                    <svg style="font-size: 14px" data-v-b37f2124="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" role="img" class="search-icon icon icon-search-bold sm inline" icon="search-bold" inline="">
                        <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                    <span>Search</span>
                </div>
            </div>
            <div class="sport-list panel-body no-search">
                @php
                $top_categories = ['netent', 'playtech', 'pragmatic', 'wazdan', 'amatic', 'isoftbet','egt','playtech','gamomat','playngo'];
                @endphp
                @foreach ($top_categories as $k=>$v)
                <div class="list-item">
                    <div class="sport-content list-item-content">
                        <a href="{{ route('frontend.game.list.category', $v) }}" class="sport-title">
                            <span class="providers__icon">
                                <img class="providers__icon-img providers__icon-img--{{$v}}" alt="{{$v}}" src="/1wrri/providers/small/{{$v}}.svg">
                            </span>
                            <div class="expanded">{{ lcfirst($v) }}</div>
                            <!-- <i class="sports-icon icon-soccer"></i> -->
                            <!-- <div class="match-count">1460</div> -->
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div data-v-dc84cc38="" class="casino">
        @include('frontend.Default.partials.slider')
        <div data-v-dc84cc38="" class="casino-container" style="margin-top: 15px;">
            <div data-v-29624c3e="" data-v-dc84cc38="" class="casino-section-top-favourite casino-section alone">
                <div data-v-61f34b8f="" data-v-29624c3e="" class="section">
                    <a data-v-61f34b8f="" href="{{ route('frontend.game.list.category', 'top') }}" class="section__header" style="background-image: linear-gradient(90deg, rgba(218, 113, 103, 0.35) 0px, rgba(218, 113, 103, 0.306) 4.5px, rgba(218, 113, 103, 0.26) 9px, rgba(218, 113, 103, 0.216) 13.5px, rgba(218, 113, 103, 0.176) 18px, rgba(218, 113, 103, 0.137) 22.5px, rgba(218, 113, 103, 0.1) 27px, rgba(218, 113, 103, 0.07) 31.5px, rgba(218, 113, 103, 0.047) 36px, rgba(218, 113, 103, 0.027) 40.5px, rgba(218, 113, 103, 0.01) 45px, rgba(218, 113, 103, 0.004) 49.5px, rgba(218, 113, 103, 0) 54px), linear-gradient(97deg, rgb(30, 40, 63), rgba(20, 27, 46, 0.6));">
                        <div data-v-61f34b8f="" class="section__left">
                            <div data-v-61f34b8f="" class="section__id-indicator" style="background-image: linear-gradient(rgb(182, 32, 224) 0%, rgb(247, 181, 0) 100%); opacity: 0.5;">
                            </div>
                            <div data-v-61f34b8f="" class="section__icon-container">
                                <div data-v-5c19827a="" data-v-61f34b8f="" class="WithSelfBlurGlow section__icon-stack">
                                    <div data-v-5c19827a="" class="WithSelfBlurGlow__glow-surrogate" style="filter: blur(10px) saturate(2); top: 0px; opacity: 1; transform: translateZ(0px);">
                                        <svg data-v-61f34b8f="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon section__icon icon icon-casino-section-crown sm" icon="casino/section/crown" data-v-5c19827a="">
                                            <defs>
                                                <linearGradient id="crown_svg__a" x1="-.673" y1="-3.929" x2="-17.983" y2="12.726" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#B620E0">

                                                    </stop>
                                                    <stop offset=".365" stop-color="#F7B500">

                                                    </stop>
                                                </linearGradient>
                                                <linearGradient id="crown_svg__b" x1="9.338" y1="-3.929" x2="-7.973" y2="12.724" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#B620E0">

                                                    </stop>
                                                    <stop offset=".365" stop-color="#F7B500">

                                                    </stop>
                                                </linearGradient>
                                                <linearGradient id="crown_svg__c" x1="9.338" y1="-3.929" x2="-7.973" y2="12.724" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#B620E0">

                                                    </stop>
                                                    <stop offset=".365" stop-color="#F7B500">

                                                    </stop>
                                                </linearGradient>
                                                <linearGradient id="crown_svg__d" x1="-14.487" y1="-17.726" x2="-49.997" y2="44.355" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#B620E0">

                                                    </stop>
                                                    <stop offset=".365" stop-color="#F7B500">

                                                    </stop>
                                                </linearGradient>
                                                <linearGradient id="crown_svg__e" x1="2.756" y1="-17.726" x2="-38.07" y2="17.96" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#B620E0">

                                                    </stop>
                                                    <stop offset=".365" stop-color="#F7B500">

                                                    </stop>
                                                </linearGradient>
                                                <linearGradient id="crown_svg__f" x1="2.756" y1="-17.726" x2="-38.07" y2="17.96" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#B620E0">

                                                    </stop>
                                                    <stop offset=".365" stop-color="#F7B500">

                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <path d="M2.7 9.215l.866-4.373c.1-.5.74-.648 1.043-.24l2.565 3.455c.408.549-.096.676-1.784 2.779-2.235-1.108-2.834-.89-2.69-1.62z" fill="#94A6CD">
                                            </path>
                                            <path d="M2.7 9.215l.866-4.373c.1-.5.74-.648 1.043-.24l2.565 3.455c.408.549-.096.676-1.784 2.779-2.235-1.108-2.834-.89-2.69-1.62z" fill="#94A6CD">
                                            </path>
                                            <path d="M2.7 9.215l.866-4.373c.1-.5.74-.648 1.043-.24l2.565 3.455c.408.549-.096.676-1.784 2.779-2.235-1.108-2.834-.89-2.69-1.62z" fill="url(#crown_svg__a)">
                                            </path>
                                            <path d="M14.647 10.836c-1.697-2.057-2.24-2.216-1.823-2.779l2.565-3.454a.584.584 0 011.044.239l.866 4.373c.15.761-.574.57-2.652 1.62z" fill="#94A6CD">
                                            </path>
                                            <path d="M14.647 10.836c-1.697-2.057-2.24-2.216-1.823-2.779l2.565-3.454a.584.584 0 011.044.239l.866 4.373c.15.761-.574.57-2.652 1.62z" fill="url(#crown_svg__b)">
                                            </path>
                                            <path d="M14.647 10.836c-1.697-2.057-2.24-2.216-1.823-2.779l2.565-3.454a.584.584 0 011.044.239l.866 4.373c.15.761-.574.57-2.652 1.62z" fill="#94A6CD">
                                            </path>
                                            <path d="M14.647 10.836c-1.697-2.057-2.24-2.216-1.823-2.779l2.565-3.454a.584.584 0 011.044.239l.866 4.373c.15.761-.574.57-2.652 1.62z" fill="url(#crown_svg__c)">
                                            </path>
                                            <path d="M19.063 6.85l-4.195 3.152-4.36-7.704A.578.578 0 0010 2a.58.58 0 00-.509.298l-4.359 7.704L.937 6.85c-.442-.332-1.053.083-.918.621l1.601 6.363 1.06.644-.762.54.484 1.92c.066.263.3.447.568.447h14.06a.587.587 0 00.568-.446l.484-1.921-.466-.592.763-.592 1.602-6.363c.135-.54-.477-.952-.918-.62z" fill="#94A6CD">
                                            </path>
                                            <path d="M19.063 6.85l-4.195 3.152-4.36-7.704A.578.578 0 0010 2a.58.58 0 00-.509.298l-4.359 7.704L.937 6.85c-.442-.332-1.053.083-.918.621l1.601 6.363 1.06.644-.762.54.484 1.92c.066.263.3.447.568.447h14.06a.587.587 0 00.568-.446l.484-1.921-.466-.592.763-.592 1.602-6.363c.135-.54-.477-.952-.918-.62z" fill="url(#crown_svg__d)">
                                            </path>
                                            <path d="M19.98 7.471l-1.601 6.363-.764.592.466.592-.484 1.92a.587.587 0 01-.568.447H10V2c.199 0 .397.1.509.298l4.359 7.704 4.195-3.152c.441-.33 1.053.082.918.621z" fill="#94A6CD">
                                            </path>
                                            <path d="M19.98 7.471l-1.601 6.363-.764.592.466.592-.484 1.92a.587.587 0 01-.568.447H10V2c.199 0 .397.1.509.298l4.359 7.704 4.195-3.152c.441-.33 1.053.082.918.621z" fill="url(#crown_svg__e)">
                                            </path>
                                            <path d="M19.98 7.471l-1.601 6.363-.764.592.466.592-.484 1.92a.587.587 0 01-.568.447H10V2c.199 0 .397.1.509.298l4.359 7.704 4.195-3.152c.441-.33 1.053.082.918.621z" fill="#94A6CD">
                                            </path>
                                            <path d="M19.98 7.471l-1.601 6.363-.764.592.466.592-.484 1.92a.587.587 0 01-.568.447H10V2c.199 0 .397.1.509.298l4.359 7.704 4.195-3.152c.441-.33 1.053.082.918.621z" fill="url(#crown_svg__f)">
                                            </path>
                                            <path opacity=".4" d="M12.26 11.162l-1.758-2.958A.579.579 0 0010 7.916a.58.58 0 00-.503.288L7.74 11.162a.597.597 0 000 .61l1.758 2.958a.581.581 0 001.005 0l1.757-2.959a.597.597 0 000-.609z" fill="#fff">
                                            </path>
                                            <path d="M12.258 11.772l-1.757 2.958a.581.581 0 01-.502.288V7.917c.194 0 .387.095.502.287l1.757 2.959a.597.597 0 010 .609z" fill="#fff">
                                            </path>
                                        </svg>
                                    </div>
                                    <div data-v-5c19827a="" class="WithSelfBlurGlow__content-wrapper">
                                        <svg data-v-61f34b8f="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon section__icon icon icon-casino-section-crown sm" icon="casino/section/crown" data-v-5c19827a="">
                                            <defs>
                                                <linearGradient id="crown_svg__a" x1="-.673" y1="-3.929" x2="-17.983" y2="12.726" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#B620E0">

                                                    </stop>
                                                    <stop offset=".365" stop-color="#F7B500">

                                                    </stop>
                                                </linearGradient>
                                                <linearGradient id="crown_svg__b" x1="9.338" y1="-3.929" x2="-7.973" y2="12.724" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#B620E0">

                                                    </stop>
                                                    <stop offset=".365" stop-color="#F7B500">

                                                    </stop>
                                                </linearGradient>
                                                <linearGradient id="crown_svg__c" x1="9.338" y1="-3.929" x2="-7.973" y2="12.724" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#B620E0">

                                                    </stop>
                                                    <stop offset=".365" stop-color="#F7B500">

                                                    </stop>
                                                </linearGradient>
                                                <linearGradient id="crown_svg__d" x1="-14.487" y1="-17.726" x2="-49.997" y2="44.355" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#B620E0">

                                                    </stop>
                                                    <stop offset=".365" stop-color="#F7B500">

                                                    </stop>
                                                </linearGradient>
                                                <linearGradient id="crown_svg__e" x1="2.756" y1="-17.726" x2="-38.07" y2="17.96" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#B620E0">

                                                    </stop>
                                                    <stop offset=".365" stop-color="#F7B500">

                                                    </stop>
                                                </linearGradient>
                                                <linearGradient id="crown_svg__f" x1="2.756" y1="-17.726" x2="-38.07" y2="17.96" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#B620E0">

                                                    </stop>
                                                    <stop offset=".365" stop-color="#F7B500">

                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <path d="M2.7 9.215l.866-4.373c.1-.5.74-.648 1.043-.24l2.565 3.455c.408.549-.096.676-1.784 2.779-2.235-1.108-2.834-.89-2.69-1.62z" fill="#94A6CD">
                                            </path>
                                            <path d="M2.7 9.215l.866-4.373c.1-.5.74-.648 1.043-.24l2.565 3.455c.408.549-.096.676-1.784 2.779-2.235-1.108-2.834-.89-2.69-1.62z" fill="#94A6CD">
                                            </path>
                                            <path d="M2.7 9.215l.866-4.373c.1-.5.74-.648 1.043-.24l2.565 3.455c.408.549-.096.676-1.784 2.779-2.235-1.108-2.834-.89-2.69-1.62z" fill="url(#crown_svg__a)">
                                            </path>
                                            <path d="M14.647 10.836c-1.697-2.057-2.24-2.216-1.823-2.779l2.565-3.454a.584.584 0 011.044.239l.866 4.373c.15.761-.574.57-2.652 1.62z" fill="#94A6CD">
                                            </path>
                                            <path d="M14.647 10.836c-1.697-2.057-2.24-2.216-1.823-2.779l2.565-3.454a.584.584 0 011.044.239l.866 4.373c.15.761-.574.57-2.652 1.62z" fill="url(#crown_svg__b)">
                                            </path>
                                            <path d="M14.647 10.836c-1.697-2.057-2.24-2.216-1.823-2.779l2.565-3.454a.584.584 0 011.044.239l.866 4.373c.15.761-.574.57-2.652 1.62z" fill="#94A6CD">
                                            </path>
                                            <path d="M14.647 10.836c-1.697-2.057-2.24-2.216-1.823-2.779l2.565-3.454a.584.584 0 011.044.239l.866 4.373c.15.761-.574.57-2.652 1.62z" fill="url(#crown_svg__c)">
                                            </path>
                                            <path d="M19.063 6.85l-4.195 3.152-4.36-7.704A.578.578 0 0010 2a.58.58 0 00-.509.298l-4.359 7.704L.937 6.85c-.442-.332-1.053.083-.918.621l1.601 6.363 1.06.644-.762.54.484 1.92c.066.263.3.447.568.447h14.06a.587.587 0 00.568-.446l.484-1.921-.466-.592.763-.592 1.602-6.363c.135-.54-.477-.952-.918-.62z" fill="#94A6CD">
                                            </path>
                                            <path d="M19.063 6.85l-4.195 3.152-4.36-7.704A.578.578 0 0010 2a.58.58 0 00-.509.298l-4.359 7.704L.937 6.85c-.442-.332-1.053.083-.918.621l1.601 6.363 1.06.644-.762.54.484 1.92c.066.263.3.447.568.447h14.06a.587.587 0 00.568-.446l.484-1.921-.466-.592.763-.592 1.602-6.363c.135-.54-.477-.952-.918-.62z" fill="url(#crown_svg__d)">
                                            </path>
                                            <path d="M19.98 7.471l-1.601 6.363-.764.592.466.592-.484 1.92a.587.587 0 01-.568.447H10V2c.199 0 .397.1.509.298l4.359 7.704 4.195-3.152c.441-.33 1.053.082.918.621z" fill="#94A6CD">
                                            </path>
                                            <path d="M19.98 7.471l-1.601 6.363-.764.592.466.592-.484 1.92a.587.587 0 01-.568.447H10V2c.199 0 .397.1.509.298l4.359 7.704 4.195-3.152c.441-.33 1.053.082.918.621z" fill="url(#crown_svg__e)">
                                            </path>
                                            <path d="M19.98 7.471l-1.601 6.363-.764.592.466.592-.484 1.92a.587.587 0 01-.568.447H10V2c.199 0 .397.1.509.298l4.359 7.704 4.195-3.152c.441-.33 1.053.082.918.621z" fill="#94A6CD">
                                            </path>
                                            <path d="M19.98 7.471l-1.601 6.363-.764.592.466.592-.484 1.92a.587.587 0 01-.568.447H10V2c.199 0 .397.1.509.298l4.359 7.704 4.195-3.152c.441-.33 1.053.082.918.621z" fill="url(#crown_svg__f)">
                                            </path>
                                            <path opacity=".4" d="M12.26 11.162l-1.758-2.958A.579.579 0 0010 7.916a.58.58 0 00-.503.288L7.74 11.162a.597.597 0 000 .61l1.758 2.958a.581.581 0 001.005 0l1.757-2.959a.597.597 0 000-.609z" fill="#fff">
                                            </path>
                                            <path d="M12.258 11.772l-1.757 2.958a.581.581 0 01-.502.288V7.917c.194 0 .387.095.502.287l1.757 2.959a.597.597 0 010 .609z" fill="#fff">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div data-v-61f34b8f="" class="section__labels">
                                <div data-v-61f34b8f="" class="section__label">Top games</div>
                            </div>
                        </div>
                        <div data-v-61f34b8f="" class="section__right">
                            <svg data-v-61f34b8f="" width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon section__header-chevron icon icon-chevron-right-obtuse sm" icon="chevron-right-obtuse">
                                <path d="M5.031 13.086a.75.75 0 01-.117-1.055L8.54 7.5 4.914 2.968a.75.75 0 111.172-.937l4 5a.75.75 0 010 .937l-4 5a.75.75 0 01-1.055.118z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            <div data-v-61f34b8f="" data-v-8642f2f6="" data-v-dc84cc38="" class="section casino-section">
                <div data-v-61f34b8f="" class="section__header section__header--with-body" style="background-image: linear-gradient(90deg, rgba(109, 92, 217, 0.35) 0px, rgba(109, 92, 217, 0.306) 4.5px, rgba(109, 92, 217, 0.26) 9px, rgba(109, 92, 217, 0.216) 13.5px, rgba(109, 92, 217, 0.176) 18px, rgba(109, 92, 217, 0.137) 22.5px, rgba(109, 92, 217, 0.1) 27px, rgba(109, 92, 217, 0.07) 31.5px, rgba(109, 92, 217, 0.047) 36px, rgba(109, 92, 217, 0.027) 40.5px, rgba(109, 92, 217, 0.01) 45px, rgba(109, 92, 217, 0.004) 49.5px, rgba(109, 92, 217, 0) 54px), linear-gradient(97deg, rgb(30, 40, 63), rgba(20, 27, 46, 0.6));">
                    <div data-v-61f34b8f="" class="section__left">
                        <div data-v-61f34b8f="" class="section__id-indicator" style="background-image: linear-gradient(rgb(61, 55, 183) 0%, rgb(140, 114, 236) 100%); opacity: 0.5;">
                        </div>
                        <div data-v-61f34b8f="" class="section__icon-container">
                            <div data-v-5c19827a="" data-v-61f34b8f="" class="WithSelfBlurGlow section__icon-stack">
                                <div data-v-5c19827a="" class="WithSelfBlurGlow__glow-surrogate" style="filter: blur(10px) saturate(2); top: 0px; opacity: 1; transform: translateZ(0px);">
                                    <svg data-v-61f34b8f="" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon section__icon icon icon-casino-section-gamepad sm" icon="casino/section/gamepad" data-v-5c19827a="">
                                        <path d="M18.212 5.852C15.57 1.495 11.59 4.526 11.59 4.526a2.057 2.057 0 01-1.057.358H9.467c-.324.001-.8-.16-1.057-.356 0 0-3.98-3.032-6.622 1.325-2.641 4.357-1.577 9.1-1.577 9.1.186 1.162.801 1.938 1.961 1.84 1.157-.097 3.667-3.128 3.667-3.128.207-.25.642-.454.964-.454l6.39-.001c.323 0 .758.204.965.454 0 0 2.51 3.031 3.669 3.128 1.158.097 1.774-.679 1.96-1.84 0 0 1.066-4.743-1.576-9.1zM7.599 9.4h-1.37v1.326s-.29.223-.74.217c-.448-.007-.65-.243-.65-.243V9.4H3.543s-.162-.166-.205-.603c-.042-.438.179-.792.179-.792h1.37V6.628s.282-.151.688-.14c.406.013.703.166.703.166l-.006 1.35h1.294s.226.291.245.643c.019.352-.213.752-.213.752zm6.285 1.512c-.6 0-1.084-.487-1.084-1.09a1.084 1.084 0 112.169 0c0 .603-.488 1.09-1.085 1.09zm0-2.996c-.6 0-1.084-.487-1.084-1.09a1.084 1.084 0 112.169 0c0 .603-.488 1.09-1.085 1.09zm2.7 1.608c-.6 0-1.083-.487-1.083-1.09a1.085 1.085 0 112.169 0c0 .603-.488 1.09-1.085 1.09z" fill="url(#gamepad_svg__paint0_linear)">
                                        </path>
                                        <defs>
                                            <linearGradient id="gamepad_svg__paint0_linear" x1="2.182" y1="23.654" x2="22.527" y2="20.657" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#3D37B7">

                                                </stop>
                                                <stop offset="1" stop-color="#8C72EC">

                                                </stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div data-v-5c19827a="" class="WithSelfBlurGlow__content-wrapper">
                                    <svg data-v-61f34b8f="" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon section__icon icon icon-casino-section-gamepad sm" icon="casino/section/gamepad" data-v-5c19827a="">
                                        <path d="M18.212 5.852C15.57 1.495 11.59 4.526 11.59 4.526a2.057 2.057 0 01-1.057.358H9.467c-.324.001-.8-.16-1.057-.356 0 0-3.98-3.032-6.622 1.325-2.641 4.357-1.577 9.1-1.577 9.1.186 1.162.801 1.938 1.961 1.84 1.157-.097 3.667-3.128 3.667-3.128.207-.25.642-.454.964-.454l6.39-.001c.323 0 .758.204.965.454 0 0 2.51 3.031 3.669 3.128 1.158.097 1.774-.679 1.96-1.84 0 0 1.066-4.743-1.576-9.1zM7.599 9.4h-1.37v1.326s-.29.223-.74.217c-.448-.007-.65-.243-.65-.243V9.4H3.543s-.162-.166-.205-.603c-.042-.438.179-.792.179-.792h1.37V6.628s.282-.151.688-.14c.406.013.703.166.703.166l-.006 1.35h1.294s.226.291.245.643c.019.352-.213.752-.213.752zm6.285 1.512c-.6 0-1.084-.487-1.084-1.09a1.084 1.084 0 112.169 0c0 .603-.488 1.09-1.085 1.09zm0-2.996c-.6 0-1.084-.487-1.084-1.09a1.084 1.084 0 112.169 0c0 .603-.488 1.09-1.085 1.09zm2.7 1.608c-.6 0-1.083-.487-1.083-1.09a1.085 1.085 0 112.169 0c0 .603-.488 1.09-1.085 1.09z" fill="url(#gamepad_svg__paint0_linear)">
                                        </path>
                                        <defs>
                                            <linearGradient id="gamepad_svg__paint0_linear" x1="2.182" y1="23.654" x2="22.527" y2="20.657" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#3D37B7">

                                                </stop>
                                                <stop offset="1" stop-color="#8C72EC">

                                                </stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div data-v-61f34b8f="" class="section__labels">
                            <div data-v-61f34b8f="" class="section__label">All games</div>
                            <div data-v-61f34b8f="" class="section__caption">{{count($games)}} games</div>
                        </div>
                    </div>
                    <div data-v-61f34b8f="" class="section__right">
                    </div>
                </div>
                <div data-v-61f34b8f="" class="section__body" style="background-image: linear-gradient(97deg, rgb(30, 40, 63), rgba(20, 27, 46, 0.6));">
                    <div data-v-61f34b8f="" class="section__body-blur" style="background-image: linear-gradient(142.34deg, rgba(109, 92, 217, 0.45) -30%, rgba(109, 92, 217, 0.392) -23.33%, rgba(108, 91, 217, 0.333) -16.67%, rgba(109, 92, 217, 0.28) -10%, rgba(109, 92, 217, 0.224) -3.33%, rgba(109, 92, 217, 0.176) 3.33%, rgba(109, 92, 217, 0.133) 10%, rgba(109, 92, 217, 0.094) 16.67%, rgba(109, 92, 217, 0.06) 23.33%, rgba(109, 92, 217, 0.035) 30%, rgba(109, 92, 217, 0.016) 36.67%, rgba(109, 92, 217, 0.004) 43.33%, rgba(109, 92, 217, 0) 50%);">
                    </div>
                    <div data-v-61f34b8f="" class="section__body-content">
                        <div data-v-8642f2f6="" data-v-61f34b8f="" class="casino-section-content">
                            <div data-v-988aaf82="" data-v-8642f2f6="" class="casino-games-list casino-game-list" data-v-61f34b8f="" style="margin-bottom: -15px;">
                                <div data-v-988aaf82="" class="vue-recycle-scroller scroller ready page-mode direction-vertical">
                                    <div class="vue-recycle-scroller__item-wrapper" style="min-height: 590.46px;">
                                        <div class="vue-recycle-scroller__item-view" style="position: relative;">
                                            <div data-v-988aaf82="" class="casino-game-line" style="flex-wrap: wrap; justify-content: space-around;">
                                                @if ($games && count($games))
                                                @foreach ($games as $key=>$game)
                                                {{-- @if($key % $limit == 0)
                                                                            @if($key > 0)
                                                                            </div>
                                                                        </div>
                                                                            @endif
                                                                            <div class="vue-recycle-scroller__item-view" style="transform: translateY({{ (int)($key/$limit)*148 }}px);">
                                                <div data-v-988aaf82="" class="casino-game-line">
                                                    @endif --}}
                                                    @include('frontend.Default.partials.game')
                                                    @endforeach
                                                    {{-- @if(count($games) % $limit != 0)
                                                </div>
                                            </div>
                                            @endif --}}
                                            @endif
                                        </div>
                                    </div>
                                    <div style="width: 100%; display:flex; justify-content: center; align-items: center; margin: 10px auto;">
                                        <Button class="showmore" style="padding: 8px 16px;background-color: #263e60;">Load More</Button>
                                    </div>
                                </div>
                                <div data-v-b329ee4c="" tabindex="-1" class="resize-observer">
                                    <object aria-hidden="true" tabindex="-1" type="text/html" data="about:blank">
                                    </object>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-v-61f34b8f="" data-v-3e6ea303="" data-v-dc84cc38="" class="section casino-section">
            <a data-v-61f34b8f="" href="/casino/providers" class="section__header section__header--with-body" style="background-image: linear-gradient(90deg, rgba(255, 149, 75, 0.35) 0px, rgba(255, 149, 75, 0.306) 4.5px, rgba(255, 149, 75, 0.26) 9px, rgba(255, 149, 75, 0.216) 13.5px, rgba(255, 149, 75, 0.176) 18px, rgba(255, 149, 75, 0.137) 22.5px, rgba(255, 149, 75, 0.1) 27px, rgba(255, 149, 75, 0.07) 31.5px, rgba(255, 149, 75, 0.047) 36px, rgba(255, 149, 75, 0.027) 40.5px, rgba(255, 149, 75, 0.01) 45px, rgba(255, 149, 75, 0.004) 49.5px, rgba(255, 149, 75, 0) 54px), linear-gradient(97deg, rgb(30, 40, 63), rgba(20, 27, 46, 0.6));">
                <div data-v-61f34b8f="" class="section__left">
                    <div data-v-61f34b8f="" class="section__id-indicator" style="background-image: linear-gradient(rgb(255, 137, 55) 0%, rgb(255, 41, 88) 100%); opacity: 0.5;">
                    </div>
                    <div data-v-61f34b8f="" class="section__icon-container">
                        <div data-v-5c19827a="" data-v-61f34b8f="" class="WithSelfBlurGlow section__icon-stack">
                            <div data-v-5c19827a="" class="WithSelfBlurGlow__glow-surrogate" style="filter: blur(10px) saturate(2); top: 0px; opacity: 1; transform: translateZ(0px);">
                                <svg data-v-61f34b8f="" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon section__icon icon icon-casino-section-robot sm" icon="casino/section/robot" data-v-5c19827a="">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.463 14.646a1.463 1.463 0 110-2.927 1.463 1.463 0 010 2.927zm7.317 0a1.463 1.463 0 110-2.927 1.463 1.463 0 010 2.927z" fill="#fff">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 3.427c5.09 0 7.453 2.1 8.55 4.051V.988h.95v14.634s0 4.878-9.5 4.878S.5 15.622.5 15.622V.988h.95v6.49C2.547 5.528 4.91 3.427 10 3.427zm-7.125 9.756c0-2.02 1.593-3.659 3.564-3.659h7.122c1.969 0 3.564 1.638 3.564 3.659 0 2.02-1.593 3.659-3.564 3.659H6.44c-1.968 0-3.564-1.638-3.564-3.66zM1.45.988A.482.482 0 00.975.5.482.482 0 00.5.988h.95zm18.05 0A.482.482 0 0019.025.5a.482.482 0 00-.475.488h.95z" fill="url(#robot_svg__paint0_linear)">
                                    </path>
                                    <defs>
                                        <linearGradient id="robot_svg__paint0_linear" x1="24.074" y1="25.5" x2="27.111" y2="-7.72" gradientUnits="userSpaceOnUse">
                                            <stop offset=".03" stop-color="#FF2958">

                                            </stop>
                                            <stop offset=".416" stop-color="#FF8937">

                                            </stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div data-v-5c19827a="" class="WithSelfBlurGlow__content-wrapper">
                                <svg data-v-61f34b8f="" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon section__icon icon icon-casino-section-robot sm" icon="casino/section/robot" data-v-5c19827a="">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.463 14.646a1.463 1.463 0 110-2.927 1.463 1.463 0 010 2.927zm7.317 0a1.463 1.463 0 110-2.927 1.463 1.463 0 010 2.927z" fill="#fff">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 3.427c5.09 0 7.453 2.1 8.55 4.051V.988h.95v14.634s0 4.878-9.5 4.878S.5 15.622.5 15.622V.988h.95v6.49C2.547 5.528 4.91 3.427 10 3.427zm-7.125 9.756c0-2.02 1.593-3.659 3.564-3.659h7.122c1.969 0 3.564 1.638 3.564 3.659 0 2.02-1.593 3.659-3.564 3.659H6.44c-1.968 0-3.564-1.638-3.564-3.66zM1.45.988A.482.482 0 00.975.5.482.482 0 00.5.988h.95zm18.05 0A.482.482 0 0019.025.5a.482.482 0 00-.475.488h.95z" fill="url(#robot_svg__paint0_linear)">
                                    </path>
                                    <defs>
                                        <linearGradient id="robot_svg__paint0_linear" x1="24.074" y1="25.5" x2="27.111" y2="-7.72" gradientUnits="userSpaceOnUse">
                                            <stop offset=".03" stop-color="#FF2958">

                                            </stop>
                                            <stop offset=".416" stop-color="#FF8937">

                                            </stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div data-v-61f34b8f="" class="section__labels">
                        <div data-v-61f34b8f="" class="section__label">Providers</div>
                        <div data-v-61f34b8f="" class="section__caption">{{count($categories)}} providers</div>
                    </div>
                </div>
                <div data-v-61f34b8f="" class="section__right">
                    <div data-v-61f34b8f="" class="section__link-label">View all</div>
                    <svg data-v-61f34b8f="" width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon section__header-chevron icon icon-chevron-right-obtuse sm" icon="chevron-right-obtuse">
                        <path d="M5.031 13.086a.75.75 0 01-.117-1.055L8.54 7.5 4.914 2.968a.75.75 0 111.172-.937l4 5a.75.75 0 010 .937l-4 5a.75.75 0 01-1.055.118z">
                        </path>
                    </svg>
                </div>
            </a>
            <div data-v-61f34b8f="" class="section__body" style="background-image: linear-gradient(97deg, rgb(30, 40, 63), rgba(20, 27, 46, 0.6));">
                <div data-v-61f34b8f="" class="section__body-blur" style="background-image: linear-gradient(142.34deg, rgba(255, 149, 75, 0.45) -30%, rgba(254, 149, 74, 0.392) -23.33%, rgba(255, 149, 74, 0.333) -16.67%, rgba(255, 149, 75, 0.28) -10%, rgba(255, 149, 75, 0.224) -3.33%, rgba(255, 149, 75, 0.176) 3.33%, rgba(255, 149, 75, 0.133) 10%, rgba(255, 149, 75, 0.094) 16.67%, rgba(255, 149, 75, 0.06) 23.33%, rgba(255, 149, 75, 0.035) 30%, rgba(255, 149, 75, 0.016) 36.67%, rgba(255, 149, 75, 0.004) 43.33%, rgba(255, 149, 75, 0) 50%);">
                </div>
                <div data-v-61f34b8f="" class="section__body-content">
                    <div data-v-3e6ea303="" data-v-61f34b8f="" class="casino-section-content horizontal-scrollable-container">
                        @foreach($categories as $cat)
                        @php
                        $cat_games = \VanguardLTE\Game::select('games.*')->where('shop_id', (isset(auth()->user()->shop_id) ? auth()->user()->shop_id : 1));
                        $cat_games = $cat_games->join('game_categories', 'game_categories.game_id', '=', 'games.original_id');
                        $cat_games = $cat_games->where('game_categories.category_id', $cat->id);
                        @endphp
                        <a data-v-63170ec7="" data-v-3e6ea303="" href="{{ route('frontend.game.list.category', $cat->href) }}" class="shortcut-provider provider-container extend" data-v-61f34b8f="">
                            <div data-v-63170ec7="" class="shortcut-provider__header">
                                <img data-v-484f1055="" data-v-63170ec7="" alt="{{ $cat->title }}" src="/1wrri/providers/small/{{$cat->href}}.svg" class="CasinoProviderIcon shortcut-provider__icon">
                                <div data-v-63170ec7="" class="shortcut-provider__labels">
                                    <div data-v-63170ec7="" class="shortcut-provider__label">{{ $cat->title }}</div>
                                    <div data-v-63170ec7="" class="shortcut-provider__caption">{{$cat_games->count()}} games</div>
                                </div>
                                <svg data-v-63170ec7="" width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon shortcut-provider__chevron icon icon-chevron-right-obtuse sm" icon="chevron-right-obtuse">
                                    <path d="M5.031 13.086a.75.75 0 01-.117-1.055L8.54 7.5 4.914 2.968a.75.75 0 111.172-.937l4 5a.75.75 0 010 .937l-4 5a.75.75 0 01-1.055.118z">
                                    </path>
                                </svg>
                            </div>
                            <div data-v-63170ec7="" class="shortcut-provider__body">
                                <div data-v-3e6ea303="" class="provider-games-container">
                                    <div data-v-3e6ea303="" class="provider-games-row">
                                        @foreach($cat_games->limit(6)->get() as $k => $cat_g)
                                        @if($k == 3)
                                    </div>
                                    <div data-v-3e6ea303="" class="provider-games-row">
                                        @endif
                                        <div data-v-3e6ea303="" class="provider-game">
                                            <div data-v-2574a256="" data-v-3e6ea303="" class="game-preview radius-s shine-m shine" shinesize="s">
                                                <img data-v-2574a256="" class="lazy image" src="/frontend/Default/img/_src/game_loader.png" data-src="{{ $cat_g->name ? '/frontend/Default/ico/' . $cat_g->name . '.jpg' : '' }}" alt="{{ $cat_g->title }}">
                                                <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 8px;">
                                                    <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                                        <defs data-v-558dc477="">
                                                            <linearGradient data-v-558dc477="" id="gradient4259" x1="0%" y1="100%" x2="100%" y2="0%">
                                                                <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                                </stop>
                                                                <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                                </stop>
                                                                <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                                </stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="8px" fill="transparent" clip-path="url(#clip4259)" class="rect" style="stroke: url('#gradient4259'); stroke-width: 0;">
                                                        </rect>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        <div data-v-3e6ea303="" data-v-61f34b8f="" class="empty-area"></div>
                    </div>
                </div>
            </div>
        </div>
        <div data-v-61f34b8f="" data-v-c36331ba="" data-v-dc84cc38="" class="section casino-section">
            <div data-v-61f34b8f="" class="section__header section__header--with-body" style="background-image: linear-gradient(90deg, rgba(253, 26, 113, 0.35) 0px, rgba(253, 26, 113, 0.306) 4.5px, rgba(253, 26, 113, 0.26) 9px, rgba(253, 26, 113, 0.216) 13.5px, rgba(253, 26, 113, 0.176) 18px, rgba(253, 26, 113, 0.137) 22.5px, rgba(253, 26, 113, 0.1) 27px, rgba(253, 26, 113, 0.07) 31.5px, rgba(253, 26, 113, 0.047) 36px, rgba(253, 26, 113, 0.027) 40.5px, rgba(253, 26, 113, 0.01) 45px, rgba(253, 26, 113, 0.004) 49.5px, rgba(253, 26, 113, 0) 54px), linear-gradient(97deg, rgb(30, 40, 63), rgba(20, 27, 46, 0.6));">
                <div data-v-61f34b8f="" class="section__left">
                    <div data-v-61f34b8f="" class="section__id-indicator" style="background-image: linear-gradient(rgb(255, 23, 100) 0%, rgb(174, 103, 198) 100%); opacity: 0.5;">
                    </div>
                    <div data-v-61f34b8f="" class="section__icon-container">
                        <div data-v-200573af="" data-v-c36331ba="" class="dot-indicator dot-indicator" data-v-61f34b8f="">
                            <div data-v-200573af="" class="dot-indicator-blur" style="width: 26px; height: 26px; top: -8px; left: -8px; background: linear-gradient(233.68deg, rgb(255, 23, 100) 12.29%, rgb(84, 132, 242) 159.43%); border-radius: 5px; filter: blur(16.38px);">
                            </div>
                            <div data-v-200573af="" class="outer-indicator" style="width: 26px; height: 26px; top: -8px; left: -8px; background: linear-gradient(233.68deg, rgb(255, 23, 100) 12.29%, rgb(84, 132, 242) 159.43%); border-radius: 5px; filter: blur(16.38px);">
                            </div>
                            <div data-v-200573af="" class="inner-indicator" style="min-width: 10px; min-height: 10px; background: linear-gradient(233.68deg, rgb(255, 23, 100) 12.29%, rgb(84, 132, 242) 159.43%);">
                            </div>
                        </div>
                    </div>
                    <div data-v-61f34b8f="" class="section__labels">
                        <div data-v-61f34b8f="" class="section__label">{{\VanguardLTE\User::all()->count()}} players online</div>
                        <div data-v-61f34b8f="" class="section__caption">Last wins:</div>
                    </div>
                </div>
                <div data-v-61f34b8f="" class="section__right">
                    <div data-v-76467fef="" data-v-c36331ba="" class="dropdown info-tooltip align-top-right" data-v-61f34b8f="">
                        <div data-v-76467fef="" class="dropdown-trigger">
                            <svg data-v-c36331ba="" viewBox="0 0 21 21" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon icon-info icon icon-question-circle sm" icon="question-circle" data-v-76467fef="">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 0C4.7 0 0 4.7 0 10.5S4.7 21 10.5 21 21 16.3 21 10.5 16.3 0 10.5 0zm-.212 15.54a1.042 1.042 0 01-1.048-1.05c0-.586.47-1.05 1.048-1.05.582 0 1.052.459 1.052 1.05a1.04 1.04 0 01-1.052 1.05zm1.769-5.284c-.857.508-1.147.881-1.147 1.526v.398H9.202l-.014-.433c-.084-1.038.27-1.683 1.161-2.217.832-.508 1.181-.83 1.181-1.456 0-.624-.59-1.083-1.324-1.083-.743 0-1.28.494-1.319 1.24H7.14c.034-1.622 1.206-2.771 3.185-2.771 1.845 0 3.115 1.048 3.115 2.554 0 1.002-.473 1.693-1.383 2.242z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-61f34b8f="" class="section__body" style="background-image: linear-gradient(97deg, rgb(30, 40, 63), rgba(20, 27, 46, 0.6));">
                <div data-v-61f34b8f="" class="section__body-blur" style="background-image: linear-gradient(142.34deg, rgba(253, 26, 113, 0.45) -30%, rgba(253, 25, 113, 0.392) -23.33%, rgba(253, 26, 113, 0.333) -16.67%, rgba(253, 26, 113, 0.28) -10%, rgba(253, 26, 113, 0.224) -3.33%, rgba(253, 26, 113, 0.176) 3.33%, rgba(253, 26, 113, 0.133) 10%, rgba(253, 26, 113, 0.094) 16.67%, rgba(253, 26, 113, 0.06) 23.33%, rgba(253, 26, 113, 0.035) 30%, rgba(253, 26, 113, 0.016) 36.67%, rgba(253, 26, 113, 0.004) 43.33%, rgba(253, 26, 113, 0) 50%);">
                </div>
                <div data-v-61f34b8f="" class="section__body-content">
                    <div data-v-c36331ba="" data-v-61f34b8f="" class="casino-section-container" style="padding: 15px;">
                        <div data-v-c36331ba="" data-v-61f34b8f="" class="casino-section-content">
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/pragmatic/vs20sbxmas.png" loading="lazy" class="image">
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6206" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6206)" class="rect" style="stroke: url('#gradient6206'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">13.21 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Sweet Bonanza Xmas</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">z********@mail.ru
                                    </div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/endorphina/c_19177eff929b04995443e8db02226be2.gif" loading="lazy" class="image">
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6210" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6210)" class="rect" style="stroke: url('#gradient6210'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">12.4 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Hell Hot 20</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">n********@gmail.com</div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/pragmatic/c_fb81764d6bc40155b70735e03cad2af0.png" loading="lazy" class="image">
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6214" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6214)" class="rect" style="stroke: url('#gradient6214'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">18.85 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Madame Destiny
                                        Megaways</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">
                                        s********@gmail.com</div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/spribe/c_2b72970bce8263a6327d3c7108db1c32.png" loading="lazy" class="image">
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6218" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6218)" class="rect" style="stroke: url('#gradient6218'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">8.56 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Aviator</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">l******@mail.ru
                                    </div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/spribe/c_00c1b25a03566b36e38a9e6c694c50c2.png" loading="lazy" class="image">
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6222" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6222)" class="rect" style="stroke: url('#gradient6222'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">11.46 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Mines</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">v********@mail.ru
                                    </div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/spribe/c_2b72970bce8263a6327d3c7108db1c32.png" loading="lazy" class="image">
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6226" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6226)" class="rect" style="stroke: url('#gradient6226'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">33.22 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Aviator</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">d********@gmail.com</div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" loading="lazy" class="image" style="display: none;">
                                    <div data-v-eae5575e="" data-v-2574a256="" class="game-stub game-stub active gradient-1">
                                        <div data-v-eae5575e="" class="game-stub-content">
                                            <div data-v-eae5575e="" class="game-stub-icon-wrap" style="max-height: calc(100% - 34px);">
                                                <svg data-v-eae5575e="" xmlns="http://www.w3.org/2000/svg" width="63" height="70" viewBox="0 0 63 70" aria-hidden="true" role="img" class="icon game-stub-icon icon icon-casino-noun-joystick_2 sm active" icon="casino/noun-joystick_2">
                                                    <defs>
                                                        <linearGradient id="noun-joystick_2_svg__a" x1="78.478%" x2="50%" y1="0%" y2="100%">
                                                            <stop offset="0%" stop-color="#00FF86">

                                                            </stop>
                                                            <stop offset="100%" stop-color="#00A858">

                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <ellipse fill="none" cx="11.74" cy="38.346" rx="3.41" ry="2.498">
                                                    </ellipse>
                                                    <path fill="none" d="M32.988 31.171V35.5c0 1.199-.866 2.17-1.94 2.17a1.833 1.833 0 01-1.37-.639 2.283 2.283 0 01-.572-1.531v-4.214c-4.589.756-8.009 3.642-8.009 7.095 0 4.03 4.651 7.295 10.388 7.295 5.736 0 10.387-3.267 10.387-7.295 0-3.67-3.861-6.698-8.884-7.21z">
                                                    </path>
                                                    <path fill="url(#noun-joystick_2_svg__a)" d="M58.444 36.324c-1.348-.793-22.836-13.241-22.836-13.241s-1.316-.915-2.62-1.222v-3.146a9.298 9.298 0 006.899-8.991A9.312 9.312 0 0030.57.408a9.312 9.312 0 00-9.316 9.316 9.31 9.31 0 007.85 9.201v2.968c-1.198.25-2.854.873-4.995 2.3C23 24.748 4.525 35.85 4.525 35.85S.164 37.594.56 43.303c-.08 1.189-.025 5.312-.025 5.312s-.371 3.965 3.91 6.343C8.729 57.337 27.6 68.36 27.6 68.36s3.33 2.776 7.93 0c4.598-2.775 24.5-14.352 24.5-14.352s2.3-1.903 2.38-4.52c.079-2.616 0-5.63 0-5.63s.952-5.471-3.965-7.533zM28.06 9.295a3.57 3.57 0 01-3.567-3.568 3.57 3.57 0 013.567-3.568 3.57 3.57 0 013.568 3.568 3.57 3.57 0 01-3.567 3.568zm-16.32 31.55c-1.883 0-3.41-1.119-3.41-2.498 0-1.38 1.527-2.498 3.41-2.498 1.883 0 3.41 1.119 3.41 2.498 0 1.379-1.527 2.497-3.41 2.497zm19.745 4.83c-5.737 0-10.388-3.265-10.388-7.294 0-3.453 3.42-6.34 8.009-7.095V35.5c0 .599.22 1.142.571 1.531.343.39.837.638 1.37.638 1.075 0 1.941-.97 1.941-2.17v-4.328c5.023.513 8.884 3.54 8.884 7.21 0 4.029-4.65 7.295-10.387 7.295z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6234" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6234)" class="rect" style="stroke: url('#gradient6234'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">10.54 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Fortune Wheel
                                    </div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">
                                        k********@gmail.com</div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/relax/c_4be07f08f0103ed3b67a5b925d642afd.png" loading="lazy" class="image">
                                    <!---->
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6238" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6238)" class="rect" style="stroke: url('#gradient6238'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">28.53 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Money Train</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">
                                        s********@yandex.ru</div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/spribe/c_2b72970bce8263a6327d3c7108db1c32.png" loading="lazy" class="image">
                                    <!---->
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6242" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6242)" class="rect" style="stroke: url('#gradient6242'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">16.54 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Aviator</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">
                                        a********@yandex.ru</div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/elk/c_67501b16c21efcd27d948fb5f6b97ec1.png" loading="lazy" class="image">
                                    <!---->
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6246" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6246)" class="rect" style="stroke: url('#gradient6246'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">26.05 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Io</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">
                                        a********@gmail.com</div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/pragmatic/c_e27e860d5b23c379f01278bcc6a0aa5e.jpg" loading="lazy" class="image" style="display: none;">
                                    <div data-v-eae5575e="" data-v-2574a256="" class="game-stub game-stub active gradient-0">
                                        <div data-v-eae5575e="" class="game-stub-content">
                                            <div data-v-eae5575e="" class="game-stub-icon-wrap" style="max-height: calc(100% - 34px);">
                                                <svg data-v-eae5575e="" xmlns="http://www.w3.org/2000/svg" width="63" height="65" viewBox="0 0 63 65" aria-hidden="true" role="img" class="icon game-stub-icon icon icon-casino-cherries-with-stem sm active" icon="casino/cherries-with-stem">
                                                    <defs>
                                                        <linearGradient id="cherries-with-stem_svg__a" x1="36.742%" x2="36.742%" y1="100%" y2="50%">
                                                            <stop offset="0%" stop-color="#C80089">

                                                            </stop>
                                                            <stop offset="100%" stop-color="#FF006B">

                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="cherries-with-stem_svg__b" x1="36.742%" x2="36.742%" y1="100%" y2="50%">
                                                            <stop offset="0%" stop-color="#C80089">

                                                            </stop>
                                                            <stop offset="100%" stop-color="#FF006B">

                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path fill="url(#cherries-with-stem_svg__a)" d="M13.131 64.463c2.644.587 12.33 2.138 16.455-5.466.528-.97.955-1.875 1.327-2.739-1.5-2.748-1.853-5.046-1.8-6.961-.667.238-1.441.085-1.866-.729-.994-1.9-2.432-3.153-4.41-4-.835-.357-1.015-1.556-.598-2.261.5-.847 1.449-.95 2.284-.593a11.231 11.231 0 015.006 4.178l.002-.013c.17-1 .611-2.065 1.241-3.08l-.06-.125c-1.452-2.998-6.043-5.57-9.198-4.755-.29.075-.537.132-.785.19 2.103-12.27 7.547-22.6 16.857-30.101-4.252 9.058-2.166 20.332 1.46 29.814a18.07 18.07 0 001.635-.149c.312-.33.776-.874 1.405-1.707-4.06-10.765-6-24.194 3.32-32.598.065-.06.114-.124.167-.185C47.2 2.593 43.681-.22 43.25.013 28.412 8.049 19.859 21.365 17.2 37.728a29.42 29.42 0 01-1.296-.941c-2.581-1.974-7.823-1.385-10.342.81-2.514 2.19-6.369 5.09-5.414 15.457.791 8.6 10.32 10.925 12.982 11.41z">
                                                    </path>
                                                    <path fill="url(#cherries-with-stem_svg__b)" d="M62.794 46.971c-1.938-10.178-6.333-11.894-9.28-13.3-.95-.454-2.117-.671-3.325-.671-2.552 0-5.29.97-6.562 2.73-.228.315-.437.595-.629.844-.587.763-1.007 1.23-1.296 1.516-.36.071-.907.147-1.716.202-.374.025-.798.046-1.294.06-2.516.066-5.288 2.421-6.597 5.02-.342.678-.59 1.372-.7 2.047-.358 2.175-.958 4.972.805 8.793.877 1.9 2.328 4.05 4.704 6.511C39.29 63.191 42.108 64 44.778 64c3.975 0 7.617-1.79 8.999-2.56 2.357-1.193 10.625-6.03 9.017-14.469zm-7.983-4.359c-1.54-2.215-3.85-3.273-6.467-2.536-2.022.57-2.88-2.606-.864-3.175 4.093-1.154 7.757.627 10.135 4.049 1.21 1.741-1.609 3.383-2.804 1.662z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6254" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6254)" class="rect" style="stroke: url('#gradient6254'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">8.38 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Great Rhino
                                        Megaways</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">
                                        s********@yandex.ru</div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/pariplay/c_5f89665946eec07e1d64013d1b3033a0.png" loading="lazy" class="image">
                                    <!---->
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6258" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6258)" class="rect" style="stroke: url('#gradient6258'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">6.89 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Stallion Fortunes
                                        94</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">s*******@mail.ru
                                    </div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card jackpot" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" loading="lazy" class="image" style="display: none;">
                                    <div data-v-eae5575e="" data-v-2574a256="" class="game-stub game-stub active gradient-1">
                                        <div data-v-eae5575e="" class="game-stub-content">
                                            <div data-v-eae5575e="" class="game-stub-icon-wrap" style="max-height: calc(100% - 34px);">
                                                <svg data-v-eae5575e="" xmlns="http://www.w3.org/2000/svg" width="71" height="52" viewBox="0 0 71 52" aria-hidden="true" role="img" class="icon game-stub-icon icon icon-casino-gamepad_2 sm active" icon="casino/gamepad_2">
                                                    <defs>
                                                        <linearGradient id="gamepad_2_svg__a" x1="85.499%" x2="50%" y1="23.18%" y2="76.82%">
                                                            <stop offset="0%" stop-color="#00FF86">

                                                            </stop>
                                                            <stop offset="100%" stop-color="#00A858">

                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path fill="url(#gamepad_2_svg__a)" d="M69.498 22.64C66.015 6.899 61.105 3.018 58.115 1.46c-4.788-2.492-10.34-1.042-12.182-.102-2.09 1.063-3.502 3.085-5.628 3.964-2.456 1.01-5.797 1.284-8.31.064-2.002-.975-3.768-3.055-6.194-3.976-3.075-1.17-8.196-2.81-13.267.775-1.199.848-9.748 7.918-12.316 30.005-1.584 13.618 5.986 18 5.708 17.801 1.947 1.377 6.308 3.703 12.216.058 3.95-2.434 7.154-7.244 7.154-7.244s1.428-2.675 3.324-3.811c1.343-.806 3.35-.194 3.35-.194h7.106s2.255-.28 3.84.41c1.537.662 2.405 2.297 2.405 2.297s4.683 5.97 9.172 9.012c1.91 1.293 9.59 2.781 13.555-1.996 2.59-3.127 4.356-12.74 1.45-25.882zM31.54 21.248a2.158 2.158 0 01-2.152 2.164h-5.383v5.42A2.16 2.16 0 0121.853 31h-1.615a2.159 2.159 0 01-2.152-2.168v-5.42h-5.385a2.157 2.157 0 01-2.152-2.164v-1.625a2.16 2.16 0 012.152-2.169h5.383V12.04c0-1.197.964-2.169 2.152-2.169h1.615a2.16 2.16 0 012.152 2.169v5.415h5.383a2.16 2.16 0 012.152 2.169v1.623h.002zm15.161 7.582c-2.229 0-4.036-1.817-4.036-4.063 0-2.243 1.807-4.062 4.036-4.062 2.23 0 4.036 1.817 4.036 4.062.002 2.246-1.807 4.063-4.036 4.063zm7.401-9.025c-2.205 0-3.991-1.798-3.991-4.02 0-2.214 1.786-4.012 3.991-4.012s3.992 1.798 3.992 4.013c0 2.22-1.787 4.019-3.992 4.019z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6266" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6266)" class="rect" style="stroke: url('#gradient6266'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">143.34 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Fan Tan</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">
                                        A********@gmail.com</div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/pragmatic/c_fb81764d6bc40155b70735e03cad2af0.png" loading="lazy" class="image">
                                    <!---->
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6270" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6270)" class="rect" style="stroke: url('#gradient6270'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">27.29 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Madame Destiny
                                        Megaways</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">
                                        a********@gmail.com</div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/relax/c_81208fbe15f7d4b1d25122f8d407e4f2.jpg" loading="lazy" class="image">
                                    <!---->
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6274" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6274)" class="rect" style="stroke: url('#gradient6274'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">97.8 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Extra Chilli
                                    </div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">
                                        y********@yandex.ru</div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/pragmatic/c_396edc56d0e05c55d682744ed5bae8c0.jpg" loading="lazy" class="image">
                                    <!---->
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6278" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6278)" class="rect" style="stroke: url('#gradient6278'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">53.17 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Sweet Bonanza
                                    </div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">k********@mail.ru
                                    </div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" src="https://cdn-1win.xyz/casino-images/pragmatic/c_8dc1dc9add0c0f68d3d584363548bd33.png" loading="lazy" class="image" style="display: none;">
                                    <div data-v-eae5575e="" data-v-2574a256="" class="game-stub game-stub active gradient-0">
                                        <div data-v-eae5575e="" class="game-stub-content">
                                            <div data-v-eae5575e="" class="game-stub-icon-wrap" style="max-height: calc(100% - 34px);">
                                                <svg data-v-eae5575e="" xmlns="http://www.w3.org/2000/svg" width="63" height="65" viewBox="0 0 63 65" aria-hidden="true" role="img" class="icon game-stub-icon icon icon-casino-cherries-with-stem sm active" icon="casino/cherries-with-stem">
                                                    <defs>
                                                        <linearGradient id="cherries-with-stem_svg__a" x1="36.742%" x2="36.742%" y1="100%" y2="50%">
                                                            <stop offset="0%" stop-color="#C80089">

                                                            </stop>
                                                            <stop offset="100%" stop-color="#FF006B">

                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="cherries-with-stem_svg__b" x1="36.742%" x2="36.742%" y1="100%" y2="50%">
                                                            <stop offset="0%" stop-color="#C80089">

                                                            </stop>
                                                            <stop offset="100%" stop-color="#FF006B">

                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path fill="url(#cherries-with-stem_svg__a)" d="M13.131 64.463c2.644.587 12.33 2.138 16.455-5.466.528-.97.955-1.875 1.327-2.739-1.5-2.748-1.853-5.046-1.8-6.961-.667.238-1.441.085-1.866-.729-.994-1.9-2.432-3.153-4.41-4-.835-.357-1.015-1.556-.598-2.261.5-.847 1.449-.95 2.284-.593a11.231 11.231 0 015.006 4.178l.002-.013c.17-1 .611-2.065 1.241-3.08l-.06-.125c-1.452-2.998-6.043-5.57-9.198-4.755-.29.075-.537.132-.785.19 2.103-12.27 7.547-22.6 16.857-30.101-4.252 9.058-2.166 20.332 1.46 29.814a18.07 18.07 0 001.635-.149c.312-.33.776-.874 1.405-1.707-4.06-10.765-6-24.194 3.32-32.598.065-.06.114-.124.167-.185C47.2 2.593 43.681-.22 43.25.013 28.412 8.049 19.859 21.365 17.2 37.728a29.42 29.42 0 01-1.296-.941c-2.581-1.974-7.823-1.385-10.342.81-2.514 2.19-6.369 5.09-5.414 15.457.791 8.6 10.32 10.925 12.982 11.41z">
                                                    </path>
                                                    <path fill="url(#cherries-with-stem_svg__b)" d="M62.794 46.971c-1.938-10.178-6.333-11.894-9.28-13.3-.95-.454-2.117-.671-3.325-.671-2.552 0-5.29.97-6.562 2.73-.228.315-.437.595-.629.844-.587.763-1.007 1.23-1.296 1.516-.36.071-.907.147-1.716.202-.374.025-.798.046-1.294.06-2.516.066-5.288 2.421-6.597 5.02-.342.678-.59 1.372-.7 2.047-.358 2.175-.958 4.972.805 8.793.877 1.9 2.328 4.05 4.704 6.511C39.29 63.191 42.108 64 44.778 64c3.975 0 7.617-1.79 8.999-2.56 2.357-1.193 10.625-6.03 9.017-14.469zm-7.983-4.359c-1.54-2.215-3.85-3.273-6.467-2.536-2.022.57-2.88-2.606-.864-3.175 4.093-1.154 7.757.627 10.135 4.049 1.21 1.741-1.609 3.383-2.804 1.662z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6286" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6286)" class="rect" style="stroke: url('#gradient6286'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">20.33 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Release the
                                        Kraken</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">e********@bk.ru
                                    </div>
                                </div>
                            </div>
                            <div data-v-55106a0e="" data-v-c36331ba="" class="winners-card casino-winner-card" data-v-61f34b8f="" style="width: 109px; margin-right: 15px;">
                                <div data-v-2574a256="" data-v-55106a0e="" class="game-preview radius-m shine-m wide-preview">
                                    <img data-v-2574a256="" loading="lazy" class="image" style="display: none;">
                                    <div data-v-eae5575e="" data-v-2574a256="" class="game-stub game-stub active gradient-1">
                                        <div data-v-eae5575e="" class="game-stub-content">
                                            <div data-v-eae5575e="" class="game-stub-icon-wrap" style="max-height: calc(100% - 34px);">
                                                <svg data-v-eae5575e="" xmlns="http://www.w3.org/2000/svg" width="63" height="65" viewBox="0 0 63 65" aria-hidden="true" role="img" class="icon game-stub-icon icon icon-casino-cherries-with-stem_2 sm active" icon="casino/cherries-with-stem_2">
                                                    <defs>
                                                        <linearGradient id="cherries-with-stem_2_svg__a" x1="67.779%" x2="50%" y1="0%" y2="100%">
                                                            <stop offset="0%" stop-color="#00FF86">

                                                            </stop>
                                                            <stop offset="100%" stop-color="#00A858">

                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="cherries-with-stem_2_svg__b" x1="85.499%" x2="50%" y1="3.076%" y2="96.924%">
                                                            <stop offset="0%" stop-color="#00FF86">

                                                            </stop>
                                                            <stop offset="100%" stop-color="#00A858">

                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path fill="url(#cherries-with-stem_2_svg__a)" d="M13.131 64.463c2.644.587 12.33 2.138 16.455-5.466.528-.97.955-1.875 1.327-2.739-1.5-2.748-1.853-5.046-1.8-6.961-.667.238-1.441.085-1.866-.729-.994-1.9-2.432-3.153-4.41-4-.835-.357-1.015-1.556-.598-2.261.5-.847 1.449-.95 2.284-.593a11.231 11.231 0 015.006 4.178l.002-.013c.17-1 .611-2.065 1.241-3.08l-.06-.125c-1.452-2.998-6.043-5.57-9.198-4.755-.29.075-.537.132-.785.19 2.103-12.27 7.547-22.6 16.857-30.101-4.252 9.058-2.166 20.332 1.46 29.814a18.07 18.07 0 001.635-.149c.312-.33.776-.874 1.405-1.707-4.06-10.765-6-24.194 3.32-32.598.065-.06.114-.124.167-.185C47.2 2.593 43.681-.22 43.25.013 28.412 8.049 19.859 21.365 17.2 37.728a29.42 29.42 0 01-1.296-.941c-2.581-1.974-7.823-1.385-10.342.81-2.514 2.19-6.369 5.09-5.414 15.457.791 8.6 10.32 10.925 12.982 11.41z">
                                                    </path>
                                                    <path fill="url(#cherries-with-stem_2_svg__b)" d="M62.794 46.971c-1.938-10.178-6.333-11.894-9.28-13.3-.95-.454-2.117-.671-3.325-.671-2.552 0-5.29.97-6.562 2.73-.228.315-.437.595-.629.844-.587.763-1.007 1.23-1.296 1.516-.36.071-.907.147-1.716.202-.374.025-.798.046-1.294.06-2.516.066-5.288 2.421-6.597 5.02-.342.678-.59 1.372-.7 2.047-.358 2.175-.958 4.972.805 8.793.877 1.9 2.328 4.05 4.704 6.511C39.29 63.191 42.108 64 44.778 64c3.975 0 7.617-1.79 8.999-2.56 2.357-1.193 10.625-6.03 9.017-14.469zm-7.983-4.359c-1.54-2.215-3.85-3.273-6.467-2.536-2.022.57-2.88-2.606-.864-3.175 4.093-1.154 7.757.627 10.135 4.049 1.21 1.741-1.609 3.383-2.804 1.662z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                    <div data-v-558dc477="" data-v-2574a256="" class="border-gradient favourite-border" style="border-radius: 10px;">
                                        <svg data-v-558dc477="" version="1.1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="">
                                            <defs data-v-558dc477="">
                                                <linearGradient data-v-558dc477="" id="gradient6294" x1="0%" y1="100%" x2="100%" y2="0%">
                                                    <stop data-v-558dc477="" offset="0" stop-color="#d0a825">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="0.5" stop-color="#fff29d">
                                                    </stop>
                                                    <stop data-v-558dc477="" offset="1" stop-color="#c39400">
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                            <rect data-v-558dc477="" x="0" y="0" width="100%" height="100%" rx="10px" fill="transparent" clip-path="url(#clip6294)" class="rect" style="stroke: url('#gradient6294'); stroke-width: 0;">
                                            </rect>
                                        </svg>
                                    </div>
                                </div>
                                <div data-v-55106a0e="" class="winners-card-info">
                                    <div data-v-55106a0e="" class="winners-card-prize">6.89 $</div>
                                    <div data-v-55106a0e="" class="winners-card-game-name">Wanted Dead or a
                                        Wild</div>
                                    <div data-v-55106a0e="" class="winners-card-user-name">
                                        x*******@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script>
    $('.providers__toggler').click(function() {
        $('.providers__dropdown').toggleClass('ng-hide');
    })
    $('.showmore').click(function() {
        let taken = $('.casino-game-line>div').length;
        let category1 = location.pathname.split('/')[2];
        $.ajax({
            url: "<?= route('frontend.game.game_page') ?>",
            type: 'get',
            data: {
                taken,
                category1
            }
        }).done(async function(res) {
            console.log(res);
            for(let item of res) {
                let html = `
                <div data-v-988aaf82="" class="casino-game-item">
                    <div data-v-12e05bc3="" data-v-988aaf82=""
                        class="casino-game-card">
                        <div data-v-2574a256="" data-v-12e05bc3=""
                            class="game-preview radius-m shine-m shine wide-preview">
                            <img data-v-2574a256="" class="lazy image" src="${item.name ? '/frontend/Default/ico/'+item.name+'.jpg': '/frontend/Default/img/_src/game_loader.png'}" alt="${item.tilte}">
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
                            <a href="/game/${item? item.name: ''}) }}?api_exit=/" class="checkAgreed btn" style="padding: 3px 6px;margin: 2px 0px;">Play</a>
                        @else
                            <a href="javascript:;" data-name="modal-login" class="checkAgreed btn modal-btn" style="padding: 3px 6px;margin: 2px 0px;">Login</a>

                        @endif
                        </div>
                        <div data-v-12e05bc3="" class="info">
                            <div data-v-12e05bc3="" class="name">${item?.title}</div>
                        </div>
                    </div>
                </div>
                `;

                $('.casino-game-line').append(html);
            }
        }).fail(function(e) {
            console.log(e);
            toastr.error('server error.');
        })
    })
</script>

@endsection

@section('footer')
@include('frontend.Default.partials.footer')
@endsection

@section('scripts')
@include('frontend.Default.partials.scripts')
@endsection