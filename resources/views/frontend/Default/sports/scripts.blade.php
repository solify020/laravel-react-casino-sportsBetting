<script type="text/javascript">
    let olddata = {},
        newdata = {},
        betSlip = {},
        tournament = {},
        isLive = false,
        currentSportId = "",
        currentLeagueId = "";

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
            (result[currentValue[key]] = result[currentValue[key]] || {})[currentValue.id] = JSON.parse(currentValue.odds);
            return result;
        }, {});
    };

    function setTournament(me) {
        let id = me.data('id');
        currentLeagueId = id;
        if (isLive) {
            getInitLive();
        } else {
            getInitLeague();
        }
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
            for (let item of tournament[id][c]) {
                let html = `
                <div class="list-item">
                    <div class="tournament-content list-item-content">
                        <a class="tournament-id" data-id="${item.id}" data-nsfw-filter-status="swf">
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
            currentLeagueId = "";
        } else {
            $('.sport-title').removeClass('active');
            me.addClass('active');
            currentSportId = id;
            currentLeagueId = "";
        }

        if (isLive) {
            getInitLive();
        } else {
            getInitLeague();
        }

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
            })
        }).fail(function(e) {
            console.log(e);
            toastr.error('server error.');
        })
    }

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
            time
        }
    }

    function addSlip(me) {
        let data = me.find('.real-odd').data('id');
        let k = data.split('-');
        if (me.find('.real-odd').hasClass('active')) {
            olddata[k[0]][k[1]][k[2]][`${k[3]}_active`] = false;
            me.find('.real-odd').removeClass('active');
            delete betSlip[data];
        } else {
            olddata[k[0]][k[1]][k[2]][`${k[3]}_active`] = true;
            me.find('.real-odd').addClass('active');
            betSlip[data] = {
                ...olddata[k[0]][k[1]],
                // odds: JSON.parse(olddata[k[0]][k[1]].odds),
                // odds: JSON.parse(olddata[k[0]][k[1]].home),
                // odds: JSON.parse(olddata[k[0]][k[1]].away),
                // odds: JSON.parse(olddata[k[0]][k[1]].league),
                mk: k[2],
                odk: k[3]
            };
        }
        console.log(betSlip)
    }

    function headerMarket(id) {
        if (id == 1) {
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

    function makeOdds(id, event, data, mk, od) {
        let cls = od == 'handicap' ? 'odd-attr' : 'odd-cell';
        let oddStatus = false;
        if (data[mk]) {
            let odd = '',
                status = '';
            if (od == 'handicap') {
                odd = data[mk][od];
            } else {
                odd = Number(data[mk][od]) ? Number(data[mk][od]).toFixed(2) : '<svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" aria-hidden="true" role="img" class="odd-lock icon icon-lock md" icon="lock" style="margin:auto; color: #fff !important;"><path d="M26.76 16.08H9.62a1.86 1.86 0 00-1.85 1.85v7.37a6.43 6.43 0 006.41 6.42H22a6.3 6.3 0 006.28-6.28v-7.86a1.5 1.5 0 00-1.52-1.5zm-8.45 8.78v1.74a.57.57 0 01-.57.54.58.58 0 01-.58-.54v-1.75a2.42 2.42 0 01-1.87-2.39 2.46 2.46 0 114.92 0 2.42 2.42 0 01-1.9 2.39zM18.06 4.23h-.12A6.75 6.75 0 0011.22 11v4h1.13v-4.12A5.46 5.46 0 0114 7a5.56 5.56 0 013.93-1.61H18A5.62 5.62 0 0123.52 11v3.89h1.13v-4a6.72 6.72 0 00-6.59-6.66z"></path></svg>'
                if (!Number(odd)) {
                    cls += ' disable'
                }
            }

            if (olddata[id] && olddata[id][event] && olddata[id][event][mk] && olddata[id][event][mk][od]) {
                let oldOdd = olddata[id][event][mk][od];
                oddStatus = olddata[id][event][mk][`${od}_active`];
                if (oddStatus) {
                    newdata[id][event][mk][`${od}_active`] = true;
                }
                if (Number(oldOdd) && Number(data[mk][od])) {
                    let num = Number(data[mk][od]) - Number(oldOdd);
                    if (num > 0) status = 'up';
                    else if (num < 0) status = 'down';
                }
            }

            return `
                <td class="${cls}">
                    <div class="odd-coefficient real-odd ${status} ${oddStatus ? 'active': ''}" data-id="${id}-${event}-${mk}-${od}">${odd}</div>
                </td>`;
        } else {
            return `<td class="${cls}"><div class="odd-coefficient">-</div></td>`;
        }
    }

    function makeMarket(id, eventId, data) {
        if (data) {
            switch (id) {
                case 1:
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
                default:
                    return `
                    ${makeOdds(id, eventId, data, `${id}_1`, 'home_od')}
                    ${makeOdds(id, eventId, data, `${id}_1`, 'away_od')}

                    ${makeOdds(id, eventId, data, `${id}_2`, 'handicap')}
                    ${makeOdds(id, eventId, data, `${id}_2`, 'home_od')}
                    ${makeOdds(id, eventId, data, `${id}_2`, 'away_od')}

                    ${makeOdds(id, eventId, data, `${id}_3`, 'handicap')}
                    ${makeOdds(id, eventId, data, `${id}_3`, 'over_od')}
                    ${makeOdds(id, eventId, data, `${id}_3`, 'under_od')}
                    `;
            }
        } else {
            switch (id) {
                case 1:
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
                default:
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

    function showLiveData(data) {
        let html = '';
        let period = {
            1: '1st',
            2: '2nd',
            3: '3rd',
        }
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
                html = `
                    <div class="ml-auto">
                        <div class="match-statistics">
                            <p class="match-statistics-line">
                                <span class="match-score-total">${data.ss ? data.ss : '0-0'}</span>
                                <span class="match-score-periods">(${f.home}:${f.away}-${s.home}:${s.away})</span>
                            </p>
                            <p class="match-statistics-line">
                                <svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" aria-hidden="true" role="img" class="match-time-passed-icon icon icon-clock sm" icon="clock">
                                    <path fill-rule="evenodd" d="M5.5 0a5.5 5.5 0 110 11 5.5 5.5 0 010-11zm0 2.139a.33.33 0 00-.329.305l-.25 3.255a.5.5 0 00.367.52l2.667.728a.233.233 0 00.295-.225v-.015a.5.5 0 00-.252-.434L6.111 5.194l-.275-2.751a.338.338 0 00-.336-.304z"></path>
                                </svg>
                                <span class="match-time-passed">${timer.tm}'</span>
                            </p>
                        </div>
                    </div>`;
                break;
            case 13:
                let scores = data.ss.replaceAll('-', ':').replaceAll(',', '-');
                let per = scores.split('-').length > 3 ? period[scores.split('-').length] : `${scores.split('-').length}th`;
                html = `
                    <div class="ml-auto">
                        <div class="match-statistics">
                            <p class="match-statistics-line">
                                <span class="match-score-total">${data.points}</span>
                                <span class="match-score-periods">(${scores})</span>
                            </p>
                            <p class="match-statistics-line">
                                <svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" aria-hidden="true" role="img" class="match-time-passed-icon icon icon-clock sm" icon="clock">
                                    <path fill-rule="evenodd" d="M5.5 0a5.5 5.5 0 110 11 5.5 5.5 0 010-11zm0 2.139a.33.33 0 00-.329.305l-.25 3.255a.5.5 0 00.367.52l2.667.728a.233.233 0 00.295-.225v-.015a.5.5 0 00-.252-.434L6.111 5.194l-.275-2.751a.338.338 0 00-.336-.304z"></path>
                                </svg>
                                <span class="match-time-passed">${per}</span>
                            </p>
                        </div>
                    </div>`;
                break;
            case 12:
                let timer12 = JSON.parse(data.timer);
                let score12 = JSON.parse(data.scores);
                let scores12 = [];
                for (let key in score12) {
                    scores12.push(`${score12[key].home}:${score12[key].away}`);
                }
                html = `
                    <div class="ml-auto">
                        <div class="match-statistics">
                            <p class="match-statistics-line">
                                <span class="match-score-total">${data.ss}</span>
                                <span class="match-score-periods">(${scores12.join('-')})</span>
                            </p>
                            <p class="match-statistics-line">
                                <svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" aria-hidden="true" role="img" class="match-time-passed-icon icon icon-clock sm" icon="clock">
                                    <path fill-rule="evenodd" d="M5.5 0a5.5 5.5 0 110 11 5.5 5.5 0 010-11zm0 2.139a.33.33 0 00-.329.305l-.25 3.255a.5.5 0 00.367.52l2.667.728a.233.233 0 00.295-.225v-.015a.5.5 0 00-.252-.434L6.111 5.194l-.275-2.751a.338.338 0 00-.336-.304z"></path>
                                </svg>
                                <span class="match-time-passed">${timer12.tm}'</span>
                            </p>
                        </div>
                    </div>`;
                break;
            default:
                html = `
                        <div class="ml-auto">
                            <div class="match-statistics">
                                <p class="match-statistics-line">
                                    <span class="match-score-total">0-0</span>
                                    <span class="match-score-periods">(0:0-0:0)</span>
                                </p>
                                <p class="match-statistics-line">
                                    <svg data-v-1a57c218="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" aria-hidden="true" role="img" class="match-time-passed-icon icon icon-clock sm" icon="clock">
                                        <path fill-rule="evenodd" d="M5.5 0a5.5 5.5 0 110 11 5.5 5.5 0 010-11zm0 2.139a.33.33 0 00-.329.305l-.25 3.255a.5.5 0 00.367.52l2.667.728a.233.233 0 00.295-.225v-.015a.5.5 0 00-.252-.434L6.111 5.194l-.275-2.751a.338.338 0 00-.336-.304z"></path>
                                    </svg>
                                    <span class="match-time-passed">00'</span>
                                </p>
                            </div>
                        </div>`;
                break;
        }
        return html;
    }

    function makeLeagueEvent(data) {
        let html = '';
        for (let item of data) {
            let home = JSON.parse(item.home);
            let away = JSON.parse(item.away);
            let odds = JSON.parse(item.odds);
            let Date = getDate(item.time)
            html += `
                <tr class="match-row">
                    <td>
                        <a href="#" class="match-info">
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
        olddata = newdata;
    }

    function getInitLeague() {
        $.ajax({
            url: "<?= route('frontend.sports.get_init_league') ?>",
            type: 'get',
            data: {
                sport_id: currentSportId,
                league_id: currentLeagueId
            }
        }).done(function(res) {
            let result = JSON.parse(res);
            let data = groupBy(result, 'league_id');
            displayLeague(data);
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
                sport_id: currentSportId,
                league_id: currentLeagueId
            }
        }).done(async function(res) {
            let result = JSON.parse(res);
            let data = groupBy(result, 'league_id');
            newdata = groupById(result, 'sport_id');
            console.log(data, newdata)
            await displayLeague(data);
        }).fail(function(e) {
            console.log(e);
            toastr.error('server error.');
        })
    }

    function startTime() {
        setInterval(getInitLive, 5000);
    }

    function init() {
        if (location.pathname.split('/')[2] == 'prematch') {
            isLive = 0;
            getInitLeague();
        } else if (location.pathname.split('/')[2] == 'live') {
            isLive = 1;
            getInitLive();
            startTime();
        }
        getSports();
    }

    $(document).ready(function() {
        init();
    })
</script>