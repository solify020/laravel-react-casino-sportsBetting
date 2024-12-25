@extends('frontend.Default.layouts.app')
@section('page-title', $title)
@section('add-body-class', 'locked')
@section('add-header-class', 'header--redirected')

@section('content')
<style type="text/css">
    @charset "UTF-8";

    [ng\:cloak],
    [ng-cloak],
    [data-ng-cloak],
    [x-ng-cloak],
    .ng-cloak,
    .x-ng-cloak,
    .ng-hide:not(.ng-hide-animate) {
        display: none !important;
    }

    ng\:form {
        display: block;
    }

    .ng-animate-shim {
        visibility: hidden;
    }

    .ng-anchor {
        position: absolute;
    }

    .game-frame-content {
        width: 100%;
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url(/frontend/Default/img/_src/bg1.jpg);
        background-size: 100 % 100%
    }

    .game-frame-content>div {
        width: 95%;
        height: 90%;
        display: flex;
        justify-content: center;
    }

    .game-frame {
        width: 100%;
        height: 100%;
        min-width: 1084px;
        min-height: 610px;
        border-radius: 10px;
        border: solid 8px #39414a;
    }

    .game-control {
        width: 5%
    }

    .game-control>svg {
        background-color: white;
        width: 40px;
        margin: 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .providers__toggler {
        position: relative;
        -ms-flex: 0 0 210px;
        flex: 0 0 210px;
        width: 210px;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        text-align: left;
        border-radius: 6px;
        background: #1c1d27;
        padding: 6px 15px;
        outline: none;
        font-size: 12px;
        height: 36px;
        color: #7a7b91;
        border: 1px solid #222332;
        transition: 0.6s all ease;
    }

    .providers__toggler-text {
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        color: #c6c6c6;
    }

    .providers__dropdown {
        /* position: absolute; */
        top: 100%;
        left: 0;
        right: 0;
        z-index: 995;
        margin: 0 -6px;
        padding: 0 0 4px;
        list-style: none;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        background: #131521;
        border-radius: 0 0 6px 6px;
    }

    .providers__dropdown-item {
        display: -ms-flexbox;
        display: flex;
        margin: 0 6px 12px 6px;
    }

    .providers__link {
        display: -ms-inline-flexbox;
        display: inline-flex;
        -ms-flex-align: center;
        align-items: center;
        text-align: center;
        background: #1a2148;
        padding: 0 15px;
        height: 36px;
        line-height: 36px;
        border-radius: 6px;
        border: 1px solid transparent;
        transition: 0.6s all ease;
    }

    .providers__icon {
        -ms-flex-negative: 0;
        flex-shrink: 0;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        margin-right: 8px;
    }

    .providers__icon-img {
        max-width: 22px;
        max-height: 22px;
    }

    .providers__name {
        display: block;
        color: #7a7b91;
        font-size: 12px;
        text-align: left;
        white-space: nowrap;
        transition: 0.4s all ease;
    }

    .providers__toggler:hover,
    .providers__toggler:focus {
        color: #fff;
        border-color: #fff;
        background: #1c1d27;
    }

    .providers__toggler::after {
        content: "";
        display: inline-block;
        margin: 0 0 0 6px;
        color: #9d9d9d;
        font-size: 12px;
        font-family: 'icon-woo' !important;
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        transition: transform .3s ease;
    }
</style>
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
<style>
    .casino-games-list {
        overflow-x: hidden;
        overflow-y: auto;
    }

    .casino-game-item {
        width: 9vw;
        min-width: 124px;
        /* height: 147.615px; */
    }

    .casino-game-card {
        position: relative;
    }

    .casino-game-item .play-btn {
        padding: 5px 10px;
        @if( !$detect->isMobile() && !$detect->isTablet()) opacity: 0;
        @endif border-radius: 5px;
    }

    .casino-game-item:hover .play-btn {
        opacity: 1;
    }

    #main-layout>div.wrapper>div.body.main-layout-item>div>div.casino-container>div:nth-child(3)>div>div.section__body-content {
        overflow-x: auto;
    }

    #main-layout>div.wrapper>div.body.main-layout-item>div>div.casino-container>div:nth-child(3)>div>div.section__body-content>div {
        overflow-x: unset;
    }

    #main-layout {
        min-height: 0px !important;
    }

    .simplebar-content-wrapper {
        width: 100% !important;
        margin-left: 0;
        max-width: 100%;
        overflow: initial !important;
        border: unset !important;
    }

    .simplebar-wrapper,
    .simplebar-mask {
        overflow: initial !important;
    }

    .burger__container.is-opened[data-v-15d69dac] {
        height: 100%;
        display: block;
    }

    .search-container {
        margin-right: -210px;
        transition: 0.3s;
    }

    @media (max-width: 991px) {
        .burger__container[data-v-15d69dac] {
            display: none;
        }

        .mobile-providers {
            display: block !important;
        }

        .desktop-providers {
            display: none !important;
        }
    }

    @media (min-width: 992px) {
        .mobile-providers {
            display: none !important;
        }

        .desktop-providers {
            display: block !important;
        }

        .burger__container[data-v-15d69dac] {
            height: 100%;
            width: 250px;
            display: block;
            top: calc(var(--layout-header-height) * 2 + env(safe-area-inset-top, 0));
        }

        .burger__container .burger__menu-vertical-inset-wrapper .burger__menu-horizontal-inset-wrapper[data-v-15d69dac] {
            border-radius: unset;
        }

        .burger__container .burger__menu-vertical-inset-wrapper[data-v-15d69dac] {
            right: unset;
            /* margin-top: 80px; */
            width: 230px;
        }

        .burger__container .burger__background[data-v-15d69dac] {
            right: unset
        }

        .burger__container .burger__menu-vertical-inset-wrapper .burger__menu-horizontal-inset-wrapper .burger__menu-container .burger__close-button[data-v-15d69dac] {
            display: none;
        }

        .burger-menu[data-v-dd8b405a] {
            overflow: hidden margin-top: 45px;
        }

        .burger-menu .burger-menu__content[data-v-dd8b405a] {
            width: 105%;
        }

        .body.main-layout-item[data-v-34ecc166] {
            flex-direction: row-reverse;
            margin-top: 140px;
        }

        .body.main-layout-item[data-v-34ecc166] .casino {
            width: calc(100% - 250px);
        }

        .body.main-layout-item[data-v-34ecc166] .casino .carousel {
            padding: 0;
            margin-left: var(--banner-carousel-gap);
            margin-right: var(--banner-carousel-gap);
        }

        .burger-menu-button[data-v-5d560be8] {
            visibility: hidden;
        }

        .footer-panel {
            display: flex;
            justify-content: flex-end;
        }

        .footer-panel .footer {
            width: 80%;
            border-radius: 18px;
            height: auto;
            margin-right: 105px;
        }

        .footer-panel .tabs {
            width: 100%;
            left: unset;
        }
    }
</style>
<style>
    .providers__link {
        display: -ms-inline-flexbox;
        display: inline-flex;
        -ms-flex-align: center;
        align-items: center;
        text-align: center;
        background: #1a2148;
        padding: 0 15px;
        height: 36px;
        line-height: 36px;
        border-radius: 6px;
        border: 1px solid transparent;
        transition: 0.6s all ease;
    }

    .providers__icon-img {
        max-width: 22px;
        max-height: 22px;
    }

    .providers__name {
        display: block;
        color: #7a7b91;
        font-size: 12px;
        text-align: left;
        white-space: nowrap;
        transition: 0.4s all ease;
    }

    .providers__btn-all {
        /* display: block; */
        /* background: #1c1d27; */
        color: #414250;
        /* min-width: 70px; */
        /* padding: 6px 15px; */
        /* border-radius: 6px; */
        /* text-align: center; */
        /* border: 1px solid transparent; */
        /* font-size: 14px; */
        /* transition: 0.25s all ease; */
    }

    .providers__panel-list {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        display: -ms-flexbox;
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0 12px;
        border-radius: 6px;
    }

    .desktop-providers .providers__panel-list {
        overflow: hidden;
    }

    .mobile-providers .providers__panel-list {
        overflow: visible;
    }

    .providers__panel {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding: 5px 0;
    }

    @media (min-width: 768px) {
        .providers {
            display: block;
            position: relative;
            border-radius: 0 0 6px 6px;
            margin: 0;
        }
    }

    .providers__item {
        display: -ms-flexbox;
        display: flex;
        margin-right: 12px;
    }

    .providers__icon {
        -ms-flex-negative: 0;
        flex-shrink: 0;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        margin-right: 8px;
    }
</style>
<div class="custom-scroll" data-simplebar>
    <div class="sports-main">
        @include('frontend.Default.sports.parts.sportsList')
        <div class="sports-main-content">
            <div id="bets">
                <div class="match-content round">
                    <div class="event-match-info">
                        <div class="match-info-left-block">
                            <div class="match-info-left-block-wrapper">
                                <div class="sports-match-info-top">
                                    <div class="df block-item">
                                        <div class="match-info-match-score df">
                                            <span class="home_score">0</span>
                                            <span class="match-info-match-score-separator"> : </span>
                                            <span class="away_score">0</span>
                                        </div>
                                    </div>
                                    <div class="df block-item oh">
                                        <div class="match-info-match-time oh">
                                            <span class="tt-lc nwe period">2 half</span>
                                            <span class="timer">79'</span>
                                        </div>
                                    </div>
                                    <div class="block-item">
                                        <div class="favorites-icon">
                                            <svg data-v-0959a1f9="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" aria-hidden="true" role="img" class="icon-star icon icon-star md" icon="star" size="md" data-v-d89e8830="">
                                                <path d="M7.5 11.25l-3.512 1.846a.5.5 0 01-.725-.527l.67-3.91-2.84-2.77a.5.5 0 01.277-.852l3.926-.57L7.052.908a.5.5 0 01.896 0l1.756 3.558 3.926.57a.5.5 0 01.277.854l-2.84 2.769.67 3.91a.5.5 0 01-.725.527L7.5 11.25z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="df match-info-date">
                                    <div class="match-info-date-live">
                                        <span class="date">Today, </span>
                                        <span class="time">15:20</span>
                                    </div>
                                </div>
                                <div class="level match-info-teams">
                                    <div class="df fdc oh">
                                        <div class="match-info-team nwe">
                                            <span class="home_name">Zhodzina</span>
                                        </div>
                                        <div class="match-info-team nwe">
                                            <span class="away_name">Zhodzina</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="match-country-league">
                                    <div class="match-info-sport-name">
                                        <span class="sport_name">Soccer</span>
                                        <i class="sports-icon header-icon" style="margin-left: 0.5em;"></i>
                                    </div>
                                    <!-- <div class="nwe match-info-sport-name country">Belarus</div> -->
                                    <div class="nwe match-info-sport-name league_name">Regional League A</div>
                                </div>
                                <!-- <div class="df match-info-score-wrapper">
                                    <section class="match-score-container block-item">
                                        <table class="match-score">
                                            <tbody>
                                                <tr class="match-score-header">
                                                    <td class="match-score-name">Time</td>
                                                    <td class="match-score-value">1</td>
                                                </tr>
                                                <tr class="match-score-row">
                                                    <td class="match-score-name home_name">Zhodzina</td>
                                                    <td class="match-score-value">2</td>
                                                </tr>
                                                <tr class="match-score-row">
                                                    <td class="match-score-name away_name">Novopolotsk</td>
                                                    <td class="match-score-value">1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </section>
                                </div> -->
                            </div>
                        </div>
                        <div class="match-info-right-block">
                            <div class="match-info-bottom">
                                <div class="match-info-date-time">
                                    <div class="timer-container">
                                        <div class="timer-container__title">Event starts in</div>
                                        <div class="header-timer">
                                            <div class="timer__column days active">
                                                <div class="timer__column__value">3</div>
                                                <div class="timer__column__label">days</div>
                                                <div class="timer__column__separator timer__column__separator_days"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="match-coefficients">
                        <section class="tournament-odds-table">
                            <header class="tournament-odds-table-header">
                                <section class="odds-menu section-menu">
                                    <div class="odd-button active">All</div>
                                    <a class="odd-button active toggle-all">
                                        <svg data-v-bc0e033e="" xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" aria-hidden="true" role="img" class="toggle-all-icon icon icon-close-open-bets sm active" icon="close-open-bets">
                                            <path fill="#FFF" d="M10.546 5.447a.85.85 0 01-.01 1.118l-.083.08-4.205 3.6a.85.85 0 01-1.007.074l-.1-.074-4.195-3.6a.85.85 0 011.015-1.36l.093.07L5.696 8.48l3.651-3.126a.85.85 0 011.199.093zm0-5a.85.85 0 01-.01 1.118l-.083.08-4.205 3.6a.85.85 0 01-1.007.074l-.1-.074-4.195-3.6A.85.85 0 011.961.285l.093.07L5.696 3.48 9.347.354a.85.85 0 011.199.093z"></path>
                                        </svg>
                                    </a>
                                </section>
                            </header>
                            <main class="tournament-odds-table-body">
                                <div class="odds-table-row">
                                    <div class="odds-table-column">
                                        <div class="odds-type-section active">
                                            <div class="trigger">
                                                <span class="odd-type-name">1X2</span>
                                                <svg data-v-0cc70890="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true" role="img" class="icon icon-angle-up sm inline" icon="angle-up" inline="">
                                                    <path d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z"></path>
                                                </svg>
                                            </div>
                                            <ul class="odds-grid grid-3">
                                                <li class="odds-item">
                                                    <button class="match-odd">
                                                        <span class="odd-name">1</span>
                                                        <span class="odd-coefficient">4.76</span>
                                                    </button>
                                                </li>
                                                <li class="odds-item">
                                                    <button class="match-odd">
                                                        <span class="odd-name">X</span>
                                                        <span class="odd-coefficient">4.76</span>
                                                    </button>
                                                </li>
                                                <li class="odds-item">
                                                    <button class="match-odd">
                                                        <span class="odd-name">2</span>
                                                        <span class="odd-coefficient">4.76</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="odds-table-column">
                                        <div class="odds-type-section active">
                                            <div class="trigger">
                                                <span class="odd-type-name">Handicap</span>
                                                <svg data-v-0cc70890="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true" role="img" class="icon icon-angle-up sm inline" icon="angle-up" inline="">
                                                    <path d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z"></path>
                                                </svg>
                                            </div>
                                            <ul class="odds-grid grid-3">
                                                <li class="odds-item">
                                                    <button class="match-odd">
                                                        <span class="odd-name">1 (+1)</span>
                                                        <span class="odd-coefficient">4.76</span>
                                                    </button>
                                                </li>
                                                <li class="odds-item">
                                                    <button class="match-odd">
                                                        <span class="odd-name">2 (-1)</span>
                                                        <span class="odd-coefficient">4.76</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.Default.sports.parts.sportsBetslip')
    </div>
</div>

@endsection

@section('footer')
@include('frontend.Default.partials.footer')
@endsection

@section('scripts')
@include('frontend.Default.partials.scripts')
@endsection