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
        <div class="home__header-content">
            <div class="home_main_slider">
                @include('frontend.Default.partials.slider')
            </div>
            <div class="home__header-promo" style="margin-right:15px">
                <div class='header-promo-item'>
                    <div class="VScaler_item">
                        <picture class="VScaler_img">
                            <img src="frontend/Default/img/_src/bonus-banner-cashback-casino.png">
                        </picture>
                        <div class="VSlide_content">
                            <div class="VSlide_title">Cashback up to 30% on casinos</div>
                            <!-- <button class="VSlide_button"> -->
                            <a href="/categories/all" class="VSlide_button">
                                Go to casino
                            </a>
                            <!-- </button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="home__header-promo">
                <div class='header-promo-item'>
                    <div class="VScaler_item">
                        <picture class="VScaler_img">
                            <img src="frontend/Default/img/_src/bonus-banner-deposit.avif">
                        </picture>
                        <div class="VSlide_content">
                            <div class="VSlide_title">Bonus + 500%</div>
                            <button class="VSlide_button">
                                Registration
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home__middle-content">
            <a>
                <div class="home__middle-item">
                    <div class="home__middle-title">TVBET</div>
                    <div class="home__middle-desc">Live Games 24/7</div>
                    <div class="home__middle-img">
                        <div class="home__middle-card-img">
                            <img src="frontend/Default/img/svg/tvbet.svg" width="256px" height="256px" class="promo-card__pic">
                        </div>
                    </div>
                </div>
            </a>
            <a>
                <div class="home__middle-item">
                    <div class="home__middle-title">Casino</div>
                    <div class="home__middle-desc">Over 3000 games</div>
                    <div class="home__middle-img">
                        <div class="home__middle-card-img">
                            <img src="frontend/Default/img/svg/casino.svg" width="256px" height="256px" class="promo-card__pic">
                        </div>
                    </div>
                </div>
            </a>
            <a>
                <div class="home__middle-item">
                    <div class="home__middle-title">Live Games</div>
                    <div class="home__middle-desc">Live dealers</div>
                    <div class="home__middle-img">
                        <div class="home__middle-card-img">
                            <img src="frontend/Default/img/svg/live-game.svg" width="256px" height="256px" class="promo-card__pic">
                        </div>
                    </div>
                </div>
            </a>
            <a>
                <div class="home__middle-item">
                    <div class="home__middle-title">Poker</div>
                    <div class="home__middle-desc">Free Tournaments</div>
                    <div class="home__middle-img">
                        <div class="home__middle-card-img">
                            <img src="frontend/Default/img/svg/poker.svg" width="256px" height="256px" class="promo-card__pic">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <div class="top-live-part">
                <div class="home-section-title" style="margin-bottom: 10px;">
                    <a href="/sports/live" style="margin-bottom: 10px;">
                        <div class="df">
                            <div class="part-title">Popular</div>
                        </div>
                    </a>
                </div>
                <div class="slid-main-secion-wrap" style="margin-bottom: 20px;">
                    <div class="slid-main-secion">
                        <div class="live-event popular-slider-item">
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
                        <div class="live-event popular-slider-item">
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
                        <div class="live-event popular-slider-item">
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
                        <div class="live-event popular-slider-item">
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
                        <div class="live-event popular-slider-item">
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
                        <div class="live-event popular-slider-item">
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
        </div>
        <div class="sport-grids">
            <div class="sport-grids__section">
                <div class="tabular-section__header">
                    <div class="tabular-section__tabs">
                        <div class="tabular-section__tab-wrapper">
                            <div class="tabular-section__tab">
                                <div class="tabular-section__tab-header">
                                    <div class="sport-grids__tab-icon-wrapper">
                                        <div class="live-dot-indicator"></div>
                                    </div>
                                    Live
                                </div>
                            </div>
                        </div>
                        <div class="tabular-section__button-tab">
                            All
                        </div>
                    </div>
                    <div class="icon-toggle-switcher">
                        <div class="icon-toggle-switcher-content">
                            <div class="icon-toggle-switcher__item icon-toggle-switcher__item--active">
                                <div class="icon-toggle-switcher__item-wrapper">
                                    <div class="icon-toggle-switcher__icon">
                                        <i class="sports-icon icon-soccer no-margin"></i>
                                    </div>
                                    <div class="icon-toggle-switcher__label">Soccer</div>
                                </div>
                            </div>
                            <div class="icon-toggle-switcher__item ">
                                <div class="icon-toggle-switcher__item-wrapper">
                                    <div class="icon-toggle-switcher__icon">
                                        <i class="sports-icon icon-basketball no-margin"></i>
                                    </div>
                                    <div class="icon-toggle-switcher__label">Basketball</div>
                                </div>
                            </div>
                            <div class="icon-toggle-switcher__item ">
                                <div class="icon-toggle-switcher__item-wrapper">
                                    <div class="icon-toggle-switcher__icon">
                                        <i class="sports-icon icon-basketball no-margin"></i>
                                    </div>
                                    <div class="icon-toggle-switcher__label">Basketball</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabular-section__body">
                    <table class="sport-grids__grid">
                        <div class="match-table__head-underlay"></div>
                        <thead class="match-table__head">
                            <tr class="match-table__head-row">
                                <th class="match-table__cell match-table__head-row-cell">Time</th>
                                <th class="match-table__cell match-table__head-row-cell match-table__head-row-cell--teams" colspan="2">Teams</th>
                                <th class=""></th>
                                <th class="match-table__cell match-table__head-row-cell match-table__head-row-cell--outcome">1</th>
                                <th class="match-table__cell match-table__head-row-cell match-table__head-row-cell--outcome">x</th>
                                <th class="match-table__cell match-table__head-row-cell match-table__head-row-cell--outcome">2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="match-table-match-row">
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__basic-info">
                                        <div class="match-table-match-row__match-fav-icon-wrapper"></div>
                                        <div class="match-table-match-row__match-date-time">
                                            <div class="match-table-match-row__match-date">18 sep</div>
                                            <div class="match-table-match-row__match-time">21:00</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="match-table-match-row__cell" colspan="2">
                                    <div class="match-table-match-row__primary-info">
                                        <div class="match-table-match-row__team">Entebbe Archers</div>
                                        <div class="match-table-match-row__team">Miracle Eagles</div>
                                        <div class="match-table-match-row__score-info">
                                            <span class="match-table-match-row__score">35:44</span>
                                            <span class="match-table-match-row__period-score"> (12:20 - 7:14 - 16:10)</span>
                                            <span class="match-table-match-row__separator">|</span>
                                            <span class="match-table-match-row__match-time">
                                                <svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" aria-hidden="true" role="img" class="match-time-passed-icon icon icon-clock sm" icon="clock">
                                                    <path fill-rule="evenodd" d="M5.5 0a5.5 5.5 0 110 11 5.5 5.5 0 010-11zm0 2.139a.33.33 0 00-.329.305l-.25 3.255a.5.5 0 00.367.52l2.667.728a.233.233 0 00.295-.225v-.015a.5.5 0 00-.252-.434L6.111 5.194l-.275-2.751a.338.338 0 00-.336-.304z"></path>
                                                </svg>
                                                6'
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__total-odds">
                                        <div class="match-table-match-row__total-odds-chip">+1.6</div>
                                    </div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__odd">1.1</div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__odd">2.1</div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__odd">5.4</div>
                                </td>
                            </tr>
                            <tr class="match-table-match-row">
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__basic-info">
                                        <div class="match-table-match-row__match-fav-icon-wrapper"></div>
                                        <div class="match-table-match-row__match-date-time">
                                            <div class="match-table-match-row__match-date">18 sep</div>
                                            <div class="match-table-match-row__match-time">21:00</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="match-table-match-row__cell" colspan="2">
                                    <div class="match-table-match-row__primary-info">
                                        <div class="match-table-match-row__team">Entebbe Archers</div>
                                        <div class="match-table-match-row__team">Miracle Eagles</div>
                                        <div class="match-table-match-row__score-info">
                                            <span class="match-table-match-row__score">35:44</span>
                                            <span class="match-table-match-row__period-score"> (12:20 - 7:14 - 16:10)</span>
                                            <span class="match-table-match-row__separator">|</span>
                                            <span class="match-table-match-row__match-time">
                                                <svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" aria-hidden="true" role="img" class="match-time-passed-icon icon icon-clock sm" icon="clock">
                                                    <path fill-rule="evenodd" d="M5.5 0a5.5 5.5 0 110 11 5.5 5.5 0 010-11zm0 2.139a.33.33 0 00-.329.305l-.25 3.255a.5.5 0 00.367.52l2.667.728a.233.233 0 00.295-.225v-.015a.5.5 0 00-.252-.434L6.111 5.194l-.275-2.751a.338.338 0 00-.336-.304z"></path>
                                                </svg>
                                                6'
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__total-odds">
                                        <div class="match-table-match-row__total-odds-chip">+1.6</div>
                                    </div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__odd">1.1</div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__odd">2.1</div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__odd">5.4</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="sport-grids__section">
                <div class="tabular-section__header">
                    <div class="tabular-section__tabs">
                        <div class="tabular-section__tab-wrapper">
                            <div class="tabular-section__tab">
                                <div class="tabular-section__tab-header">
                                    <div class="sport-grids__tab-icon-wrapper">
                                        <img src="frontend/Default/img/_src/fire.svg" class="sport-grids__tab-icon">
                                    </div>
                                    Popular
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icon-toggle-switcher">
                        <div class="icon-toggle-switcher-content">
                            <div class="icon-toggle-switcher__item icon-toggle-switcher__item--active">
                                <div class="icon-toggle-switcher__item-wrapper">
                                    <div class="icon-toggle-switcher__icon">
                                        <i class="sports-icon icon-soccer no-margin"></i>
                                    </div>
                                    <div class="icon-toggle-switcher__label">Soccer</div>
                                </div>
                            </div>
                            <div class="icon-toggle-switcher__item ">
                                <div class="icon-toggle-switcher__item-wrapper">
                                    <div class="icon-toggle-switcher__icon">
                                        <i class="sports-icon icon-basketball no-margin"></i>
                                    </div>
                                    <div class="icon-toggle-switcher__label">Basketball</div>
                                </div>
                            </div>
                            <div class="icon-toggle-switcher__item ">
                                <div class="icon-toggle-switcher__item-wrapper">
                                    <div class="icon-toggle-switcher__icon">
                                        <i class="sports-icon icon-basketball no-margin"></i>
                                    </div>
                                    <div class="icon-toggle-switcher__label">Basketball</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabular-section__body">
                    <table class="sport-grids__grid">
                        <div class="match-table__head-underlay"></div>
                        <thead class="match-table__head">
                            <tr class="match-table__head-row">
                                <th class="match-table__cell match-table__head-row-cell">Time</th>
                                <th class="match-table__cell match-table__head-row-cell match-table__head-row-cell--teams" colspan="2">Teams</th>
                                <th class=""></th>
                                <th class="match-table__cell match-table__head-row-cell match-table__head-row-cell--outcome">1</th>
                                <th class="match-table__cell match-table__head-row-cell match-table__head-row-cell--outcome">x</th>
                                <th class="match-table__cell match-table__head-row-cell match-table__head-row-cell--outcome">2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="match-table-match-row">
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__basic-info">
                                        <div class="match-table-match-row__match-fav-icon-wrapper"></div>
                                        <div class="match-table-match-row__match-date-time">
                                            <div class="match-table-match-row__match-date">18 sep</div>
                                            <div class="match-table-match-row__match-time">21:00</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="match-table-match-row__cell" colspan="2">
                                    <div class="match-table-match-row__primary-info">
                                        <div class="match-table-match-row__team">Entebbe Archers</div>
                                        <div class="match-table-match-row__team">Miracle Eagles</div>
                                        <div class="match-table-match-row__score-info">
                                            <span class="match-table-match-row__score">35:44</span>
                                            <span class="match-table-match-row__period-score"> (12:20 - 7:14 - 16:10)</span>
                                            <span class="match-table-match-row__separator">|</span>
                                            <span class="match-table-match-row__match-time">
                                                <svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" aria-hidden="true" role="img" class="match-time-passed-icon icon icon-clock sm" icon="clock">
                                                    <path fill-rule="evenodd" d="M5.5 0a5.5 5.5 0 110 11 5.5 5.5 0 010-11zm0 2.139a.33.33 0 00-.329.305l-.25 3.255a.5.5 0 00.367.52l2.667.728a.233.233 0 00.295-.225v-.015a.5.5 0 00-.252-.434L6.111 5.194l-.275-2.751a.338.338 0 00-.336-.304z"></path>
                                                </svg>
                                                6'
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__total-odds">
                                        <div class="match-table-match-row__total-odds-chip">+1.6</div>
                                    </div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__odd">1.1</div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__odd">2.1</div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__odd">5.4</div>
                                </td>
                            </tr>
                            <tr class="match-table-match-row">
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__basic-info">
                                        <div class="match-table-match-row__match-fav-icon-wrapper"></div>
                                        <div class="match-table-match-row__match-date-time">
                                            <div class="match-table-match-row__match-date">18 sep</div>
                                            <div class="match-table-match-row__match-time">21:00</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="match-table-match-row__cell" colspan="2">
                                    <div class="match-table-match-row__primary-info">
                                        <div class="match-table-match-row__team">Entebbe Archers</div>
                                        <div class="match-table-match-row__team">Miracle Eagles</div>
                                        <div class="match-table-match-row__score-info">
                                            <span class="match-table-match-row__score">35:44</span>
                                            <span class="match-table-match-row__period-score"> (12:20 - 7:14 - 16:10)</span>
                                            <span class="match-table-match-row__separator">|</span>
                                            <span class="match-table-match-row__match-time">
                                                <svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" aria-hidden="true" role="img" class="match-time-passed-icon icon icon-clock sm" icon="clock">
                                                    <path fill-rule="evenodd" d="M5.5 0a5.5 5.5 0 110 11 5.5 5.5 0 010-11zm0 2.139a.33.33 0 00-.329.305l-.25 3.255a.5.5 0 00.367.52l2.667.728a.233.233 0 00.295-.225v-.015a.5.5 0 00-.252-.434L6.111 5.194l-.275-2.751a.338.338 0 00-.336-.304z"></path>
                                                </svg>
                                                6'
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__total-odds">
                                        <div class="match-table-match-row__total-odds-chip">+1.6</div>
                                    </div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__odd">1.1</div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__odd">2.1</div>
                                </td>
                                <td class="match-table-match-row__cell">
                                    <div class="match-table-match-row__odd">5.4</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="casino-list home__section">
            <div class="section-card casino-list-section">
                <div class="section-card__notch first__notch"></div>
                <div class="section-card__header">
                    <div class="section-card__left">
                        <div class="section-card__title">
                            casino
                            <div class="section-card__meta">8314</div>
                        </div>
                    </div>
                    <div class="section-card__right">
                        <div class="section-card__action">
                            All
                        </div>
                    </div>
                </div>
                <div class="section-card__content">
                    <div class="SectionGamesOneWin_content_alv0o first-casino-games">
                        <div class="game-card">
                            <div class="game-card-image-container">
                                <img src="frontend/Default/img/_src/bonus-banner-deposit.avif" class="game-card-image">
                            </div>
                        </div>
                        <div class="game-card">
                            <div class="game-card-image-container">
                                <img src="frontend/Default/img/_src/bonus-banner-deposit.avif" class="game-card-image">
                            </div>
                        </div>
                        <div class="game-card">
                            <div class="game-card-image-container">
                                <img src="frontend/Default/img/_src/bonus-banner-deposit.avif" class="game-card-image">
                            </div>
                        </div>
                        <div class="game-card">
                            <div class="game-card-image-container">
                                <img src="frontend/Default/img/_src/bonus-banner-deposit.avif" class="game-card-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-card casino-list-section">
                <div class="section-card__notch first__notch"></div>
                <div class="section-card__header">
                    <div class="section-card__left">
                        <div class="section-card__title">
                            Games
                            <div class="section-card__meta">8314</div>
                        </div>
                    </div>
                    <div class="section-card__right">
                        <div class="section-card__action">
                            All
                        </div>
                    </div>
                </div>
                <div class="section-card__content">
                    <div class="SectionGamesOneWin_content_alv0o second-casino-games">
                        <div class="game-card">
                            <div class="game-card-image-container">
                                <img src="frontend/Default/img/_src/bonus-banner-deposit.avif" class="game-card-image">
                            </div>
                        </div>
                        <div class="game-card">
                            <div class="game-card-image-container">
                                <img src="frontend/Default/img/_src/bonus-banner-deposit.avif" class="game-card-image">
                            </div>
                        </div>
                        <div class="game-card">
                            <div class="game-card-image-container">
                                <img src="frontend/Default/img/_src/bonus-banner-deposit.avif" class="game-card-image">
                            </div>
                        </div>
                        <div class="game-card">
                            <div class="game-card-image-container">
                                <img src="frontend/Default/img/_src/bonus-banner-deposit.avif" class="game-card-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="casino-list home__section">
            <div class="section-card casino-list-section">
                <div class="section-card__notch first__notch"></div>
                <div class="section-card__header big-title">
                    <div class="section-card__left">
                        <div class="section-card__title">
                            Seibet Games
                        </div>
                    </div>
                    <div class="section-card__right">
                        <div class="section-card__action">
                            All
                        </div>
                    </div>
                </div>
                <div class="section-card__content">
                    <div class="SectionGamesOneWin_content_alv0o third-casino-games">
                        <div class="game-card">
                            <div class="game-card-image-container">
                                <img src="frontend/Default/img/_src/bonus-banner-deposit.avif" class="game-card-image">
                            </div>
                        </div>
                        <div class="game-card">
                            <div class="game-card-image-container">
                                <img src="frontend/Default/img/_src/bonus-banner-deposit.avif" class="game-card-image">
                            </div>
                        </div>
                        <div class="game-card">
                            <div class="game-card-image-container">
                                <img src="frontend/Default/img/_src/bonus-banner-deposit.avif" class="game-card-image">
                            </div>
                        </div>
                        <div class="game-card">
                            <div class="game-card-image-container">
                                <img src="frontend/Default/img/_src/bonus-banner-deposit.avif" class="game-card-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-card casino-list-section">
                <div class="section-card__notch first__notch"></div>
                <div class="section-card__background">
                    <div class="SectionPokerBanner_background">
                        <div class="WithSelfBlurGlow SectionPokerBanner_backgroundBlur">
                            <div class="WithSelfBlurGlow__glow-surrogate">
                                <div class="picture">
                                    <img src='frontend/Default/img/_src/home-poker-banner-bg.webp' />
                                </div>
                            </div>
                            <div class="WithSelfBlurGlow__content-wrapper">
                                <div class="VPicture_root_udHYK SectionPokerBanner_backgroundPicture_FIUWN">
                                    <img src='frontend/Default/img/_src/home-poker-banner-bg.webp' />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-card__header big-title">
                    <div class="section-card__left">
                        <svg data-v-01a6027a="" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="section-icon icon icon-home-poker sm margin square VIconSvgGradient_icon_WJLeK" square="" icon="home/poker" margin="true">
                            <rect width="40" height="40" rx="8" fill="url(#poker_svg__paint0_linear_3_4314)"></rect>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.2 12.807c-.14-.886-.21-1.328-.091-1.693a1.6 1.6 0 01.581-.8c.311-.226.754-.296 1.639-.436l7.587-1.202c.885-.14 1.327-.21 1.693-.092a1.6 1.6 0 01.8.582c.226.31.296.753.436 1.638l2.104 13.284c.14.885.21 1.328.091 1.693a1.6 1.6 0 01-.58.8c-.312.226-.754.296-1.64.436l-7.587 1.202c-.885.14-1.327.21-1.692.091a1.6 1.6 0 01-.8-.58c-.226-.312-.296-.754-.436-1.64L9.2 12.808zm10.783-1.167c.09.563-.274 1.088-.811 1.173-.537.085-1.045-.302-1.134-.864-.09-.563.274-1.088.811-1.173.537-.085 1.045.302 1.134.864zM14.3 26.12c.537-.086.9-.611.811-1.174-.089-.563-.597-.95-1.134-.865-.537.085-.9.61-.811 1.173.09.563.597.95 1.134.865zm4.565-8.699l-1.861-1.857a.939.939 0 00-.237-.172c-.485-.248-1.093-.04-1.359.463l-1.284 2.43c-.211.4-.146.883.16 1.188l1.861 1.858c.07.07.15.127.237.172.485.248 1.093.04 1.36-.463l1.283-2.431a1.01 1.01 0 00-.16-1.188z" fill="#fff"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.58 29.387l.177.035 7.537 1.486c.88.173 1.319.26 1.688.155a1.6 1.6 0 00.822-.55c.237-.303.324-.742.497-1.622l2.602-13.195c.173-.88.26-1.319.155-1.689a1.6 1.6 0 00-.551-.82c-.302-.238-.742-.325-1.62-.498l-5.018-.99c.117.415.203.96.325 1.727l1.703 10.756c.21 1.327.316 1.991.137 2.54a2.4 2.4 0 01-.871 1.2c-.467.338-1.13.443-2.458.653l-5.059.802-.066.01zm11.665-13.913c.11-.559-.233-1.097-.767-1.203-.534-.105-1.055.263-1.166.822-.11.56.233 1.098.767 1.203.534.105 1.055-.263 1.166-.822z" fill="#fff"></path>
                            <defs>
                                <linearGradient id="poker_svg__paint0_linear_3_4314" x1="24.629" y1="39.7" x2="5.17" y2="-1.671" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#32C5FF"></stop>
                                    <stop offset=".431" stop-color="#43B0FB"></stop>
                                    <stop offset="1" stop-color="#B620E0"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                        <div class="section-card__title">Poker</div>
                    </div>
                </div>
                <div class="section-card__content">
                    <div class="SectionPokerBanner_content">
                        <div class="SectionPokerBanner_contentSubtitle">Come in, play and win</div>
                        <div class="SectionPokerBanner_contentButton">Get bonus</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.first-casino-games').empty();
    $('.second-casino-games').empty();
    $('.third-casino-games').empty();
    $.ajax({
        url: "<?= route('frontend.game.game_page') ?>",
        type: 'get',
        data: {
            taken: 0,
            count: 12,
            category1: 'netent'
        }
    }).done(async function(res) {
        for (let item of res) {
            let html = `
            @if(Auth::check())
                <a href="/game/${item? item.name: ''}) }}?api_exit=/" class="game-card">
                    <div class="game-card-image-container">
                        <img src="${item.name ? '/frontend/Default/ico/'+item.name+'.jpg': '/frontend/Default/img/_src/game_loader.png'}" alt="${item.name}" class="game-card-image">
                    </div>
                </a>
            @else
                <a href="javascript:;" data-name="modal-login" class="game-card">
                    <div class="game-card-image-container">
                        <img src="${item.name ? '/frontend/Default/ico/'+item.name+'.jpg': '/frontend/Default/img/_src/game_loader.png'}" alt="${item.name}" class="game-card-image">
                    </div>
                </a>
            @endif
            `;

            $('.first-casino-games').append(html);
        }
    }).fail(function(e) {
        console.log(e);
        toastr.error('server error.');
    })

    $.ajax({
        url: "<?= route('frontend.game.game_page') ?>",
        type: 'get',
        data: {
            taken: 0,
            count: 12,
            category1: 'playtech'
        }
    }).done(async function(res) {
        for (let item of res) {
            let html = `
            @if(Auth::check())
                <a href="/game/${item? item.name: ''}) }}?api_exit=/" class="game-card">
                    <div class="game-card-image-container">
                        <img src="${item.name ? '/frontend/Default/ico/'+item.name+'.jpg': '/frontend/Default/img/_src/game_loader.png'}" alt="${item.name}" class="game-card-image">
                    </div>
                </a>
            @else
                <a href="javascript:;" data-name="modal-login" class="game-card">
                    <div class="game-card-image-container">
                        <img src="${item.name ? '/frontend/Default/ico/'+item.name+'.jpg': '/frontend/Default/img/_src/game_loader.png'}" alt="${item.name}" class="game-card-image">
                    </div>
                </a>
            @endif
            `;

            $('.second-casino-games').append(html);
        }
    }).fail(function(e) {
        console.log(e);
        toastr.error('server error.');
    })

    $.ajax({
        url: "<?= route('frontend.game.game_page') ?>",
        type: 'get',
        data: {
            taken: 0,
            count: 4,
            category1: 'pragmatic'
        }
    }).done(async function(res) {
        let i = 0;
        for (let item of res) {
            if(i == 4) break;
            i++;
            let html = `
            @if(Auth::check())
                <a href="/game/${item? item.name: ''}) }}?api_exit=/" class="game-card">
                    <div class="game-card-image-container">
                        <img src="${item.name ? '/frontend/Default/ico/'+item.name+'.jpg': '/frontend/Default/img/_src/game_loader.png'}" alt="${item.name}" class="game-card-image">
                    </div>
                </a>
            @else
                <a href="javascript:;" data-name="modal-login" class="game-card">
                    <div class="game-card-image-container">
                        <img src="${item.name ? '/frontend/Default/ico/'+item.name+'.jpg': '/frontend/Default/img/_src/game_loader.png'}" alt="${item.name}" class="game-card-image">
                    </div>
                </a>
            @endif
            `;

            $('.third-casino-games').append(html);
        }
    }).fail(function(e) {
        console.log(e);
        toastr.error('server error.');
    })
</script>
@endsection

@section('footer')
@include('frontend.Default.partials.footer')
@endsection

@section('scripts')
@include('frontend.Default.partials.scripts')
@endsection