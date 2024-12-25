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
<div class="sports-main">
    @include('frontend.Default.sports.parts.sportsList')
    <div class="sports-main-content league-main">
        @include('frontend.Default.partials.slider')
        <div id="bets">
            <div class="tournament-list-wrapper matches-block">
                <ul class="tournament-list">
                    <li class="tournament-item">
                        <table class="tournament-table">
                            <thead class="tournament-table-header">
                                <tr class="tournament-table-row">
                                    <td class="tournament-cell">
                                        <div class="tournament-cell__inner">
                                            <i class="sports-icon icon-basketball"></i>
                                            <p class="tournament-name">
                                                <span>Germany.</span>
                                                <span> Bundesliga</span>
                                            </p>
                                        </div>
                                    </td>
                                    <td class="odd-cell-h">1</td>
                                    <td class="odd-cell-h">X</td>
                                    <td class="odd-cell-h">2</td>
                                    <td class="odd-cell-h">HDP</td>
                                    <td class="odd-cell-h">1</td>
                                    <td class="odd-cell-h">2</td>
                                    <td class="odd-cell-h">HDP</td>
                                    <td class="odd-cell-h">Over</td>
                                    <td class="odd-cell-h">Under</td>
                                </tr>
                            </thead>
                            <tbody class="tournament-table-body">
                                <tr class="match-row">
                                    <td>
                                        <a href="#" class="match-info">
                                            <div class="favorites-icon">
                                                <svg data-v-0959a1f9="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" aria-hidden="true" role="img" class="icon-star icon icon-star xl" icon="star" size="xl" data-v-d89e8830="">
                                                    <path d="M7.5 11.25l-3.512 1.846a.5.5 0 01-.725-.527l.67-3.91-2.84-2.77a.5.5 0 01.277-.852l3.926-.57L7.052.908a.5.5 0 01.896 0l1.756 3.558 3.926.57a.5.5 0 01.277.854l-2.84 2.769.67 3.91a.5.5 0 01-.725.527L7.5 11.25z"></path>
                                                </svg>
                                            </div>
                                            <div class="match-start">
                                                <div class="match-start-date">03 sep</div>
                                                <div class="match-start-time">03:30</div>
                                            </div>
                                            <div class="match-separator"></div>
                                            <div class="match-teams-container">
                                                <div class="match-teams-block">
                                                    <div class="match-teams">
                                                        <div class="team">
                                                            <p class="team-name">
                                                                Borussia Dortmund
                                                            </p>
                                                        </div>
                                                        <div class="team">
                                                            <p class="team-name">
                                                                TSG 1899 Hoffenheim
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                </tr>
                                <tr class="match-row">
                                    <td>
                                        <a href="#" class="match-info">
                                            <div class="favorites-icon">
                                                <svg data-v-0959a1f9="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" aria-hidden="true" role="img" class="icon-star icon icon-star xl" icon="star" size="xl" data-v-d89e8830="">
                                                    <path d="M7.5 11.25l-3.512 1.846a.5.5 0 01-.725-.527l.67-3.91-2.84-2.77a.5.5 0 01.277-.852l3.926-.57L7.052.908a.5.5 0 01.896 0l1.756 3.558 3.926.57a.5.5 0 01.277.854l-2.84 2.769.67 3.91a.5.5 0 01-.725.527L7.5 11.25z"></path>
                                                </svg>
                                            </div>
                                            <div class="match-start">
                                                <div class="match-start-date">03 sep</div>
                                                <div class="match-start-time">03:30</div>
                                            </div>
                                            <div class="match-separator"></div>
                                            <div class="match-teams-container">
                                                <div class="match-teams-block">
                                                    <div class="match-teams">
                                                        <div class="team">
                                                            <p class="team-name">
                                                                Borussia Dortmund
                                                            </p>
                                                        </div>
                                                        <div class="team">
                                                            <p class="team-name">
                                                                TSG 1899 Hoffenheim
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="match-statistics">
                                                    <p class="match-statistics-line">
                                                        <span class="match-score-total">1:0</span>
                                                        <span class="match-score-periods">(1:0)</span>
                                                    </p>
                                                    <p class="match-statistics-line">
                                                        <svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" aria-hidden="true" role="img" class="match-time-passed-icon icon icon-clock sm" icon="clock">
                                                            <path fill-rule="evenodd" d="M5.5 0a5.5 5.5 0 110 11 5.5 5.5 0 010-11zm0 2.139a.33.33 0 00-.329.305l-.25 3.255a.5.5 0 00.367.52l2.667.728a.233.233 0 00.295-.225v-.015a.5.5 0 00-.252-.434L6.111 5.194l-.275-2.751a.338.338 0 00-.336-.304z"></path>
                                                        </svg>
                                                        <span class="match-time-passed">45'</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                    <td class="odd-cell">
                                        <div class="odd-coefficient">40.87</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sports-main-content end-text" style="display: none;">
        There is not event.
    </div>
    @include('frontend.Default.sports.parts.sportsEvent')
    @include('frontend.Default.sports.parts.sportsBetslip')
</div>
@endsection

@section('footer')
@include('frontend.Default.partials.footer')
@endsection

@section('scripts')
@include('frontend.Default.partials.scripts')
@endsection