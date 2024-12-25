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
<div class="home-main">
    <div class="home-main-content">
        <div data-v-dc84cc38="" class="carousel">
            {{-- <div data-v-72664130="" data-v-dc84cc38="" class="banner-carousel">
                <div data-v-72664130="" class="carousel-container">
                    <div data-v-550c1874="" data-v-20813391="" data-v-72664130="" class="carousel carousel" repeat="">
                        <div data-v-550c1874="" class="carousel-content" style="width: 100%;">
                            <div data-v-20813391="" data-v-550c1874="" class="fluid-carousel-slide" style="transition-duration: 0ms; transform: scale(0.71);">
                                <figure data-v-72664130="" data-v-550c1874="" class="slide-container">
                                    <picture data-v-72664130="" class="slide slide-banner image VPicture_root_1btDK" data-v-550c1874="">
                                        <source type="image/webp" srcset="https://cdn-1win.xyz/img/crazytime.ece57d04-760.webp 760w,https://cdn-1win.xyz/img/crazytime.145ce17a-400.webp 400w,https://cdn-1win.xyz/img/crazytime.fb6a4195-320.webp 320w">
                                        <source type="image/png" srcset="https://cdn-1win.xyz/img/crazytime.6dda32c4-1024.png 1024w,https://cdn-1win.xyz/img/crazytime.dbf93fce-760.png 760w,https://cdn-1win.xyz/img/crazytime.80f0ddbe-400.png 400w,https://cdn-1win.xyz/img/crazytime.60cd2c9e-320.png 320w">
                                        <img src="https://cdn-1win.xyz/img/crazytime.6dda32c4-1024.png" class="VPicture_opaqueImage_3Geyp VPicture_image_2TJg4">
                                    </picture>
                                </figure>
                            </div>
                            <div data-v-20813391="" data-v-550c1874="" class="fluid-carousel-slide fluid-carousel-slide_active" style="transition-duration: 0ms; transform: scale(1);">
                                <figure data-v-72664130="" data-v-550c1874="" class="slide-container">
                                    <picture data-v-72664130="" class="slide slide-banner image VPicture_root_1btDK" data-v-550c1874="">
                                        <source type="image/webp" srcset="https://cdn-1win.xyz/img/1winpoker_en_2-min.f01e8a8f-1024.webp 1024w,https://cdn-1win.xyz/img/1winpoker_en_2-min.feb94ecd-760.webp 760w,https://cdn-1win.xyz/img/1winpoker_en_2-min.b22b005e-400.webp 400w,https://cdn-1win.xyz/img/1winpoker_en_2-min.6d9fdcb9-320.webp 320w">
                                        <source type="image/png" srcset="https://cdn-1win.xyz/img/1winpoker_en_2-min.e01454dd-1024.png 1024w,https://cdn-1win.xyz/img/1winpoker_en_2-min.df125bc0-760.png 760w,https://cdn-1win.xyz/img/1winpoker_en_2-min.56079e80-400.png 400w,https://cdn-1win.xyz/img/1winpoker_en_2-min.ac4e4904-320.png 320w">
                                        <img src="https://cdn-1win.xyz/img/1winpoker_en_2-min.e01454dd-1024.png" class="VPicture_opaqueImage_3Geyp VPicture_image_2TJg4">
                                    </picture>
                                </figure>
                            </div>
                            <div data-v-20813391="" data-v-550c1874="" class="fluid-carousel-slide" style="transition-duration: 0ms; transform: scale(0.71);">
                                <figure data-v-72664130="" data-v-550c1874="" class="slide-container">
                                    <div data-v-6b5f0c03="" data-v-72664130="" class="slider_universal-slide slide-banner" data-v-550c1874="">
                                        <picture data-v-6b5f0c03="" class="slider_universal-slide-background VPicture_root_1btDK">
                                            <img src="/frontend/slider/slide3.png" class="VPicture_opaqueImage_3Geyp VPicture_image_2TJg4">
                                        </picture>
                                        <div data-v-6b5f0c03="" class="slider_universal-slide-content">
                                            <div data-v-6b5f0c03="" class="slider_universal-slide-info">
                                                <!---->
                                                <!---->
                                            </div>
                                            <div data-v-6b5f0c03="" class="slider_universal-slide-heading" style="font-size: 47.5902px; letter-spacing: -0.441509px;">
                                                Jackpot from the
                                                TVBET up to 2500 $</div>
                                            <div data-v-6b5f0c03="" class="slider_universal-slide-subheading" style="font-size: 35.6927px;">
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-v-72664130="" class="banner-controls">
                    <div data-v-72664130="" class="carousel-control active">

                    </div>
                    <div data-v-72664130="" class="carousel-control">

                    </div>
                    <div data-v-72664130="" class="carousel-control">

                    </div>
                    <div data-v-72664130="" class="carousel-control">

                    </div>
                    <div data-v-72664130="" class="carousel-control">

                    </div>
                    <div data-v-72664130="" class="carousel-control">

                    </div>
                    <div data-v-72664130="" class="carousel-control">

                    </div>
                    <div data-v-72664130="" class="carousel-control">

                    </div>
                    <div data-v-72664130="" class="carousel-control">

                    </div>
                    <div data-v-72664130="" class="carousel-control">

                    </div>
                    <div data-v-72664130="" class="carousel-control">

                    </div>
                </div>
            </div> --}}
            <div id="slider" class="slider round">
                <div class="slider-content">
                    <div class="slider-content-wrapper">
                        <div class="slider-content__item image-1">
                            <figure class="slide-container">
                                <picture>
                                    <source type="image/webp" srcset="https://cdn-1win.xyz/img/crazytime.ece57d04-760.webp 760w,https://cdn-1win.xyz/img/crazytime.145ce17a-400.webp 400w,https://cdn-1win.xyz/img/crazytime.fb6a4195-320.webp 320w">
                                    <source type="image/png" srcset="https://cdn-1win.xyz/img/crazytime.6dda32c4-1024.png 1024w,https://cdn-1win.xyz/img/crazytime.dbf93fce-760.png 760w,https://cdn-1win.xyz/img/crazytime.80f0ddbe-400.png 400w,https://cdn-1win.xyz/img/crazytime.60cd2c9e-320.png 320w">
                                    <img src="https://cdn-1win.xyz/img/crazytime.6dda32c4-1024.png">
                                </picture>
                            </figure>
                        </div>
                        <div class="slider-content__item image-2">
                            <figure class="slide-container">
                                <picture>
                                    <source type="image/webp" srcset="https://cdn-1win.xyz/img/1winpoker_en_2-min.f01e8a8f-1024.webp 1024w,https://cdn-1win.xyz/img/1winpoker_en_2-min.feb94ecd-760.webp 760w,https://cdn-1win.xyz/img/1winpoker_en_2-min.b22b005e-400.webp 400w,https://cdn-1win.xyz/img/1winpoker_en_2-min.6d9fdcb9-320.webp 320w">
                                    <source type="image/png" srcset="https://cdn-1win.xyz/img/1winpoker_en_2-min.e01454dd-1024.png 1024w,https://cdn-1win.xyz/img/1winpoker_en_2-min.df125bc0-760.png 760w,https://cdn-1win.xyz/img/1winpoker_en_2-min.56079e80-400.png 400w,https://cdn-1win.xyz/img/1winpoker_en_2-min.ac4e4904-320.png 320w">
                                    <img src="https://cdn-1win.xyz/img/1winpoker_en_2-min.e01454dd-1024.png">
                                </picture>
                            </figure>
                        </div>
                        <div class="slider-content__item image-3">
                            <figure class="slide-container">
                                <div>
                                    <picture>
                                        <img src="/frontend/slider/slide3.png">
                                    </picture>
                                    {{-- <div data-v-6b5f0c03="" class="slider_universal-slide-content">
                                        <div data-v-6b5f0c03="" class="slider_universal-slide-info">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div data-v-6b5f0c03="" class="slider_universal-slide-heading" style="font-size: 47.5902px; letter-spacing: -0.441509px;">
                                            Jackpot from the
                                            TVBET up to 2500 €</div>
                                        <div data-v-6b5f0c03="" class="slider_universal-slide-subheading" style="font-size: 35.6927px;">
                                        </div>
                                    </div> --}}
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promotion-wrap">
            <div class="promotions">
                <a href="/faq" class="promotion cash">
                    <div class="df" style="flex-direction:column; justify-content:center">
                        <div class="promotion-title">FAQ</div>
                    </div>
                </a>
                <a href="/progress" class="promotion free-money">
                    <div class="df" style="flex-direction:column; justify-content:center">
                        <div class="promotion-title progress-t">Progress</div>
                    </div>
                    <img src="/frontend/Default/img/badges128x128/badge-20.png" class="progress-img" style="transform: scale(0.5);" />
                </a>
                <a href="/bonuses" class="promotion promote">
                    <div class="df" style="flex-direction:column">
                        <div class="promotion-title">Bonuse</div>
                        <div class="promotion-title">and bonuses</div>
                    </div>
                    <img src="frontend/Default/img/bonuse.png" class="bonuse-down" />
                </a>
            </div>
        </div>
        <div class="home-body">
            <div>
                <div class="top-live-part">
                    <div class="home-section-title">
                        <a href="/sports/live">
                            <div class="df">
                                <div class="live">LIVE</div>
                                <div class="part-title">Top Live</div>
                            </div>
                            <div class="part-title-end">
                                <div class="all">All</div>
                                <div class="evnet-count">190 events</div>
                            </div>
                        </a>
                    </div>
                    <div class="slid-main-secion-wrap">
                        <div class="slid-main-secion">
                            <div class="live-event">
                                <div class="live-event-main">
                                    <div class="match-header">
                                        <div class="top-live-match-score">252:559</div>
                                        <div class="match-score-period">(196:219 - 56:340)</div>
                                    </div>
                                    <div class="top-live-match-info">
                                        <div class="match-teams">
                                            <div class="match-team"><span class="helper-line">Warwickshire</span></div>
                                            <div class="match-team"><span class="helper-line">Warwickshire</span></div>
                                        </div>
                                    </div>
                                    <div class="match-details">
                                        Cricket · County Championship Division One
                                    </div>
                                    <ul class="match-odd-list">
                                        <li class="match-odd-item">
                                            <div class="live-top-odd">
                                                <div class="odd-values">
                                                    <div class="odd-name">1</div>
                                                    <div class="odd-value">5.15</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="match-odd-item">
                                            <div class="live-top-odd">
                                                <div class="odd-values">
                                                    <div class="odd-name">1</div>
                                                    <div class="odd-value">5.15</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="live-event">
                                <div class="live-event-main">
                                    <div class="match-header">
                                        <div class="top-live-match-score">252:559</div>
                                        <div class="match-score-period">(196:219 - 56:340)</div>
                                    </div>
                                    <div class="top-live-match-info">
                                        <div class="match-teams">
                                            <div class="match-team"><span class="helper-line">Warwickshire</span></div>
                                            <div class="match-team"><span class="helper-line">Warwickshire</span></div>
                                        </div>
                                    </div>
                                    <div class="match-details">
                                        Cricket · County Championship Division One
                                    </div>
                                    <ul class="match-odd-list">
                                        <li class="match-odd-item">
                                            <div class="live-top-odd">
                                                <div class="odd-values">
                                                    <div class="odd-name">1</div>
                                                    <div class="odd-value">5.15</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="match-odd-item">
                                            <div class="live-top-odd">
                                                <div class="odd-values">
                                                    <div class="odd-name">1</div>
                                                    <div class="odd-value">5.15</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-section">
                    <div class="home-section-title">
                        <a href="/sports/live">
                            <div class="df">
                                <div style="margin-right: 0.5rem;">
                                    <svg data-v-61f34b8f="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon icon icon-casino-section-crown lg" icon="casino/section/crown" data-v-5c19827a="">
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
                                <div class="part-title">Top Games</div>
                            </div>
                            <div class="part-title-end">
                                <div class="all">All</div>
                                <div class="evnet-count">190 events</div>
                            </div>
                        </a>
                    </div>
                    <div class="slid-main-secion-wrap">
                        <div class="slid-main-secion">

                        </div>
                    </div>
                </div>
                <div class="home-section">
                    <div class="home-section-title">
                        <a href="/sports/live">
                            <div class="df">
                                <div style="margin-right: 0.5rem;">
                                    <svg data-v-61f34b8f="" width="20" height="20" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon icon icon-casino-section-gamepad lg" icon="casino/section/gamepad" data-v-5c19827a="">
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
                                <div class="part-title">All Games</div>
                            </div>
                            <div class="part-title-end">
                                <div class="all">All</div>
                                <div class="evnet-count">190 events</div>
                            </div>
                        </a>
                    </div>
                    <div class="slid-main-secion-wrap">
                        <div class="slid-main-secion">
                            @if ($games && count($games))
                            @foreach ($games as $key=>$game)
                            @include('frontend.Default.partials.game')
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="home-section">
                    <div class="home-section-title">
                        <a href="/sports/live">
                            <div class="df">
                                <div style="margin-right: 0.5rem;">
                                    <svg data-v-61f34b8f="" width="20" height="20" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="icon icon icon-casino-section-gamepad lg" icon="casino/section/gamepad" data-v-5c19827a="">
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
                                <div class="part-title">Providers</div>
                            </div>
                            <div class="part-title-end">
                                <div class="all">All</div>
                                <div class="evnet-count">190 events</div>
                            </div>
                        </a>
                    </div>
                    <div class="slid-main-secion-wrap">
                        <div class="slid-main-secion">
                            <div data-v-61f34b8f="" class="section__body" style="background-image: linear-gradient(97deg, rgb(30, 40, 63), rgba(20, 27, 46, 0.6));">
                                <div data-v-61f34b8f="" class="section__body-blur" style="background-image: linear-gradient(142.34deg, rgba(255, 149, 75, 0.45) -30%, rgba(254, 149, 74, 0.392) -23.33%, rgba(255, 149, 74, 0.333) -16.67%, rgba(255, 149, 75, 0.28) -10%, rgba(255, 149, 75, 0.224) -3.33%, rgba(255, 149, 75, 0.176) 3.33%, rgba(255, 149, 75, 0.133) 10%, rgba(255, 149, 75, 0.094) 16.67%, rgba(255, 149, 75, 0.06) 23.33%, rgba(255, 149, 75, 0.035) 30%, rgba(255, 149, 75, 0.016) 36.67%, rgba(255, 149, 75, 0.004) 43.33%, rgba(255, 149, 75, 0) 50%);">
                                </div>
                                <div data-v-61f34b8f="" class="section__body-content">
                                    <div data-v-3e6ea303="" data-v-61f34b8f="" class="casino-section-content horizontal-scrollable-container">
                                        <!---->
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
                                                    <div data-v-63170ec7="" class="shortcut-provider__caption">{{$cat_games->count()}} games
                                                    </div>
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
                                                                <!---->
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
                                        <div data-v-3e6ea303="" data-v-61f34b8f="" class="empty-area">

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
    <div class="sports-main-content end-text" style="display: none;">
        There is not event.
    </div>
</div>
@endsection

@section('footer')
@include('frontend.Default.partials.footer')
@endsection

@section('scripts')
@include('frontend.Default.partials.scripts')
@endsection