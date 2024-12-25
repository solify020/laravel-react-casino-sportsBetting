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
<div class="sports-main" style="width: 100%; background-color: #03021d">
    <div class="mobile-sports-main" style="width: 100%;">
        <div class="bets-header">
            <div class="mobile-tabs">
                <div class="mobile-tab active" data-type='events'>Events</div>
                <div class="mobile-tab" data-type='sports'>Sports</div>
            </div>
        </div>
        <div class="sports-main-part">
            <div class="mobile-live-sports">
                <div class="mobile-live-sports-item">
                    <div class="mobile-sports-icon">
                        <i class="sports-icon icon-basketball no-margin" style="font-size: 25px;"></i>
                    </div>
                    <div class='mobile-sports-name'>Basketball</div>
                </div>
            </div>
            <div class='back-sport' style="display: none;">
                <div class="back-sport-wrap">
                    <svg data-v-6d7fe659="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" role="img" class="tournament-toggle icon icon-chevron-down square" icon="chevron-down" size="10" square="" data-v-02042309="" style="--vicon-with-gradient-problem__size:10px; transform: rotate(90deg)">
                        <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                    </svg>
                    <p class="back-sport-title">Sports</p>
                </div>
                <div class="mobile-sports-country-header">
                    <div class="back-sport-title-icon">
                        <i class="sports-icon icon-basketball" style='font-size: 20px'></i>
                    </div>
                    <div class="sports-list-title back-sport-title-name" style='font-size: 24px;font-weight: 700;'>Soccer</div>
                    <!-- <span style="color: #6c7da3;font-size: 14px;margin-left: 7px;">20</span> -->
                </div>
            </div>
            <ul class="mobile-sports-list">
                <li class="mobile-sports-list-item">
                    <div>
                        <div class="mobile-sports-item-header" data-toggle="collapse" data-target="#demo">
                            <i class="sports-icon icon-basketball"></i>
                            <div class="sports-list-title">Soccer</div>
                            <svg data-v-2b34b9a1="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" role="img" class="sport-toggle icon icon-chevron-down square" icon="chevron-down" square="" size="10" data-v-02042309="" style="--vicon-with-gradient-problem__size:10px;">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                        <div class='matches-collaps collapse'>
                            <div class="mobile-sports-match">
                                <div class="mobile-sports-match-title">
                                    <div>
                                        <div class="mobile-tournament-category">Turkey</div>
                                        <div class='mobile-tournament-name'> Turkiye Kupasi</div>
                                    </div>
                                    <div style="margin-left: auto">
                                        <svg data-v-6d7fe659="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" role="img" class="tournament-toggle icon icon-chevron-down square" icon="chevron-down" size="10" square="" data-v-02042309="" style="--vicon-with-gradient-problem__size:10px;">
                                            <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                        </svg>
                                    </div>
                                </div>
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
                </li>
                <li class="mobile-sports-list-item">
                    <div>
                        <div class="mobile-sports-item-header" data-toggle="collapse" data-target="#demo">
                            <i class="sports-icon icon-basketball"></i>
                            <div class="sports-list-title">Soccer</div>
                            <svg data-v-2b34b9a1="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" role="img" class="sport-toggle icon icon-chevron-down square" icon="chevron-down" square="" size="10" data-v-02042309="" style="--vicon-with-gradient-problem__size:10px;">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="match-league-panel" style='display:none;'>
        <div class='back-sport'>
            <div class="back-sport-league-wrap">
                <svg data-v-6d7fe659="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" role="img" class="tournament-toggle icon icon-chevron-down square" icon="chevron-down" size="10" square="" data-v-02042309="" style="--vicon-with-gradient-problem__size:10px; transform: rotate(90deg)">
                    <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                </svg>
                <div class='sports-league-icon'>
                    <i class="sports-icon icon-basketball"></i>
                </div>
                <p class="back-sport-title">Soccer</p>
            </div>
            <div class="mobile-sports-country-header">
                <svg data-v-70023ee4="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" aria-hidden="true" role="img" class="icon-star icon icon-star-bold md margin square" icon="star-bold" margin="" square="" size="md" data-v-d89e8830="">
                    <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                </svg>
                <div class="sports-list-title back-sport-title-name sport-league-title" style='font-size: 18px; margin-left:10px;'>league name</div>
            </div>
            <div class="match-in-league"></div>
        </div>
    </div>
</div>
@include('frontend.Default.sports.parts.sportsEvent')
@include('frontend.Default.sports.parts.sportsBetslip')

<script>
    let currentSportId = "",
        currentCountryId = "",
        currentLeagueId = "",
        sport_data_get_real = "",
        allowlist = [],
        type = 'events';

    function groupBy(array, key) {
        return array.reduce((result, currentValue) => {
            (result[currentValue[key]] = result[currentValue[key]] || []).push(
                currentValue
            );
            return result;
        }, {});
    };

    function groupById(array, key) {
        return array.reduce((result, currentValue) => {
            (result[currentValue[key]] = result[currentValue[key]] || {})[currentValue.id] = {
                ...currentValue,
                home: JSON.parse(currentValue.home),
                away: JSON.parse(currentValue.away),
                league: JSON.parse(currentValue.league),
                odds: JSON.parse(currentValue.odds),
            };
            return result;
        }, {});
    };

    function switchType(me) {
        $('.mobile-tab').removeClass('active');
        me.addClass('active');
        type = me.data('type');
        if (type === 'sports') {
            onlySportList();
        } else {
            $('.back-sport').hide();
            makeSportsCategory();
        }
    }

    function showCategory(me) {
        if (me.hasClass('active')) {
            me.closest('.category-wrap').find('.collapse').hide();
            me.removeClass('active');
        } else {
            me.addClass('active');
            me.closest('.category-wrap').find('.collapse').show();
        }
    }

    function showMatch(me) {
        if (me.hasClass('active')) {
            me.closest('.mobile-sports-match').find('.collapse-1').hide();
            me.removeClass('active');
        } else {
            me.addClass('active');
            me.closest('.mobile-sports-match').find('.collapse-1').show();
        }
    }

    function setSportItem(me) {
        if (!me.hasClass('active')) {
            me.addClass('active')
            allowlist.push(me.data('id'))
        } else {
            me.removeClass('active')
            let idx = allowlist.indexOf(me.data('id'));
            allowlist.splice(idx, 1);
        }
        makeSportsCategory();
    }

    function backFromCountry() {
        onlySportList();
        $('.back-sport').hide();
    }

    function backFromLeague() {
        $('.match-league-panel').hide();
        $('.mobile-sports-main').show();
    }

    function showLeagueCollaps(me) {
        if (me.hasClass('active')) {
            me.removeClass('active');
            me.closest('.category-wrap').find('.collaps').hide();
        } else {
            me.addClass('active');
            me.closest('.category-wrap').find('.collaps').show();
        }
    }

    function showCountry(me) {
        let id = me.data('id');
        let name = me.data('name');
        currentSportId = id;
        $.ajax({
            url: "<?= route('frontend.sports.get_league') ?>",
            type: 'get',
            data: {
                id,
                isLive: 1
            }
        }).done(async function(res) {
            let result = JSON.parse(res);
            let league = [];
            for (let item of result[0]) {
                league.push(JSON.parse(item.league));
            }
            let data = groupBy(league, 'cc');
            sportLeagueList(data)
            $('.back-sport').show();
            $('.back-sport-title-name').html(name);
            $('.back-sport-title-icon').html(`<i class="sports-icon icon-${name.toLocaleLowerCase().replaceAll(' ', '-')}" style='font-size: 20px'></i>`);
        }).fail(function(e) {
            console.log(e);
            toastr.error('server error.');
        })
    }

    function showLeagueMatch(me) {
        let league = me.data('league');
        currentLeagueId = league;
        $.ajax({
            url: "<?= route('frontend.sports.get_init_live') ?>",
            type: 'get',
            data: {
                sport_id: '',
                league_id: ''
            }
        }).done(async function(res) {
            let result = JSON.parse(res);
            newdata = groupById(result, 'sport_id');
            sport_data_get_real = newdata;
            if (currentSportId) {
                result = result.filter(e => e.sport_id == currentSportId);
            }
            if (currentLeagueId) {
                result = result.filter(e => e.league_id == currentLeagueId);
            }

            if (result.length) {
                $('.match-in-league').empty();
                $('.match-league-panel').show();
                $('.mobile-sports-main').hide();
                $('.back-sport-title').html(result[0].sport_name);
                $('.sports-league-icon').html(`<i class="sports-icon icon-${result[0].sport_name.toLocaleLowerCase().replaceAll(' ', '-')}" style='font-size: 20px'></i>`);
                $('.sport-league-title').html(JSON.parse(result[0].league).name);
                for (let item of result) {
                    let league = JSON.parse(item.league)
                    let home = JSON.parse(item.home)
                    let away = JSON.parse(item.away)
                    let odds = JSON.parse(item.odds)
                    let country = golbalCountries.filter(e => e.cc == league.cc)[0];
                    let html = `
                            <div class="live-event-main">
                                <div class="match-header">
                                    <div class="top-live-match-score">${item.ss ? item.ss.replaceAll('-',':'): '0:0'}</div>
                                </div>
                                <div class="top-live-match-info">
                                    <div class="match-teams">
                                        <div class="match-team"><span class="helper-line">${home.name}</span></div>
                                        <div class="match-team"><span class="helper-line">${away.name}</span></div>
                                    </div>
                                </div>
                                <div class="match-details">
                                ${item.sport_name} ·  ${item.league.name}
                                </div>
                                <ul class="match-odd-list">
                                    <li class="match-odd-item">
                                        <div class="live-top-odd">
                                            <div class="odd-values">
                                                <div class="odd-name">1</div>
                                                <div class="odd-value">${odds[Object.keys(odds)[0]].home_od}</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="match-odd-item">
                                        <div class="live-top-odd">
                                            <div class="odd-values">
                                                <div class="odd-name">2</div>
                                                <div class="odd-value">${odds[Object.keys(odds)[0]].away_od}</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        `;
                    $('.match-in-league').append(html);
                }
            }
        }).fail(function(e) {
            console.log(e);
            toastr.error('server error.');
        })
    }

    function onlySportList() {
        $('.mobile-live-sports').hide();
        $('.mobile-sports-list').empty();
        for (let i in sport_data_get_real) {
            let item = sport_data_get_real[i];
            let one = item[Object.keys(item)[0]];
            let html = `
                <li class="mobile-sports-list-item">
                    <div>
                        <div class="mobile-sports-item-header" data-id="${one.sport_id}" data-name="${one.sport_name}">
                            <i class="sports-icon icon-${one.sport_name.toLocaleLowerCase().replaceAll(' ', '-')}"></i>
                            <div class="sports-list-title">${one.sport_name} <span style="color: #6c7da3;font-size: 14px;margin-left: 7px;">${Object.keys(item).length}</span></div>
                            <svg data-v-2b34b9a1="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" role="img" class="sport-toggle icon icon-chevron-down square" icon="chevron-down" square="" size="10" data-v-02042309="" style="--vicon-with-gradient-problem__size:10px; transform: rotate(-90deg);">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                    </div>
                </li>
            `;
            $('.mobile-sports-list').append(html);
        }
        $('.mobile-sports-item-header').click(function() {
            showCountry($(this))
        })
    }

    function makeSportsList() {
        let data = sport_data_get_real;
        $('.mobile-live-sports').empty();
        for (let i in data) {
            let item = data[i];
            let one = item[Object.keys(item)[0]];
            let html = `
            <div class="mobile-live-sports-item" >
                <div class="mobile-sports-icon" data-id='${one.sport_id}'>
                    <i class="sports-icon icon-${one.sport_name.toLocaleLowerCase().replaceAll(' ', '-')} no-margin" style="font-size: 25px;"></i>
                </div>
                <div class='mobile-sports-name'>${one.sport_name}</div>
            </div>
            `;
            $('.mobile-live-sports').append(html);
        }

        $('.mobile-sports-icon').click(function() {
            setSportItem($(this));
        })
    }

    function makeMatch(data) {
        let html = '';
        for (let i in data) {
            let item = data[i];
            let country = golbalCountries.filter(e => e.cc == item.league.cc)[0];
            html += `
            <div class='matches-collaps collapse' style='display: none;'>
                <div class="mobile-sports-match">
                    <div class="mobile-sports-match-title">
                        <div>
                            <div class="mobile-tournament-category">${country ? country.name: 'World'}</div>
                            <div class='mobile-tournament-name'>${item.league.name}</div>
                        </div>
                        <div style="margin-left: auto">
                            <svg data-v-6d7fe659="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" role="img" class="tournament-toggle icon icon-chevron-down square" icon="chevron-down" size="10" square="" data-v-02042309="" style="--vicon-with-gradient-problem__size:10px;">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="live-event-main collapse-1" style='display:none'>
                        <div class="match-header">
                            <div class="top-live-match-score">${item.ss ? item.ss.replaceAll('-',':'): '0:0'}</div>
                        </div>
                        <div class="top-live-match-info">
                            <div class="match-teams">
                                <div class="match-team"><span class="helper-line">${item.home.name}</span></div>
                                <div class="match-team"><span class="helper-line">${item.away.name}</span></div>
                            </div>
                        </div>
                        <div class="match-details">
                        ${item.sport_name} ·  ${item.league.name}
                        </div>
                        <ul class="match-odd-list">
                            <li class="match-odd-item">
                                <div class="live-top-odd">
                                    <div class="odd-values">
                                        <div class="odd-name">1</div>
                                        <div class="odd-value">${item.odds[Object.keys(item.odds)[0]].home_od}</div>
                                    </div>
                                </div>
                            </li>
                            <li class="match-odd-item">
                                <div class="live-top-odd">
                                    <div class="odd-values">
                                        <div class="odd-name">2</div>
                                        <div class="odd-value">${item.odds[Object.keys(item.odds)[0]].away_od}</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            `;
        }
        return html;
    }

    async function makeSportsCategory() {
        let data = sport_data_get_real;
        $('.mobile-live-sports').show();
        $('.mobile-sports-list').empty();
        for (let i in data) {
            let item = data[i];
            let one = item[Object.keys(item)[0]];
            if (allowlist.length) {
                let idx = allowlist.indexOf(one.sport_id);
                if (idx == -1) {
                    continue;
                }
            }
            let html = `
                <li class="mobile-sports-list-item">
                    <div class='category-wrap'>
                        <div class="mobile-sports-item-header">
                            <i class="sports-icon icon-${one.sport_name.toLocaleLowerCase().replaceAll(' ', '-')}"></i>
                            <div class="sports-list-title">${one.sport_name}</div>
                            <svg data-v-2b34b9a1="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" role="img" class="sport-toggle icon icon-chevron-down square" icon="chevron-down" square="" size="10" data-v-02042309="" style="--vicon-with-gradient-problem__size:10px;">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                        ${await makeMatch(item)}
                    </div>
                </li>`;
            $('.mobile-sports-list').append(html);
        }
        $('.mobile-sports-item-header').click(function() {
            showCategory($(this));
        })
        $('.mobile-sports-match-title').click(function() {
            showMatch($(this));
        })
    }

    function showLeague(data) {
        let html = '';
        for (let item of data) {
            html += `
            <div class="mobile-sports-league-item" data-league='${item.id}'>
                <div class="sports-list-title">${item.name}</div>
            </div>
        `;
        }
        return html;
    }

    function sportLeagueList(data) {
        $('.mobile-sports-list').empty();
        for (let i in data) {
            let item = data[i];
            let country = golbalCountries.filter(e => e.cc == i)[0];
            let html = `
                <li class="mobile-sports-list-item">
                    <div class='category-wrap'>
                        <div class="mobile-sports-item-header country-item">
                            <img class="CategoryIcon" style='margin-right: 0.5em' src='https://assets.betsapi.com/v2/images/flags/${country ? i: 'eu'}.svg' alt='${country ? i: 'eu'}'/>
                            <div class="sports-list-title">${country? country.name: 'World'}</div>
                            <svg data-v-2b34b9a1="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true" role="img" class="sport-toggle icon icon-chevron-down square" icon="chevron-down" square="" size="10" data-v-02042309="" style="--vicon-with-gradient-problem__size:10px;">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                        <div class="mobile-sports-item-body collaps" style='display: none;'>
                        ${showLeague(data[i])}
                        </div>
                    </div>
                </li>`;
            $('.mobile-sports-list').append(html);
        }
        $('.country-item').click(function() {
            showLeagueCollaps($(this));
        })
        $('.mobile-sports-league-item').click(function() {
            showLeagueMatch($(this));
        })
    }

    function getInitLive() {
        $.ajax({
            url: "<?= route('frontend.sports.get_init_live') ?>",
            type: 'get',
            data: {
                sport_id: '',
                league_id: ''
            }
        }).done(async function(res) {
            let result = JSON.parse(res);
            newdata = groupById(result, 'sport_id');
            sport_data_get_real = newdata;
            await makeSportsList(newdata);
            await makeSportsCategory(newdata);
            // if (currentSportId) {
            //     result = result.filter(e => e.sport_id == currentSportId);
            // }
            // if (currentCountryId) {
            //     result = result.filter(e => JSON.parse(e.league).cc == currentCountryId);
            // }
            // if (currentLeagueId) {
            //     result = result.filter(e => e.league_id == currentLeagueId);
            // }
            // let data = groupBy(result, 'league_id');
            // if (location.pathname.split('/')[2] == 'live' && page == 'league') {
            //     await displayLeague(data);
            // } else if (page == 'event') {
            //     let eventNewData = {};
            //     if (newdata[cEvent.sportId] && newdata[cEvent.sportId][cEvent.eventId]) {
            //         let eventNewData = newdata[cEvent.sportId][cEvent.eventId];
            //         await makeEventHeader(eventNewData, golbalCountries);
            //         await makeEventMarket(eventNewData);
            //     } else {
            //         $('.sports-main-content').hide();
            //         $('.end-text').show();
            //     }
            // }
        }).fail(function(e) {
            console.log(e);
            toastr.error('server error.');
        })
    }

    function liveRealTime() {
        setInterval(getInitLive, 5000);
    }

    function init() {
        getInitLive();
        // liveRealTime();
        $('.mobile-tab').click(function() {
            switchType($(this));
        })

        $('.back-sport-wrap').click(function() {
            backFromCountry();
        })

        $('.back-sport-league-wrap').click(function() {
            backFromLeague();
        })
    }

    $(document).ready(function() {
        init();
    })
</script>
@endsection

@section('footer')
@include('frontend.Default.partials.footer')
@endsection

@section('scripts')
@include('frontend.Default.partials.scripts')
@endsection