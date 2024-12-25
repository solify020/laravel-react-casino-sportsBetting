@php
$detect = new \Detection\MobileDetect();
$isMobile = $detect->isMobile();
$isTablet = $detect->isTablet();
@endphp

<div class="sports-aside-left">
    <div class="sports-bets-navigation sports-panel">
        <div class="bets-navigation__buttons no-search">
            <div class="bets-navigation__button bordered df-aic" onclick='initSearch(true)'>
                <svg style="font-size: 14px" data-v-b37f2124="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" role="img" class="search-icon icon icon-search-bold sm inline" icon="search-bold" inline="">
                    <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                </svg>
                <span>Search</span>
            </div>
            @if( Auth::check() )
            <div class="sport-content list-item-content">
                <a href="#" class="sport-title">
                    <svg style="font-size: 14px" data-v-17d8bc16="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" aria-hidden="true" role="img" class="breadcrumb-icon star-icon icon icon-star sm inline" icon="star" color="#ffcf47" inline="">
                        <path d="M7.5 11.25l-3.512 1.846a.5.5 0 01-.725-.527l.67-3.91-2.84-2.77a.5.5 0 01.277-.852l3.926-.57L7.052.908a.5.5 0 01.896 0l1.756 3.558 3.926.57a.5.5 0 01.277.854l-2.84 2.769.67 3.91a.5.5 0 01-.725.527L7.5 11.25z"></path>
                    </svg>
                    <div class="expanded">Favourite</div>
                    <div class="match-count">0</div>
                </a>
            </div>
            @endif
        </div>
        <div class="sport-list panel-body no-search">
            <div class="list-item">
                <div class="sport-content list-item-content">
                    <a href="#" class="sport-title">
                        <i class="sports-icon icon-soccer"></i>
                        <div class="expanded">Soccer</div>
                        <div class="match-count">1460</div>
                    </a>
                </div>
            </div>
            <div class="list-item">
                <div class="sport-content list-item-content">
                    <a href="#" class="sport-title">
                        <i class="sports-icon icon-basketball"></i>
                        <div class="expanded">BasketBall</div>
                        <div class="match-count">14</div>
                    </a>
                </div>
                <div class="section-list">
                    <div class="section-header">
                        <span class="top">TOP</span>
                        <span>Tournament</span>
                    </div>
                    <div class="list-item">
                        <div class="tournament-content list-item-content">
                            <a href="#" class="tournament-title">
                                <i class="sports-icon icon-basketball"></i>
                                <div class="expanded">
                                    England. Premier League
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="section-header">
                        <span>Country</span>
                    </div>
                    <div class="list-item">
                        <div class="category-content list-item-content">
                            <a href="#" class="tournament-title">
                                <svg data-v-a197109a="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="flag-icon CategoryIcon category-icon rounded">
                                    <path fill="#f0f0f0" d="M0 0h512v512H0z"></path>
                                    <path fill="#d80027" d="M0 304h208v208h96V304h208v-96H304V0h-96v208H0z"></path>
                                    <path d="M406.92 333.913L512 438.993v-105.08zm-73.007 0L512 512v-50.36L384.273 333.913zM464.564 512L333.913 381.336V512z" fill="#0052b4"></path>
                                    <path fill="#f0f0f0" d="M333.913 333.913L512 512v-50.36L384.273 333.913z"></path>
                                    <path fill="#d80027" d="M333.913 333.913L512 512v-50.36L384.273 333.913z"></path>
                                    <path d="M80.302 333.913L0 414.215v-80.302zm97.782 22.646v155.438H22.658z" fill="#0052b4"></path>
                                    <path fill="#d80027" d="M127.724 333.916L0 461.641V512l178.084-178.084z"></path>
                                    <path d="M105.08 178.087L0 73.007v105.08zm73.007 0L0 0v50.36l127.727 127.727zM47.436 0l130.651 130.663V0z" fill="#0052b4"></path>
                                    <path fill="#f0f0f0" d="M178.087 178.087L0 0v50.36l127.727 127.727z"></path>
                                    <path fill="#d80027" d="M178.087 178.087L0 0v50.36l127.727 127.727z"></path>
                                    <path d="M431.698 178.087L512 97.785v80.302zm-97.782-22.646V.003h155.426z" fill="#0052b4"></path>
                                    <path fill="#d80027" d="M384.276 178.084L512 50.359V0L333.916 178.084z"></path>
                                </svg>
                                <div class="expanded">
                                    England
                                </div>
                            </a>
                        </div>
                        <div class="section-list">
                            <div class="section-header">
                                Tournament
                            </div>
                            <div class="list-item">
                                <div class="tournament-content list-item-content">
                                    <a href="#" class="tournament-title" data-nsfw-filter-status="swf">
                                        <div class="expanded"> Premier League</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-panel" style="display: none;">
            <div class="bets-navigation__buttons">
                <div class="bets-navigation__button bordered df-aic" onclick='initSearch(false)'>
                    <svg data-v-17d8bc16="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" aria-hidden="true" role="img" class="breadcrumb-icon icon icon-angle-left sm" icon="angle-left">
                        <path d="M4.2 247.5L151 99.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17L69.3 256l118.5 119.7c4.7 4.7 4.7 12.3 0 17L168 412.5c-4.7 4.7-12.3 4.7-17 0L4.2 264.5c-4.7-4.7-4.7-12.3 0-17z"></path>
                    </svg>
                    <svg style="font-size: 14px" data-v-b37f2124="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" role="img" class="search-icon icon icon-search-bold sm inline" icon="search-bold" inline="">
                        <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                    <span>Search</span>
                </div>
            </div>
            <div style="padding:  0 1rem">
                <div class="search-input-wrap">
                    <input placeholder="team name" type="text" class="search-input" onchange="search(this.value)" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" role="img" class="search__icon icon icon-search-bold sm" icon="search-bold">
                        <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                </div>
            </div>
            <div class="searched_box">
                <!-- <div class="search-match-group">
                    <div class="searched-tournament">
                        <i class="sports-icon icon-basketball"></i>
                        <span class="searched-league te">USA Major League Soccer</span>
                    </div>
                    <a class="searched-match">
                        <div class="searched-match-info">
                            <div class="searched-match-top-line">
                                <span class="searched-match-time">10:20</span>
                                <span class="searched-match-date">
                                    11 setptember, Sn
                                </span>
                            </div>
                            <div class="searched-match-middle-line">
                                <div class="match-separator"></div>
                                <div class="searched-match-teams">
                                    <div class="match-team">Real</div>
                                    <div class="match-team">Real</div>
                                </div>
                            </div>
                            <div class="match-bottom-line">
                                <i class="sports-icon icon-basketball"></i>
                                <div class="match-tournament-info">
                                    USA Major League Soccer
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    let olddata = {},
        newdata = {},
        betSlip = {},
        cEvent = {
            sportId: 0,
            eventId: ''
        },
        multiSip = {
            odd: 1,
            stake: 0,
            profit: 0
        },
        tournament = {},
        isLive = false,
        allowOddChange = true,
        slipType = 'single',
        page = 'league',
        currentSportId = "",
        currentCountryId = "",
        currentLeagueId = "",
        isMobile = "{{$isMobile}}",
        isTablet = "{{$isTablet}}";

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

    function getDate(d) {
        let dt = new Date(Number(d) * 1000).toDateString().split(' ');
        let date = `${dt[2]} ${dt[1]}`;
        let h = new Date(Number(d) * 1000).getHours();
        let m = new Date(Number(d) * 1000).getMinutes();
        h = String(h).length == 1 ? `0${h}` : h;
        m = String(m).length == 1 ? `0${m}` : m;
        let time = `${h}:${m}`;
        return {
            date,
            time,
            week: dt[0]
        }
    }

    function getMarketName(_id, marketId) {
        let market = marketId.slice(-1),
            name = '',
            oddName = [],
            id = Number(_id);
        if (id == 1) {
            switch (market) {
                case '1':
                    name = '1X2 Full Result';
                    oddName = ['W1', 'X', 'W2'];
                    break;
                case '2':
                    name = 'Asian Handicap';
                    oddName = ['H1', 'H2'];
                    break;
                case '3':
                    name = 'Over/Under';
                    oddName = ['Over', 'Under'];
                    break;
                case '4':
                    name = 'Asian Corners';
                    oddName = ['Over', 'Under'];
                    break;
                case '5':
                    name = '1st Half Asian Handicap';
                    oddName = ['H1', 'H2'];
                    break;
                case '6':
                    name = '1st Half Goal Line';
                    oddName = ['Over', 'Under'];
                    break;
                case '7':
                    name = '1st Half Asian Corners';
                    oddName = ['Over', 'Under'];
                    break;
                case '8':
                    name = 'Half Time Result';
                    oddName = ['W1', 'X', 'W2'];
                    break;
                case '9':
                    name = 'Exact Goals';
                    oddName = [];
                    break;
            }
        } else if (id == 18) {
            switch (market) {
                case '1':
                    name = 'Money Line';
                    break;
                case '2':
                    name = 'Spread';
                    break;
                case '3':
                    name = 'Total Points';
                    break;
                case '4':
                    name = 'Money Line (Half)';
                    break;
                case '5':
                    name = 'Spread (Half)';
                    break;
                case '6':
                    name = 'Total Points (Half)';
                    break;
                case '7':
                    name = 'Quarter - Winner (2-Way)';
                    break;
                case '8':
                    name = 'Quarter - Handicap';
                    break;
                case '9':
                    name = 'Quarter - Total (2-Way)';
                    break;
            }
        } else {
            switch (market) {
                case '1':
                    name = 'Match Winner 2-Way';
                    break;
                case '2':
                    name = 'Asian Handicap';
                    break;
                case '3':
                    name = 'Over/Under';
                    break;
            }
        }
        if (marketId == '3_4') {
            name = 'Draw No Bet';
        }
        return name;
    }

    function getOddNames(_id, marketId) {
        let market = marketId.slice(-1),
            name = '',
            oddName = [],
            id = Number(_id);
        if (id == 1) {
            switch (market) {
                case '1':
                    oddName = ['W1', 'X', 'W2'];
                    break;
                case '2':
                    oddName = ['H1', 'H2'];
                    break;
                case '3':
                    oddName = ['Over', 'Under'];
                    break;
                case '4':
                    oddName = ['Over', 'Under'];
                    break;
                case '5':
                    oddName = ['H1', 'H2'];
                    break;
                case '6':
                    oddName = ['Over', 'Under'];
                    break;
                case '7':
                    oddName = ['Over', 'Under'];
                    break;
                case '8':
                    oddName = ['W1', 'X', 'W2'];
                    break;
            }
        } else if (id == 18) {
            switch (market) {
                case '1':
                    name = 'Money Line';
                    break;
                case '2':
                    name = 'Spread';
                    break;
                case '3':
                    name = 'Total Points';
                    break;
                case '4':
                    name = 'Money Line (Half)';
                    break;
                case '5':
                    name = 'Spread (Half)';
                    break;
                case '6':
                    name = 'Total Points (Half)';
                    break;
                case '7':
                    name = 'Quarter - Winner (2-Way)';
                    break;
                case '8':
                    name = 'Quarter - Handicap';
                    break;
                case '9':
                    name = 'Quarter - Total (2-Way)';
                    break;
            }
        } else {
            switch (market) {
                case '1':
                    name = 'Match Winner 2-Way';
                    break;
                case '2':
                    name = 'Asian Handicap';
                    break;
                case '3':
                    name = 'Over/Under';
                    break;
            }
        }
        if (marketId == '3_4') {
            name = 'Draw No Bet';
            oddName = ['W1', 'W2'];
        }
        return oddName;
    }

    function lockSVG() {
        return `
        <svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" aria-hidden="true" role="img" class="odd-lock icon icon-lock md" icon="lock" style="margin:auto; ${page == 'league' ? 'color: #fff !important;' : ''}">
            <path d="M26.76 16.08H9.62a1.86 1.86 0 00-1.85 1.85v7.37a6.43 6.43 0 006.41 6.42H22a6.3 6.3 0 006.28-6.28v-7.86a1.5 1.5 0 00-1.52-1.5zm-8.45 8.78v1.74a.57.57 0 01-.57.54.58.58 0 01-.58-.54v-1.75a2.42 2.42 0 01-1.87-2.39 2.46 2.46 0 114.92 0 2.42 2.42 0 01-1.9 2.39zM18.06 4.23h-.12A6.75 6.75 0 0011.22 11v4h1.13v-4.12A5.46 5.46 0 0114 7a5.56 5.56 0 013.93-1.61H18A5.62 5.62 0 0123.52 11v3.89h1.13v-4a6.72 6.72 0 00-6.59-6.66z"></path>
        </svg>
        `;
    }

    function reLoad() {
        if (isLive) {
            getInitLive();
        } else {
            getInitLeague();
        }
    }

    // menu list
    function setTournament(me) {
        let id = me.data('id');
        currentLeagueId = id;

        reLoad();

        $('.tournament-id').removeClass('active');
        me.addClass('active');
    }

    function showTournament(me) {
        if (me.hasClass('active')) {
            $('.tournament-title').removeClass('active');
        } else {
            $('.tournament-title').removeClass('active');
            me.addClass('active');
        }

        if (!me.closest('.list-item').find('.section-list').length) {
            $('.tournament-title').closest('.list-item').find('.section-list').hide();
            me.closest('.list-item').append(`
                <div class="section-list">
                    <div class="section-header">
                        Tournament
                    </div>
                </div>`);
            let id = me.data('id');
            let c = me.data('c');
            currentCountryId = c;

            reLoad();

            for (let item of tournament[id][c]) {
                let html = `
                <div class="list-item">
                    <div class="tournament-content list-item-content">
                        <a ${location.pathname.split('/')[2] == 'event' ? 'href="/sports/live"' : ''} class="tournament-id" data-id="${item.id}" data-nsfw-filter-status="swf">
                            <div style="margin-right: 0.5em">
                                <svg click="console.log(${item.id})" style='font-size:14px' data-v-0959a1f9="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" aria-hidden="true" role="img" class="icon-star icon icon-star md" icon="star" size="md" data-v-d89e8830=""><path d="M7.5 11.25l-3.512 1.846a.5.5 0 01-.725-.527l.67-3.91-2.84-2.77a.5.5 0 01.277-.852l3.926-.57L7.052.908a.5.5 0 01.896 0l1.756 3.558 3.926.57a.5.5 0 01.277.854l-2.84 2.769.67 3.91a.5.5 0 01-.725.527L7.5 11.25z"></path></svg>
                            </div>    
                            <div class="expanded">${item.name}</div>
                        </a>
                    </div>
                </div>`;
                me.closest('.list-item').find('.section-list').append(html);
            }
            $('.tournament-id').click(function() {
                setTournament($(this));
                toLeague();
            })
        } else {
            if (me.hasClass('active')) {
                $('.tournament-title').closest('.list-item').find('.section-list').hide();
                me.closest('.list-item').find('.section-list').show();
            } else {
                me.closest('.list-item').find('.section-list').hide();
            }
        }
    }

    function showCountry(me) {
        let id = me.data('id');

        $('.tournament-title').closest('.list-item').find('.section-list').hide();
        $('.tournament-title').removeClass('active');
        if (me.hasClass('active')) {
            $('.sport-title').removeClass('active');
            currentSportId = "";
            currentCountryId = "";
            currentLeagueId = "";
        } else {
            $('.sport-title').removeClass('active');
            me.addClass('active');
            currentSportId = id;
            currentCountryId = "";
            currentLeagueId = "";
        }

        reLoad();

        if (!me.closest('.list-item').find('.section-list').length) {
            $('.sport-list').find('.list-item').find('.section-list').hide();

            me.closest('.list-item').append(`<div class="section-list df country-list" style='align-items: center; justify-content: center;'>
                <svg data-v-3e7104f2="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" role="img" class="spinner icon icon-spinner sm" icon="spinner" style="font-size: 1em; color: rgb(255, 255, 255);"><path d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z"></path></svg>
            </div>`);

            $.ajax({
                url: "<?= route('frontend.sports.get_league') ?>",
                type: 'get',
                data: {
                    id,
                    isLive
                }
            }).done(async function(res) {
                let result = JSON.parse(res);
                let league = [];
                for (let item of result[0]) {
                    league.push(JSON.parse(item.league));
                }
                let data = groupBy(league, 'cc');
                tournament[id] = data;
                me.closest('.list-item').find('.section-list').removeClass('df');
                me.closest('.list-item').find('.section-list').html(`
                        <div class="section-header">
                            <span>Country</span>
                        </div>`);

                for (let key in data) {
                    let country = result[1].find(e => e.cc == key);
                    let html = `
                    <div class="list-item">
                        <div class="category-content list-item-content">
                            <a class="tournament-title" data-id="${id}" data-c="${key}">
                                <img class="CategoryIcon" style='margin-right: 0.5em' src='https://assets.betsapi.com/v2/images/flags/${country ? country.cc: 'eu'}.svg' alt='${country ? country.cc: 'eu'}'/>
                                <div class="expanded">
                                    ${country ? country.country : 'World'}
                                </div>
                            </a>
                        </div>
                    </div>`;
                    me.closest('.list-item').find('.section-list').append(html);
                }
                $('.tournament-title').click(function() {
                    showTournament($(this));
                    toLeague();
                })
            }).fail(function(e) {
                console.log(e);
                toastr.error('server error.');
            })
        } else {
            if (me.hasClass('active')) {
                $('.sport-list').find('.list-item').find('.section-list').hide();
                me.closest('.list-item').find('.country-list').show();
            } else {
                me.closest('.list-item').find('.section-list').hide();
            }
        }

    }

    function getSports() {
        $.ajax({
            url: "<?= route('frontend.sports.get_sports') ?>",
            type: 'get',
            data: {
                isLive
            }
        }).done(function(res) {
            let result = JSON.parse(res);
            $(".sport-list").empty();
            for (let item of result) {
                let html = `
                <div class="list-item">
                    <div class="sport-content list-item-content">
                        <a class="sport-title" data-id="${item.sport_id}">
                            <i class="sports-icon icon-${item.sport_name.toLocaleLowerCase().replaceAll(' ', '-')}"></i>
                            <div class="expanded">${item.sport_name}</div>
                            <div class="match-count">${item.count}</div>
                        </a>
                    </div>
                </div>`
                $('.sport-list').append(html);
            }
            $('.sport-title').click(function() {
                showCountry($(this));
                toLeague();
            })
        }).fail(function(e) {
            console.log(e);
            toastr.error('server error.');
        })
    }
    //menu list

    // betSlip
    function multiSlipCheck() {
        let isDup = [],
            eventKey = Object.keys(betSlip);
        for (let i = 0; i < eventKey.length; i++) {
            let dup = [eventKey[i]];
            let f = eventKey[i].split('-')[1];
            for (let j = i + 1; j < eventKey.length; j++) {
                let s = eventKey[j].split('-')[1];
                if (f == s) {
                    dup.push(eventKey[j]);
                    eventKey.splice(j, 1);
                    --j;
                }
            }
            isDup.push(dup);
        }
        return isDup.length > 1;
    }

    function addSlip(me) {
        if (!me.find('.real-odd').length) return;
        let data = me.find('.real-odd').data('id');
        let oddType = me.data('name');
        let k = data.split('-');
        if (me.find('.real-odd').hasClass('active')) {
            olddata[k[0]][k[1]]['odds'][k[2]][`${k[3]}_active`] = false;
            me.find('.real-odd').removeClass('active');
            delete betSlip[data];
        } else {
            olddata[k[0]][k[1]]['odds'][k[2]][`${k[3]}_active`] = true;
            me.find('.real-odd').addClass('active');
            betSlip[data] = {
                ...olddata[k[0]][k[1]],
                mk: k[2],
                odk: k[3],
                profit: 0,
                stake: 0,
                oddType
            };
        }
        showBetSlip();
    }

    function removeSlip(id) {
        delete betSlip[id];
        let k = id.split('-');
        if (olddata[k[0]] && olddata[k[0]][k[1]] && olddata[k[0]][k[1]]['odds'] && olddata[k[0]][k[1]]['odds'][k[2]]) {
            olddata[k[0]][k[1]]['odds'][k[2]][`${k[3]}_active`] = false;
        }
        $(`div[data-id='${id}']`).removeClass('active');
        if (Object.keys(betSlip).length == 1) {
            $('.coupon-tab').removeClass('checked');
            $('.single-tab').addClass('checked');
            slipType = 'single';
        };
        showBetSlip();
    }

    function clearAllBetSlip() {
        for (let key in betSlip) {
            let k = key.split('-');
            olddata[k[0]][k[1]]['odds'][k[2]][`${k[3]}_active`] = false;
        }
        betSlip = {};
        multiSip = {
            odd: 1,
            stake: 0,
            profit: 0
        }
        $('.coupon-tab').removeClass('checked');
        $('.single-tab').addClass('checked');
        slipType = 'single';
        showBetSlip();
        $('.real-odd').removeClass('active');
    }

    function showBetSlip() {
        if (Object.keys(betSlip).length) {
            $('.slip-section').hide();
            $('.empty-section').hide();
            if (slipType == 'single') {
                $('.bet-slip-btn').html(`BETSLIP <span class="slip-count">${Object.keys(betSlip).length}</span>`);
                $('.ordinary-section').show();
                $('.single').empty();
                for (let k in betSlip) {
                    let odd = betSlip[k].odds[betSlip[k].mk][betSlip[k].odk];
                    let html = `
                        <div class="coupon-ordinary coupon-ordinary">
                            <div class="coupon-card ${betSlip[k].isLock ? "locked":"" }">
                                <div class="BaseCouponOdd">
                                    <div class="odd-text ${k}">
                                        ${Number(odd).toFixed(2)}
                                    </div>
                                    <p class="BaseCouponOdd_name">${getMarketName(betSlip[k].sport_id, betSlip[k].mk)}, ${betSlip[k].oddType} </p>
                                    <button class="icon-btn close-odd" onClick="removeSlip('${k}')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="14" viewBox="0 0 12 14" aria-hidden="true" role="img" class="icon icon-trash sm BaseCouponClear_removeButtonIcon_pyB_0" icon="trash">
                                            <path d="M7.322.5c.346-.01.682.118.929.354.16.163.285.355.368.564v.01L9.13 2.64h2.597a.27.27 0 01.273.266v.608a.27.27 0 01-.273.266h-.724v8.152c0 .866-.722 1.567-1.61 1.568H2.607c-.89 0-1.61-.702-1.611-1.568V3.78H.273A.27.27 0 010 3.514v-.608c0-.07.028-.139.08-.19a.277.277 0 01.193-.077H2.87l.516-1.222a1.71 1.71 0 01.368-.564C4 .618 4.334.49 4.678.5zm2.586 3.28H2.094v8.152c0 .277.23.501.514.502h6.784a.51.51 0 00.516-.502V3.78zm-6.15 1.605c.31 0 .563.252.563.563v4.266a.563.563 0 11-1.126 0V5.948c0-.31.252-.563.563-.563zm2.243 0c.31 0 .562.252.562.563v4.266a.563.563 0 11-1.125 0V5.948c0-.31.252-.563.563-.563zm2.222 0c.31 0 .563.252.563.563v4.266a.563.563 0 11-1.126 0V5.948c0-.31.252-.563.563-.563zm-.9-3.817H4.677c-.126 0-.17.012-.284.269l-.338.803h3.89l-.34-.803c-.114-.257-.16-.269-.284-.269z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="BaseCouponMatch_root">
                                    <div class="BaseCouponMatch_matchTeamList">
                                        <div>
                                            <p class="BaseCouponMatch_matchTeam">${betSlip[k].home.name}</p>
                                            <p class="BaseCouponMatch_matchTeam">${betSlip[k].away.name}</p>
                                        </div>
                                        <div>
                                        ${
                                            betSlip[k].isLock ? 
                                            `<svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" aria-hidden="true" role="img" class="odd-lock icon icon-lock md" icon="lock" style="margin-right:14px; color: #fff !important; font-size: 22px;"><path d="M26.76 16.08H9.62a1.86 1.86 0 00-1.85 1.85v7.37a6.43 6.43 0 006.41 6.42H22a6.3 6.3 0 006.28-6.28v-7.86a1.5 1.5 0 00-1.52-1.5zm-8.45 8.78v1.74a.57.57 0 01-.57.54.58.58 0 01-.58-.54v-1.75a2.42 2.42 0 01-1.87-2.39 2.46 2.46 0 114.92 0 2.42 2.42 0 01-1.9 2.39zM18.06 4.23h-.12A6.75 6.75 0 0011.22 11v4h1.13v-4.12A5.46 5.46 0 0114 7a5.56 5.56 0 013.93-1.61H18A5.62 5.62 0 0123.52 11v3.89h1.13v-4a6.72 6.72 0 00-6.59-6.66z"></path></svg>`
                                            : ""
                                        }
                                        </div>
                                    </div>
                                    <p class="BaseCouponMatch_name">
                                        <i class="sports-icon icon-${betSlip[k].sport_name.toLocaleLowerCase().replaceAll(" ", '-')} betslip-icon"></i>
                                        <span>${betSlip[k].league.name}</span>
                                    </p>
                                    ${
                                        betSlip[k].time_status == 1 ? 
                                        `<div class="df live-mark">
                                            <div class="live-dot"></div>
                                            <span>LIVE</span>
                                        </div>` : ""
                                    }
                                </div>
                            </div>
                            <div class="base-coupon-bet-info">
                                <table class="coupon-bet-info-table">
                                    <tbody>
                                        <tr class="coupon-bet-info-row">
                                            <td class="possible-profit-text">Possible profit</td>
                                        </tr>
                                        <tr class="coupon-bet-info-row">
                                            <td class="possible-profit-value">
                                                <span class="profit">${Number(betSlip[k].profit).toFixed(2)} USD</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="base-coupon-bet-form">
                                <input type="number" inputmode="decimal" min="0" placeholder="Bet amount" value="${betSlip[k].stake ? betSlip[k].stake: ''}" class="amount-input" data-id="${k}">
                            </div>
                        </div>`;
                    $('.single').append(html);
                }
            } else {
                let eventKey = Object.keys(betSlip);
                for (let i = 0; i < eventKey.length; i++) {
                    let dup = [eventKey[i]];
                    for (let j = i + 1; j < eventKey.length; j++) {
                        let f = eventKey[i].split('-')[1];
                        let s = eventKey[j].split('-')[1];
                        if (f == s) {
                            dup.push(eventKey[j]);
                        }
                    }
                    if (dup.length > 1) {
                        for (let l = 0; l < dup.length - 1; l++) {
                            delete betSlip[dup[l]];
                            let k = dup[l].split('-');
                            olddata[k[0]][k[1]]['odds'][k[2]][`${k[3]}_active`] = false;
                            $(`div[data-id='${dup[l]}']`).removeClass('active');
                        }
                    }
                }
                $('.bet-slip-btn').html(`BETSLIP <span class="slip-count">${Object.keys(betSlip).length}</span>`);
                $('.express-section').show();
                $('.ExpressCouponCards').empty();
                multiSip.odd = 1;
                for (let k in betSlip) {
                    let odd = betSlip[k].odds[betSlip[k].mk][betSlip[k].odk];
                    multiSip.odd *= Number(odd);
                    let html = `
                            <div class="ExpressCouponCards_coupon">
                                <div class="CouponCard_root">
                                    <div class="BaseCouponOdd">
                                        <div class="odd-text ${k}">
                                        ${Number(odd).toFixed(2)}
                                        </div>
                                        <p class="BaseCouponOdd_name">${getMarketName(betSlip[k].sport_id, betSlip[k].mk)}, ${betSlip[k].oddType} </p>
                                        <button class="icon-btn close-odd" onClick="removeSlip('${k}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="14" viewBox="0 0 12 14" aria-hidden="true" role="img" class="icon icon-trash sm BaseCouponClear_removeButtonIcon_pyB_0" icon="trash">
                                                <path d="M7.322.5c.346-.01.682.118.929.354.16.163.285.355.368.564v.01L9.13 2.64h2.597a.27.27 0 01.273.266v.608a.27.27 0 01-.273.266h-.724v8.152c0 .866-.722 1.567-1.61 1.568H2.607c-.89 0-1.61-.702-1.611-1.568V3.78H.273A.27.27 0 010 3.514v-.608c0-.07.028-.139.08-.19a.277.277 0 01.193-.077H2.87l.516-1.222a1.71 1.71 0 01.368-.564C4 .618 4.334.49 4.678.5zm2.586 3.28H2.094v8.152c0 .277.23.501.514.502h6.784a.51.51 0 00.516-.502V3.78zm-6.15 1.605c.31 0 .563.252.563.563v4.266a.563.563 0 11-1.126 0V5.948c0-.31.252-.563.563-.563zm2.243 0c.31 0 .562.252.562.563v4.266a.563.563 0 11-1.125 0V5.948c0-.31.252-.563.563-.563zm2.222 0c.31 0 .563.252.563.563v4.266a.563.563 0 11-1.126 0V5.948c0-.31.252-.563.563-.563zm-.9-3.817H4.677c-.126 0-.17.012-.284.269l-.338.803h3.89l-.34-.803c-.114-.257-.16-.269-.284-.269z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="BaseCouponMatch_root">
                                        <div class="BaseCouponMatch_matchTeamList">
                                            <div>
                                                <p class="BaseCouponMatch_matchTeam">${betSlip[k].home.name}</p>
                                                <p class="BaseCouponMatch_matchTeam">${betSlip[k].away.name}</p>
                                            </div>
                                            <div>
                                            ${
                                                betSlip[k].isLock ? 
                                                `<svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" aria-hidden="true" role="img" class="odd-lock icon icon-lock md" icon="lock" style="margin-right:14px; color: #fff !important; font-size: 22px;"><path d="M26.76 16.08H9.62a1.86 1.86 0 00-1.85 1.85v7.37a6.43 6.43 0 006.41 6.42H22a6.3 6.3 0 006.28-6.28v-7.86a1.5 1.5 0 00-1.52-1.5zm-8.45 8.78v1.74a.57.57 0 01-.57.54.58.58 0 01-.58-.54v-1.75a2.42 2.42 0 01-1.87-2.39 2.46 2.46 0 114.92 0 2.42 2.42 0 01-1.9 2.39zM18.06 4.23h-.12A6.75 6.75 0 0011.22 11v4h1.13v-4.12A5.46 5.46 0 0114 7a5.56 5.56 0 013.93-1.61H18A5.62 5.62 0 0123.52 11v3.89h1.13v-4a6.72 6.72 0 00-6.59-6.66z"></path></svg>`
                                                : ""
                                            }
                                            </div>
                                        </div>
                                        <p class="BaseCouponMatch_name">
                                            <i class="sports-icon icon-${betSlip[k].sport_name.toLocaleLowerCase().replaceAll(" ", '-')} betslip-icon"></i>
                                            <span>${betSlip[k].league.name}</span>
                                        </p>
                                        ${
                                            betSlip[k].time_status == 1 ? 
                                            `<div class="df live-mark">
                                                <div class="live-dot"></div>
                                                <span>LIVE</span>
                                            </div>` : ""
                                        }
                                    </div>
                                </div>
                                <div class="ExpressCouponCards_separator"></div>
                            </div>`;
                    $('.ExpressCouponCards').append(html);
                }
                multiSip.profit = multiSip.odd * multiSip.stake;
                let html = `
                    <div class="ExpressCouponCards_coefficientWrapper">
                        <div class="CouponTotalCoefficient_root_GnzWG CouponTotalCoefficient_rootNotEmpty">
                        <div class="odd-text multi-odd CouponTotalCoefficient_value_xoZZa total-odd-">${multiSip.odd.toFixed(2)}</div>
                        <div> Total coefficient </div>
                        </div>
                    </div>
                    <div class="base-coupon-bet-info">
                        <table class="coupon-bet-info-table">
                            <tbody>
                                <tr class="coupon-bet-info-row">
                                    <td class="possible-profit-text">Possible profit</td>
                                </tr>
                                <tr class="coupon-bet-info-row">
                                    <td class="possible-profit-value">
                                        <span class="multi-profit">${multiSip.profit.toFixed(2)} USD</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="base-coupon-bet-form">
                        <input type="number" inputmode="decimal" min="0" value="${multiSip.stake > 0 ? multiSip.stake : ''}" placeholder="Bet amount" class="amount-input">
                    </div>`;
                $('.ExpressCouponCards').append(html);
            }
            $('.amount-input').on('keyup', function() {
                setStake($(this))
            })
        } else {
            $('.bet-slip-btn').html(`BETSLIP`);
            $('.slip-section').hide();
            $('.empty-section').show();
        }
    }

    function setStake(me) {
        let val = me.val();
        if (slipType == 'single') {
            let id = me.data('id');
            let k = id.split('-');
            let odd = betSlip[id]['odds'][k[2]][k[3]];
            let profit = Number(odd) * val;
            betSlip[id]['stake'] = val;
            betSlip[id]['profit'] = profit;
            me.closest('.coupon-ordinary').find('.coupon-bet-info-row').find('.profit').html(`${profit.toFixed(2)} USD`)
        } else {
            multiSip.stake = Number(val);
            multiSip.profit = Number(multiSip.odd) * Number(val);
            $('.multi-profit').html(`${multiSip.profit.toFixed(2)} USD`)
        }
    }

    function setSlipType(me) {
        if (me.hasClass('checked')) return;
        let type = me.data('type');
        if (type == 'multi') {
            if (!multiSlipCheck()) return;
        }
        slipType = type;
        $('.coupon-tab').removeClass('checked');
        me.addClass('checked');
        showBetSlip();
    }

    function oddAndProfit() {
        multiSip.odd = 1;
        for (let k in betSlip) {
            let odd = betSlip[k].odds[betSlip[k].mk][betSlip[k].odk];
            multiSip.odd *= Number(odd);
        }
        multiSip.profit = Number(multiSip.odd) * Number(multiSip.stake);
        return {
            profit: multiSip.profit,
            odd: multiSip.odd
        }
    }

    function slipOddUpdate() {
        for (let i in betSlip) {
            let status = '';
            let {
                mk,
                odk,
                odds,
                stake
            } = betSlip[i];
            let k = i.split('-');
            let oldOdd = odds[mk][odk];
            let newOdd = newdata[k[0]][k[1]]['odds'][mk][odk];
            newdata[k[0]][k[1]]['odds'][mk][`${odk}_active`] = true;

            if (Number(oldOdd) && Number(newOdd)) {
                let num = Number(newOdd) - Number(oldOdd);
                if (num > 0) status = 'up';
                else if (num < 0) status = 'down';
            }

            $(`.${i}`).removeClass('up');
            $(`.${i}`).removeClass('down');

            if (Number(newOdd)) {
                if (betSlip[i]['isLock'] && betSlip[i]['isLock'] == true) {
                    betSlip[i]['isLock'] == false;
                    $(`.${i}`).closest('.coupon-card').removeClass('locked');
                    $(`.${i}`).closest('.CouponCard_root').removeClass('locked');
                }
                let profit = Number(newOdd) * Number(stake);
                betSlip[i]['odds'][mk][odk] = newOdd;
                betSlip[i]['profit'] = profit;

                $(`.${i}`).html(Number(newOdd).toFixed(2));
                $(`.${i}`).addClass(status);
                if (slipType == 'single') {
                    $(`.${i}`).closest('.coupon-ordinary').find('.coupon-bet-info-row').find('.profit').html(`${profit.toFixed(2)} USD`);

                } else {
                    let r = oddAndProfit();
                    $('.multi-odd').html(r.odd.toFixed(2));
                    $('.multi-profit').html(`${r.profit.toFixed(2)} USD`);

                }
            } else {
                betSlip[i]['isLock'] == true;
                $(`.${i}`).closest('.coupon-card').addClass('locked');
                $(`.${i}`).closest('.CouponCard_root').addClass('locked');
            }
        }
        olddata = newdata;
    }
    // betSlip

    //event
    async function toEvent(me) {
        page = 'event';
        let sportId = me.data('id');
        let eventId = me.data('event');
        cEvent = {
            sportId,
            eventId
        };
        let data = olddata[sportId][eventId];
        await makeEventHeader(data, golbalCountries);
        await makeEventMarket(data);
        $('.sports-main-content').hide();
        $('.event-main').show();
    }

    function toLeague() {
        page = 'league';
        $('.sports-main-content').hide();
        $('.league-main').show();
    }

    function makeEventOdd(data, id, event, mk) {
        let market = mk.slice(-1),
            handicap;
        let html = `
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
            </ul>`;

        if (id == 1) {
            switch (market) {
                case '1':
                case '8':
                    html = `
                        <ul class="odds-grid grid-3">
                            <li class="odds-item">
                                <button class="match-odd" data-name="W1">
                                    <span class="odd-name">W1</span>
                                    ${makeOdds(id, event, data, mk, 'home_od')}
                                </button>
                            </li>
                            <li class="odds-item">
                                <button class="match-odd" data-name="X">
                                    <span class="odd-name">X</span>
                                    ${makeOdds(id, event, data, mk, 'draw_od')}
                                </button>
                            </li>
                            <li class="odds-item">
                                <button class="match-odd" data-name="W2">
                                    <span class="odd-name">W2</span>
                                    ${makeOdds(id, event, data, mk, 'away_od')}
                                </button>
                            </li>
                        </ul>`;
                    break;
                case '2':
                case '5':
                    handicap = data[mk]['handicap'];
                    if (handicap && handicap != '-') {
                        handicap = Number(handicap);
                    }
                    html = `
                        <ul class="odds-grid grid-3">
                            <li class="odds-item">
                                <button class="match-odd" data-name="W1 ${handicap * 1}">
                                    <span class="odd-name">W1(${handicap * 1})</span>
                                    ${makeOdds(id, event, data, mk, 'home_od')}
                                </button>
                            </li>
                            <li class="odds-item">
                                <button class="match-odd" data-name="W2 ${handicap * -1}">
                                    <span class="odd-name">W2(${handicap * -1})</span>
                                    ${makeOdds(id, event, data, mk, 'away_od')}
                                </button>
                            </li>
                        </ul>`;
                    break;
                case '3':
                case '4':
                case '6':
                case '7':
                    handicap = data[mk]['handicap'];
                    html = `
                        <ul class="odds-grid grid-3">
                            <li class="odds-item">
                                <button class="match-odd" data-name="Over ${handicap}">
                                    <span class="odd-name">Over(${handicap})</span>
                                    ${makeOdds(id, event, data, mk, 'over_od')}
                                </button>
                            </li>
                            <li class="odds-item">
                                <button class="match-odd" data-name="Under ${handicap}">
                                    <span class="odd-name">Under (${handicap})</span>
                                    ${makeOdds(id, event, data, mk, 'under_od')}
                                </button>
                            </li>
                        </ul>`;
                    break;
            }
        } else if (id == 18) {
            switch (market) {
                case '1':
                case '4':
                case '7':
                    html = `
                        <ul class="odds-grid grid-3">
                            <li class="odds-item">
                                <button class="match-odd" data-name="W1">
                                    <span class="odd-name">W1</span>
                                    ${makeOdds(id, event, data, mk, 'home_od')}
                                </button>
                            </li>
                            <li class="odds-item">
                                <button class="match-odd" data-name="W2">
                                    <span class="odd-name">W2</span>
                                    ${makeOdds(id, event, data, mk, 'away_od')}
                                </button>
                            </li>
                        </ul>`;
                    break;
                case '2':
                case '5':
                case '8':
                    handicap = data[mk]['handicap'];
                    if (handicap && handicap != '-') {
                        handicap = Number(handicap);
                    }
                    html = `
                        <ul class="odds-grid grid-3">
                            <li class="odds-item">
                                <button class="match-odd" data-name="W1 ${handicap * 1}">
                                    <span class="odd-name">W1(${handicap * 1})</span>
                                    ${makeOdds(id, event, data, mk, 'home_od')}
                                </button>
                            </li>
                            <li class="odds-item">
                                <button class="match-odd" data-name="W2 ${handicap * -1}">
                                    <span class="odd-name">W2(${handicap * -1})</span>
                                    ${makeOdds(id, event, data, mk, 'away_od')}
                                </button>
                            </li>
                        </ul>`;
                    break;
                case '3':
                case '6':
                case '9':
                    handicap = data[mk]['handicap'];
                    html = `
                        <ul class="odds-grid grid-3">
                            <li class="odds-item">
                                <button class="match-odd" data-name="Over ${handicap}">
                                    <span class="odd-name">Over(${handicap})</span>
                                    ${makeOdds(id, event, data, mk, 'over_od')}
                                </button>
                            </li>
                            <li class="odds-item">
                                <button class="match-odd" data-name="Under ${handicap}">
                                    <span class="odd-name">Under(${handicap})</span>
                                    ${makeOdds(id, event, data, mk, 'under_od')}
                                </button>
                            </li>
                        </ul>`;
                    break;
            }
        } else {
            switch (market) {
                case '1':
                    html = `
                        <ul class="odds-grid grid-3">
                            <li class="odds-item">
                                <button class="match-odd" data-name="W1">
                                    <span class="odd-name">W1</span>
                                    ${makeOdds(id, event, data, mk, 'home_od')}
                                </button>
                            </li>
                            <li class="odds-item">
                                <button class="match-odd" data-name="W2">
                                    <span class="odd-name">W2</span>
                                    ${makeOdds(id, event, data, mk, 'away_od')}
                                </button>
                            </li>
                        </ul>`;
                    break;
                case '2':
                    handicap = data[mk]['handicap'];
                    if (handicap && handicap != '-') {
                        handicap = Number(handicap);
                    }
                    html = `
                        <ul class="odds-grid grid-3">
                            <li class="odds-item">
                                <button class="match-odd" data-name="W1 ${handicap * 1}">
                                    <span class="odd-name">W1(${handicap * 1})</span>
                                    ${makeOdds(id, event, data, mk, 'home_od')}
                                </button>
                            </li>
                            <li class="odds-item">
                                <button class="match-odd" data-name="W2 ${handicap * -1}">
                                    <span class="odd-name">W2(${handicap * -1})</span>
                                    ${makeOdds(id, event, data, mk, 'away_od')}
                                </button>
                            </li>
                        </ul>`;
                    break;
                case '3':
                    handicap = data[mk]['handicap'];
                    html = `
                        <ul class="odds-grid grid-3">
                            <li class="odds-item">
                                <button class="match-odd" data-name="Over ${handicap}">
                                    <span class="odd-name">Over(${handicap})</span>
                                    ${makeOdds(id, event, data, mk, 'over_od')}
                                </button>
                            </li>
                            <li class="odds-item">
                                <button class="match-odd" data-name="Under ${handicap}">
                                    <span class="odd-name">Under(${handicap})</span>
                                    ${makeOdds(id, event, data, mk, 'under_od')}
                                </button>
                            </li>
                        </ul>`;
                    break;
            }
        }
        if (mk == '3_4') {
            html = `
                <ul class="odds-grid grid-3">
                    <li class="odds-item">
                        <button class="match-odd" data-name="W1">
                            <span class="odd-name">W1</span>
                            ${makeOdds(id, event, data, mk, 'home_od')}
                        </button>
                    </li>
                    <li class="odds-item">
                        <button class="match-odd" data-name="W2">
                            <span class="odd-name">W2</span>
                            ${makeOdds(id, event, data, mk, 'away_od')}
                        </button>
                    </li>
                </ul>`;
        }
        return html;

    }

    function makeEventHeader(data) {
        let league, home, away, scores, timer;
        if (typeof data.league == 'string') {
            league = JSON.parse(data.league);
        } else {
            league = data.league;
        }
        if (typeof data.home == 'string') {
            home = JSON.parse(data.home);
        } else {
            home = data.home;
        }
        if (typeof data.away == 'string') {
            away = JSON.parse(data.away);
        } else {
            away = data.away;
        }
        if (typeof data.scores == 'string') {
            scores = JSON.parse(data.scores);
        } else {
            scores = data.scores;
        }
        if (typeof data.timer == 'string') {
            timer = JSON.parse(data.timer);
        } else {
            timer = data.timer;
        }

        let date = getDate(data.time);
        let day = new Date(Number(data.time) * 1000).getDate() - new Date().getDate();
        let today = getDate(new Date().getTime() / 1000);
        if (data.ss) {
            switch (data.sport_id) {
                case 3:
                    $('.home_score').html(data.ss.split(',')[0] ? data.ss.split(',')[0] : 0);
                    $('.away_score').html(data.ss.split(',')[1] ? data.ss.split(',')[1] : 0);
                    break;
                default:
                    $('.home_score').html(data.ss.split('-')[0] ? data.ss.split('-')[0] : 0);
                    $('.away_score').html(data.ss.split('-')[1] ? data.ss.split('-')[0] : 0);
                    break;
            }
        } else {
            $('.home_score').html(0);
            $('.away_score').html(0);
        }

        if (scores) {
            switch (data.sport_id) {
                case 1:
                    $('.period').html(`${Object.keys(scores).length} half`);
                    break;
                default:
                    $('.period').html(`${Object.keys(scores).length} half`);
                    break;
            }
        }

        if (timer) {
            $('.timer').html(`${timer.tm} '`);
        }

        if (date.date == today.date) {
            $('.date').html('Today, ');
            $('.time').html(date.time);
        } else {
            $('.date').html(`${date.date}, ${date.week}`);
            $('.time').empty();
        }
        $('.home_name').html(home.name);
        $('.away_name').html(away.name);
        $('.league_name').html(league.name);
        $('.sport_name').html(data.sport_name);
        $('.header-icon').addClass(`icon-${data.sport_name.toLocaleLowerCase().replaceAll(' ', '-')}`);
        if (isLive == false) {
            $('.match-info-date-time').html(
                `<div class="timer-container">
                <div class="timer-container__title">Event starts in</div>
                <div class="header-timer">
                    <div class="timer__column days active">
                        <div class="timer__column__value">${day}</div>
                        <div class="timer__column__label">days</div>
                        <div class="timer__column__separator timer__column__separator_days"></div>
                        <div class="timer__column__value">${date.time}</div>
                    </div>
                </div>
                </div>`
            )
        }
    }

    function makeEventMarket(data) {
        let odds;
        if (typeof data.odds == 'string') {
            odds = JSON.parse(data.odds);
        } else {
            odds = data.odds;
        }
        $('.odds-table-row').empty();
        // <svg data-v-0cc70890="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true" role="img" class="icon icon-angle-up sm inline" icon="angle-up" inline="">
        //     <path d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z"></path>
        // </svg>
        for (let i in odds) {
            let html = `
                <div class="odds-table-column">
                    <div class="odds-type-section active">
                        <div class="trigger">
                            <span class="odd-type-name">${getMarketName(data.sport_id, i)}</span>
                        </div>
                        ${makeEventOdd(odds, data.sport_id, data.id, i)}
                    </div>
                </div>`;
            $('.odds-table-row').append(html);
        }
        $('.match-odd').click(function() {
            addSlip($(this));
        })
    }
    //event

    //search
    function initSearch(flag) {
        if (flag) {
            $('.no-search').hide();
            $('.search-panel').show();
        } else {
            $('.no-search').show();
            $('.search-panel').hide();
        }
    }

    function search(e) {
        let team = e.toLocaleLowerCase();
        if (team) {
            searchRequest(team);
        }
    }

    function searchRequest(key) {
        $('.searched_box').html(`<div class="df" style='align-items: center; justify-content: center;'>
                <svg data-v-3e7104f2="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" role="img" class="spinner icon icon-spinner sm" icon="spinner" style="font-size: 1em; color: rgb(255, 255, 255);"><path d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z"></path></svg>
            </div>`);
        $.ajax({
            url: "<?= route('frontend.sports.get_search') ?>",
            type: 'get',
            data: {
                key,
                isLive
            }
        }).done(function(res) {
            let result = JSON.parse(res);
            result = result.filter(e => e.time_status === isLive);
            let data = groupBy(result, 'league_id');
            $('.searched_box').empty();
            showSearchResult(data);
        }).fail(function(e) {
            console.log(e);
            toastr.error('server error.');
        })
    }

    function searchMatch(data) {
        let html = '';
        for (let item of data) {
            let home = JSON.parse(item.home);
            let away = JSON.parse(item.away);
            let league = JSON.parse(item.league);
            let Date = getDate(item.time);
            html += `
            <a class="searched-match sport-event" data-event="${item.id}" data-id="${item.sport_id}">
                <div class="searched-match-info">
                    <div class="searched-match-top-line">
                        <span class="searched-match-time">${Date.time}</span>
                        <span class="searched-match-date">
                            ${Date.date}, ${Date.week}
                        </span>
                    </div>
                    <div class="searched-match-middle-line">
                        <div class="match-separator"></div>
                        <div class="searched-match-teams">
                            <div class="match-team">${home.name}</div>
                            <div class="match-team">${away.name}</div>
                        </div>
                    </div>
                    <div class="match-bottom-line">
                        <i class="sports-icon icon-${item.sport_name.toLocaleLowerCase().replaceAll(' ','-')}"></i>
                        <div class="match-tournament-info">
                            ${league.name}
                        </div>
                    </div>
                </div>
            </a>
            `;
        }
        return html;
    }

    function showSearchResult(data) {
        $('.searched_box').empty();
        for (let key in data) {
            let league = JSON.parse(data[key][0].league);
            let html = `
                <div class="search-match-group">
                    <div class="searched-tournament">
                        <i class="sports-icon icon-${data[key][0].sport_name.toLocaleLowerCase().replaceAll(' ', '-')}"></i>
                        <span class="searched-league te">${league.name}</span>
                    </div>
                    ${searchMatch(data[key])}
                </div>`;
            $('.searched_box').append(html);
        }
        $('.sport-event').click(function() {
            toEvent($(this));
        })
    }
    //search

    //Bet
    function makeBet() {
        if (!Object.keys(betSlip).length) return;
        if (slipType == 'single') {
            for (let i in betSlip) {
                if (!betSlip[i].stake) {
                    toastr.error('Please input correct stake amount.');
                    return;
                }
            }
        } else {
            if (!multiSip.stake) {
                toastr.error('Please input correct stake amount.');
                return;
            }
        }
        let data = [];
        for (let i in betSlip) {
            let item = betSlip[i];
            let obj = {};
            obj.sportId = item.sport_id;
            obj.eventId = item.id;
            obj.odds = Number(item.odds[item.mk][item.odk]);
            obj.stake = Number(item.stake);
            obj.potential = Number(item.profit);
            obj.marketId = item.mk;
            let hdp = item.odds[item.mk]['handicap'] ? item.odds[item.mk]['handicap'] : '0';
            obj.handicap = hdp.split(',')[0];
            obj.oddType = item.odk.split('_')[0];
            obj.home = item.home.name;
            obj.away = item.away.name;
            obj.league = item.league.name;
            obj.sportName = item.sport_name;
            data.push(obj);
        }
        $(".base-coupon-submit").html('<svg data-v-3e7104f2="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" role="img" class="spinner icon icon-spinner sm" icon="spinner" style="font-size: 1em; color: rgb(255, 255, 255);"><path d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z"></path></svg>')
        $.ajax({
            url: "<?= route('frontend.sports.bet') ?>",
            type: 'post',
            data: {
                _token: "{{ csrf_token() }}",
                user_id: "{{ Auth::check() ? Auth::user()->id :  '' }}",
                bet: data,
                betType: slipType,
                multi: multiSip
            }
        }).done(function(res) {
            let result = res;
            if (result[0].status) {
                toastr.success(result[1].msg);
                clearAllBetSlip();
            } else {
                toastr.error(result[1].msg);
            }
            $(".base-coupon-submit").html('Make bet');
        }).fail(function(e) {
            $(".base-coupon-submit").html('Make bet');
            console.log(e);
            toastr.error('server error.');
        })
    }
    //Bet

    function headerMarket(id) {
        if (id == 1) {
            if (isMobile) {
                return `
                        <td class="odd-cell-h">1</td>
                        <td class="odd-cell-h">X</td>
                        <td class="odd-cell-h">2</td>`;
            } else if (isTablet) {
                return `
                        <td class="odd-cell-h">1</td>
                        <td class="odd-cell-h">X</td>
                        <td class="odd-cell-h">2</td>
                        <td class="odd-cell-h">HDP</td>
                        <td class="odd-cell-h">H1</td>
                        <td class="odd-cell-h">H2</td>`;
            } else {
                return `
                        <td class="odd-cell-h">1</td>
                        <td class="odd-cell-h">X</td>
                        <td class="odd-cell-h">2</td>
                        <td class="odd-cell-h">HDP</td>
                        <td class="odd-cell-h">H1</td>
                        <td class="odd-cell-h">H2</td>
                        <td class="odd-cell-h">HDP</td>
                        <td class="odd-cell-h">Over</td>
                        <td class="odd-cell-h">Under</td>`;
            }
        } else {
            if (isMobile) {
                return `
                <td class="odd-cell-h">1</td>
                <td class="odd-cell-h">2</td>`;
            } else if (isTablet) {
                return `
                <td class="odd-cell-h">1</td>
                <td class="odd-cell-h">2</td>
                <td class="odd-cell-h">HDP</td>
                <td class="odd-cell-h">H1</td>
                <td class="odd-cell-h">H2</td>`;
            } else {
                return `
                <td class="odd-cell-h">1</td>
                <td class="odd-cell-h">2</td>
                <td class="odd-cell-h">HDP</td>
                <td class="odd-cell-h">H1</td>
                <td class="odd-cell-h">H2</td>
                <td class="odd-cell-h">HDP</td>
                <td class="odd-cell-h">Over</td>
                <td class="odd-cell-h">Under</td>`;
            }
        }
    }

    function makeOdds(id, event, data, mk, od) {
        let cls = od == 'handicap' ? 'odd-attr' : 'odd-cell';
        let oddStatus = false;
        if (data[mk]) {
            let odd = '',
                status = '',
                hd = '',
                dataName = '';
            let oddMark = od.split('_')[0];
            switch (oddMark) {
                case 'home':
                    dataName = 'W1';
                    if (data[mk].handicap) {
                        hd = data[mk]['handicap'];
                        if (hd && hd != '-') {
                            hd = Number(hd);
                            dataName += ` ${hd * 1}`;
                        }
                    }
                    break;
                case 'away':
                    dataName = 'W2';
                    if (data[mk].handicap) {
                        hd = data[mk]['handicap'];
                        if (hd && hd != '-') {
                            hd = Number(hd);
                            dataName += ` ${hd * -1}`;
                        }
                    }
                    break;
                case 'draw':
                    dataName = 'X';
                    break;
                case 'over':
                    dataName = 'Over';
                    if (data[mk].handicap) {
                        hd = data[mk]['handicap'];
                        dataName += ` ${hd}`;
                    }
                    break;
                case 'under':
                    dataName = 'Under';
                    if (data[mk].handicap) {
                        hd = data[mk]['handicap'];
                        dataName += ` ${hd}`;
                    }
                    break;
            }
            if (od == 'handicap') {
                odd = data[mk][od];
            } else {
                odd = Number(data[mk][od]) ? Number(data[mk][od]) : lockSVG();
                if (Number(odd)) {
                    if (olddata[id] && olddata[id][event]) {
                        let oldOdd = 0;
                        if (olddata[id] &&
                            olddata[id][event] &&
                            olddata[id][event]['odds'] &&
                            olddata[id][event]['odds'][mk] &&
                            olddata[id][event]['odds'][mk][od]) {
                            oldOdd = olddata[id][event]['odds'][mk][od];
                        } else {
                            oldOdd = odd;
                        }

                        let num = Number(odd) - Number(oldOdd);
                        if (num > 0) status = 'up';
                        else if (num < 0) status = 'down';
                    }
                    odd = odd.toFixed(2);
                } else {
                    cls += ' disable'
                }
            }

            if (olddata[id] && olddata[id][event] && olddata[id][event]['odds'] && olddata[id][event]['odds'][mk] && olddata[id][event]['odds'][mk][od]) {
                oddStatus = olddata[id][event]['odds'][mk][`${od}_active`];
            }

            return `
                <td class="${cls}" data-name="${dataName}">
                    <div class="odd-coefficient ${Number(data[mk][od]) ? 'real-odd': ''} ${status} ${oddStatus ? 'active': ''}" data-id="${id}-${event}-${mk}-${od}">${odd}</div>
                </td>`;
        } else {
            return `<td class="${cls}"><div class="odd-coefficient">-</div></td>`;
        }
    }

    function makeMarket(id, eventId, data) {
        if (data) {
            switch (id) {
                case 1:
                    if (isMobile) {
                        return ` 
                        ${makeOdds(id, eventId, data, `${id}_1`, 'home_od')}
                        ${makeOdds(id, eventId, data, `${id}_1`, 'draw_od')}
                        ${makeOdds(id, eventId, data, `${id}_1`, 'away_od')}`;
                    } else if (isTablet) {
                        return `
                        ${makeOdds(id, eventId, data, `${id}_1`, 'home_od')}
                        ${makeOdds(id, eventId, data, `${id}_1`, 'draw_od')}
                        ${makeOdds(id, eventId, data, `${id}_1`, 'away_od')}
    
                        ${makeOdds(id, eventId, data, `${id}_2`, 'handicap')}
                        ${makeOdds(id, eventId, data, `${id}_2`, 'home_od')}
                        ${makeOdds(id, eventId, data, `${id}_2`, 'away_od')}`;

                    } else {
                        return `
                        ${makeOdds(id, eventId, data, `${id}_1`, 'home_od')}
                        ${makeOdds(id, eventId, data, `${id}_1`, 'draw_od')}
                        ${makeOdds(id, eventId, data, `${id}_1`, 'away_od')}
    
                        ${makeOdds(id, eventId, data, `${id}_2`, 'handicap')}
                        ${makeOdds(id, eventId, data, `${id}_2`, 'home_od')}
                        ${makeOdds(id, eventId, data, `${id}_2`, 'away_od')}
    
                        ${makeOdds(id, eventId, data, `${id}_3`, 'handicap')}
                        ${makeOdds(id, eventId, data, `${id}_3`, 'over_od')}
                        ${makeOdds(id, eventId, data, `${id}_3`, 'under_od')}
                        `;
                    }
                    break;
                default:
                    if (isMobile) {
                        return `
                            ${makeOdds(id, eventId, data, `${id}_1`, 'home_od')}
                            ${makeOdds(id, eventId, data, `${id}_1`, 'away_od')}`;
                    } else if (isTablet) {
                        return `
                            ${makeOdds(id, eventId, data, `${id}_1`, 'home_od')}
                            ${makeOdds(id, eventId, data, `${id}_1`, 'away_od')}

                            ${makeOdds(id, eventId, data, `${id}_2`, 'handicap')}
                            ${makeOdds(id, eventId, data, `${id}_2`, 'home_od')}
                            ${makeOdds(id, eventId, data, `${id}_2`, 'away_od')}`;

                    } else {
                        return `
                            ${makeOdds(id, eventId, data, `${id}_1`, 'home_od')}
                            ${makeOdds(id, eventId, data, `${id}_1`, 'away_od')}
        
                            ${makeOdds(id, eventId, data, `${id}_2`, 'handicap')}
                            ${makeOdds(id, eventId, data, `${id}_2`, 'home_od')}
                            ${makeOdds(id, eventId, data, `${id}_2`, 'away_od')}
        
                            ${makeOdds(id, eventId, data, `${id}_3`, 'handicap')}
                            ${makeOdds(id, eventId, data, `${id}_3`, 'over_od')}
                            ${makeOdds(id, eventId, data, `${id}_3`, 'under_od')}`;
                    }
            }
        } else {
            switch (id) {
                case 1:
                    if (isMobile) {
                        return `
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>`;
                    } else if (isTablet) {
                        return `
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-attr">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>`;
                    } else {
                        return `
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-attr">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-attr">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>`;

                    }
                    break;
                default:
                    if (isMobile) {
                        return `
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-attr">
                                <div class="odd-coefficient">-</div>
                            </td>`;
                    } else if (isTablet) {
                        return `
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-attr">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>`;

                    } else {
                        return `
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-attr">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-attr">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>
                            <td class="odd-cell">
                                <div class="odd-coefficient">-</div>
                            </td>`;
                    }
            }
        }
    }

    function showLiveData(data) {
        period = {
                1: '1st',
                2: '2nd',
                3: '3rd',
            },
            periodScore = '',
            eventScore = '',
            liveTime = '';
        switch (data.sport_id) {
            case 1:
                let timer = JSON.parse(data.timer);
                let score = JSON.parse(data.scores);
                let f = score && score['1'] ? score['1'] : {
                    home: 0,
                    away: 0
                };
                let s = score && score['2'] ? score['2'] : {
                    home: 0,
                    away: 0
                };
                periodScore = data.ss ? data.ss : '0-0';
                eventScore = `${f.home}:${f.away}-${s.home}:${s.away}`;
                liveTime = `${timer.tm}'`;
                break;
            case 13:
                let scores = data.ss.replaceAll('-', ':').replaceAll(',', '-');
                let per = scores.split('-').length > 3 ? period[scores.split('-').length] : `${scores.split('-').length}th`;

                periodScore = data.points ? data.points : '0-0';
                eventScore = scores;
                liveTime = per;
                break;
            case 12:
                let timer12 = JSON.parse(data.timer);
                let score12 = JSON.parse(data.scores);
                let scores12 = [];
                for (let key in score12) {
                    scores12.push(`${score12[key].home}:${score12[key].away}`);
                }

                periodScore = data.ss ? data.ss : '0-0';
                eventScore = scores12.join('-');
                liveTime = `${timer12.tm}'`;
                break;
            case 18:
                let timer18 = JSON.parse(data.timer);
                let score18 = JSON.parse(data.scores);
                let scores18 = [];
                for (let key in score18) {
                    scores18.push(`${score18[key].home}:${score18[key].away}`);
                }

                periodScore = data.ss ? data.ss : '0-0';
                eventScore = scores18.join('-');
                liveTime = `${timer18.tm}'`;
                break;
            default:
                break;
        }
        return `<div class="ml-auto">
                    <div class="match-statistics">
                        <p class="match-statistics-line">
                            <span class="match-score-total">${periodScore}</span>
                            <span class="match-score-periods">(${eventScore})</span>
                        </p>
                        <p class="match-statistics-line">
                        ${
                            liveTime ? 
                            `<svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" aria-hidden="true" role="img" class="match-time-passed-icon icon icon-clock sm" icon="clock">
                                <path fill-rule="evenodd" d="M5.5 0a5.5 5.5 0 110 11 5.5 5.5 0 010-11zm0 2.139a.33.33 0 00-.329.305l-.25 3.255a.5.5 0 00.367.52l2.667.728a.233.233 0 00.295-.225v-.015a.5.5 0 00-.252-.434L6.111 5.194l-.275-2.751a.338.338 0 00-.336-.304z"></path>
                            </svg>
                            ` : ''
                        }
                            <span class="match-time-passed">${liveTime}</span>
                        </p>
                    </div>
                </div>`;
    }

    function makeLeagueEvent(data) {
        let html = '';
        for (let item of data) {
            let home = JSON.parse(item.home);
            let away = JSON.parse(item.away);
            let odds = JSON.parse(item.odds);
            let Date = getDate(item.time)
            // <a href="event/${item.id}" class="match-info">
            html += `
                <tr class="match-row">
                    <td>
                        <a data-event="${item.id}" data-id="${item.sport_id}" class="match-info sport-event">
                            <div class="favorites-icon">
                                <svg data-v-0959a1f9="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" aria-hidden="true" role="img" class="icon-star icon icon-star xl" icon="star" size="xl" data-v-d89e8830="">
                                    <path d="M7.5 11.25l-3.512 1.846a.5.5 0 01-.725-.527l.67-3.91-2.84-2.77a.5.5 0 01.277-.852l3.926-.57L7.052.908a.5.5 0 01.896 0l1.756 3.558 3.926.57a.5.5 0 01.277.854l-2.84 2.769.67 3.91a.5.5 0 01-.725.527L7.5 11.25z"></path>
                                </svg>
                            </div>
                            <div class="match-start">
                                <div class="match-start-date">${Date.date}</div>
                                <div class="match-start-time">${Date.time}</div>
                            </div>
                            <div class="match-separator"></div>
                            <div class="match-teams-container">
                                <div class="match-teams-block">
                                    <div class="match-teams">
                                        <div class="team">
                                            <p class="team-name">
                                                ${home.name}
                                            </p>
                                        </div>
                                        <div class="team">
                                            <p class="team-name">
                                                ${away.name}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ${isLive ? showLiveData(item): ''}
                        </a>
                    </td>
                    ${makeMarket(item.sport_id, item.id, odds)}
                </tr>`;
        }
        return html;
    }

    async function displayLeague(data) {
        $('.tournament-list').empty();
        for (let k in data) {
            let league = JSON.parse(data[k][0].league)
            let html = `
            <li class="tournament-item">
                <table class="tournament-table">
                    <thead class="tournament-table-header">
                        <tr class="tournament-table-row">
                            <td class="tournament-cell">
                                <div class="tournament-cell__inner">
                                    <i class="sports-icon icon-${data[k][0].sport_name.toLocaleLowerCase().replaceAll(' ', '-')}"></i>
                                    <p class="tournament-name">
                                        <span>${league.name}</span>
                                    </p>
                                </div>
                            </td>
                            ${await headerMarket(data[k][0].sport_id)}
                        </tr>
                    </thead>
                    <tbody class="tournament-table-body">
                        ${await makeLeagueEvent(data[k])}
                    </tbody>
                </table>
            </li>`;
            $('.tournament-list').append(html);
        }
        $('.odd-cell').click(function() {
            addSlip($(this));
        })
        $('.sport-event').click(function() {
            toEvent($(this));
        })
    }

    function getInitLeague() {
        $.ajax({
            url: "<?= route('frontend.sports.get_init_league') ?>",
            type: 'get',
            data: {
                sport_id: currentSportId,
                league_id: ''
            }
        }).done(async function(res) {
            let result = JSON.parse(res);
            newdata = groupById(result, 'sport_id');
            if (currentCountryId) {
                result = result.filter(e => JSON.parse(e.league).cc == currentCountryId);
            }
            if (currentLeagueId) {
                result = result.filter(e => e.league_id == currentLeagueId);
            }
            let data = groupBy(result, 'league_id');
            await displayLeague(data);
            await slipOddUpdate();
        }).fail(function(e) {
            console.log(e);
            toastr.error('server error.');
        })
    }

    function getEventData() {
        let id = location.pathname.split('/')[3];
        $.ajax({
            url: "<?= route('frontend.sports.get_event') ?>",
            type: 'get',
            data: {
                id
            }
        }).done(async function(res) {
            let result = JSON.parse(res);
            data = result[0][0];
            country = result[1];
            await makeEventHeader(data, country);
            await makeEventMarket(data);
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
                await slipOddUpdate();
            }).fail(function(e) {
                console.log(e);
                toastr.error('server error.');
            })
        }).fail(function(e) {
            console.log(e);
            toastr.error('server error.');
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
            if (currentSportId) {
                result = result.filter(e => e.sport_id == currentSportId);
            }
            if (currentCountryId) {
                result = result.filter(e => JSON.parse(e.league).cc == currentCountryId);
            }
            if (currentLeagueId) {
                result = result.filter(e => e.league_id == currentLeagueId);
            }
            let data = groupBy(result, 'league_id');
            if (location.pathname.split('/')[2] == 'live' && page == 'league') {
                await displayLeague(data);
            } else if (page == 'event') {
                let eventNewData = {};
                if (newdata[cEvent.sportId] && newdata[cEvent.sportId][cEvent.eventId]) {
                    let eventNewData = newdata[cEvent.sportId][cEvent.eventId];
                    await makeEventHeader(eventNewData, golbalCountries);
                    await makeEventMarket(eventNewData);
                } else {
                    $('.sports-main-content').hide();
                    $('.end-text').show();
                }
            }
            await slipOddUpdate();
        }).fail(function(e) {
            console.log(e);
            toastr.error('server error.');
        })
    }

    // real time start 
    function liveRealTime() {
        setInterval(getInitLive, 5000);
    }

    function eventRealtime() {
        setInterval(getEventData, 5000);
    }

    function prematchRealTime() {
        setInterval(getInitLeague, 30000);
    }
    // real time start 

    function init() {
        if (location.pathname.split('/')[2] == 'prematch') {
            isLive = 0;
            getInitLeague();
            prematchRealTime();
        } else if (location.pathname.split('/')[2] == 'live') {
            isLive = 1;
            getInitLive();
            liveRealTime();
        } else if (location.pathname.split('/')[2] == 'event') {
            isLive = 1;
            getEventData();
            eventRealtime();
        }
        getSports();
        showBetSlip();

        $('.coupon-tab').click(function() {
            setSlipType($(this));
        })

        $('.clear-all').click(function() {
            clearAllBetSlip();
        })

        $('.base-coupon-submit').click(function() {
            makeBet();
        })
    }

    $(document).ready(function() {
        init();
    })
</script>