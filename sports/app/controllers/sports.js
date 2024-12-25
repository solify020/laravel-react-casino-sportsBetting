import moment from "moment";
import axios from "axios"; // Import axios
import { CronJob } from "cron";
import { Op } from '@sequelize/core';
import sequelize from '../sequelize/index.js';
import config from "../config/index.js";
import countries from "../config/countries.js";

const token = config.TOKEN;
const DB = sequelize.models;

export const start = async() => {
    getLiveStart();
    getLiveOddStart();
    getPreStart();
    gameEnds();
}

// Get Live Match Start
export const getLiveStart = () => {
    try {
        getLiveData();
        const job1 = new CronJob(config.API.LIVE_TIME, () => {
            getLiveData();
            console.log('Live ', moment().format("YYYY-MM-DD hh:mm:ss"));
        });
        job1.start();
    } catch (error) {
        console.log(`Live server error:`, error);
    }
};

const getLiveData = async() => {
    const sportslist = config.SPORTS;
    for (const k in sportslist) {
        getLiveEvents(k); // Ensure this is awaited
    }
};

const getLiveEvents = async(sport_id) => {
    const options = {
        method: "GET",
        url: config.API.LIVE_ENDPOINT,
        params: { token, sport_id }, // Use params instead of qs
        headers: { "Content-Type": "application/json" }
    };

    try {
        const { data } = await axios(options); // Use axios here
        const live = [];

        if (!data || !data.success) return console.log(data);

        let results = data.results;
        for (const item of results) {
            live.push(String(item.Id).split(':').join('0'));
            saveEvent(item);
        }
        saveLiveIds(sport_id, live);
    } catch (error) {
        console.log(error);
    }
};

// Get Pre Match Start
export const getPreStart = () => {
    try {
        getPreEvents();
        const job2 = new CronJob(config.API.PRE_TIME, () => {
            getPreEvents();
            console.log('Upcoming ', moment().format("YYYY-MM-DD hh:mm:ss"));
        });
        job2.start();
    } catch (error) {
        console.log(`getPreRealTime server error:`, error);
    }
};

const getPreEvents = async() => {
    const sportslist = config.SPORTS;
    for (const k in sportslist) {
        console.log('SportId', k);
        console.log("Started today")
        getUpcomingPage(k, moment().add(0, "days").format("YYYYMMDD"));
        console.log("Started 1 day")
        getUpcomingPage(k, moment().add(1, "days").format("YYYYMMDD"));
        console.log("Started 2 day")
        getUpcomingPage(k, moment().add(2, "days").format("YYYYMMDD"));
        console.log("Started 3 day")
        getUpcomingPage(k, moment().add(3, "days").format("YYYYMMDD"));
        console.log("Started 4 day")
            // Optional: Uncomment for more days
        getUpcomingPage(k, moment().add(4, "days").format("YYYYMMDD"));
        console.log("Started 5 day")
        getUpcomingPage(k, moment().add(5, "days").format("YYYYMMDD"));
        console.log("Started 6 day")
        getUpcomingPage(k, moment().add(6, "days").format("YYYYMMDD"));
        console.log("Started 7 day")
        getUpcomingPage(k, moment().add(7, "days").format("YYYYMMDD"));
    }
};

const getUpcomingPage = async(sport_id, day) => {
    await new Promise(resolve => setTimeout(resolve, 8500)); // Wait for 8.5 seconds

    const options = {
        method: "GET",
        url: config.API.PRE_ENDPOINT,
        params: { token, sport_id, day, page: 1 }, // Use params instead of qs
        headers: { "Content-Type": "application/json" }
    };

    try {
        const { data } = await axios(options); // Use axios here

        if (!data || !data.pager) return console.log(data);

        const pager = data.pager;
        const page = Math.ceil(pager.total / pager.per_page);

        for (let i = 0; i < page; i++) {
            await getUpcomingEvents(sport_id, i + 1, day);
        }
    } catch (error) {
        console.error(error);
    }
};

const getUpcomingEvents = async(sport_id, page, day) => {
    const options = {
        method: "GET",
        url: config.API.PRE_ENDPOINT,
        headers: { "Content-Type": "application/json" },
        params: { token, sport_id, page, day }
    };

    try {
        const { data } = await axios(options); // Use axios here

        if (data && data.success && data.results.length) {
            const results = data.results;
            for (let result of results) {
                const event_id = result.Id
                const options1 = {
                    method: "GET",
                    url: config.API.EVENT_ENDPOINT,
                    headers: { "Content-Type": "application/json" },
                    params: { token, event_id }
                }
                const res = await axios(options1);
                const market = res.data.results[0].optionMarkets;
                result.optionMarkets = market;
                console.log("SportId is ", res.data.results[0].SportId)
                if (res.data.results[0].SportId == 7) console.log(result)

                saveEvent(result);

            }
        }
    } catch (error) {
        console.error(error);
    }
};

//GET Live Odd Start 
export const getLiveOddStart = () => {
    try {
        getLiveOdd();
        const job1 = new CronJob(config.API.LIVE_TIME, () => {
            getLiveOdd();
            console.log('Live Odd: ', moment().format("YYYY-MM-DD hh:mm:ss"));
        });
        job1.start();
    } catch (error) {
        console.log(`getLiveOddStart server error`, error);
    }
};

// const getLiveOdd = async() => {
//     const liveMatches = await DB.w_sports.findAll({
//         where: {
//             isPreMatch: false,
//             period: {
//                 [Op.ne]: 'Finished'
//             }
//         }
//     });
//     const matchIds = liveMatches.map((e) => e.Id);
//     console.log(matchIds)
//     const id_count = 10;
//     let pages = Math.ceil(matchIds.length / id_count);
//     let sendEventIds = [];

//     for (let i = 0; i < pages; i++) {
//         let matchId = [];
//         if (i === 0) {
//             matchId = matchIds.slice(0, i + 1 * id_count);
//         } else {
//             matchId = matchIds.slice(i * id_count, (i + 1) * id_count);
//         }
//         sendEventIds.push(matchId.join(","));
//     }

//     for (let i in sendEventIds) {
//          getOdds(sendEventIds[i]);
//     }
// };

const getLiveOdd = async() => {
    const liveMatches = await DB.w_sports.findAll({
        where: {
            isPreMatch: false,
            period: {
                [Op.ne]: 'Finished'
            }
        }
    });
    const matchIds = liveMatches.map((e) => e.Id);
    const id_count = 10; // Number of matches to send at once

    // Send all ids in batches
    for (let i = 0; i < matchIds.length; i += id_count) {
        const matchIdGroup = matchIds.slice(i, i + id_count).join(",");
        await getOdds(matchIdGroup);
    }
};

//GET Odds
const getOdds = async(event_id) => {
    return new Promise(async(resolve, reject) => {
        if (event_id == 0) return resolve("error");
        await new Promise(resolve => setTimeout(resolve, 20));

        const options = {
            method: "GET",
            url: config.API.EVENT_ENDPOINT,
            headers: { "Content-Type": "application/json" },
            params: { event_id, token }
        };

        try {
            const { data } = await axios(options); // Use axios here
            if (data && data.success && data.results) {
                let results = data.results;
                for (let result of results) {
                    result.Id = String(result.Id).split(':').join('0');
                    let obj = {};
                    if (result.Scoreboard && result.Scoreboard.period) {
                        if (result.Scoreboard.period == 'Finished') {
                            await deleteEvent(result.Id);
                            continue;
                        } else {
                            obj = { period: result.Scoreboard.period }
                        }
                    }
                    obj.cc = countries[result.RegionName] ? countries[result.RegionName] : result.RegionName;

                    let Markets = result.Markets && result.Markets.length ? result.Markets : result.optionMarkets;
                    Markets = await filterMarket(Markets, result.SportId);
                    console.log('Saving Markets', Markets);
                    await DB.w_sports.update({...result, Markets, ...obj }, {
                        where: {
                            Id: result.Id,
                            period: {
                                [Op.ne]: 'Finished'
                            }
                        }
                    });
                }
            }
        } catch (error) {
            console.log(error);
        }
    });
};



// Other functions like saveEvent, saveLiveIds, deleteEvent, etc. go here
const saveEvent = async(result) => {
    try {
        const date = moment().add(7, "days").valueOf();
        const time = new Date(result.Date).valueOf();
        if (time < date) {
            result.Id = String(result.Id).split(':').join('0');
            const exist = await DB.w_sports.findAll({ where: { Id: result.Id } });
            let obj = {};

            if (result.Scoreboard && result.Scoreboard.period) {
                if (result.Scoreboard.period == 'Finished') {
                    console.log(result.Scoreboard.period, result.Id)
                    return await DB.w_sports.update({ period: 'Finished' }, { where: { Id: result.Id } });
                } else {
                    obj = { period: result.Scoreboard.period }
                }
            }

            obj.cc = countries[result.RegionName] ? countries[result.RegionName] : result.RegionName;
            let vMkarket = [],
                vOption = [];
            if (result.Markets && result.Markets.length) {
                vMkarket = result.Markets;
            }
            if (result.optionMarkets && result.optionMarkets.length) {
                vOption = result.optionMarkets;
            }
            let Markets = vMkarket.length ? vMkarket : vOption;
            Markets = await filterMarket(Markets, result.SportId);

            if (exist.length) {
                await DB.w_sports.update({...result, Markets, ...obj }, { where: { Id: result.Id } });
            } else {
                const options = {
                    method: "GET",
                    url: config.API.RESULT_ENDPOINT,
                    headers: { "Content-Type": "application/json" },
                    params: { token, event_id: result.Id }
                };

                try {
                    const { data } = await axios(options); // Use axios here
                    if (data && data.success && data.results.length) {
                        const results = data.results;
                        if (results[0] && results[0].home && results[0].away) {
                            obj.HomeImgId = results[0].home.image_id
                            obj.AwayImgId = results[0].away.image_id
                        }
                    }
                } catch (error) {
                    console.log(error)
                }
                console.log("Markets!!!!!!!", Markets)
                await DB.w_sports.create({...result, Markets, ...obj });
            }
        }
    } catch (error) {
        console.log(error.message, 'save event error');
    }
}

const saveLiveIds = async(SportId, liveIdParam) => {
    try {
        let liveIds = liveIdParam.join(',');
        const exist = await DB.w_sports_lives.findAll({ where: { SportId } });
        if (exist.length) {
            await DB.w_sports_lives.update({ liveIds }, { where: { SportId } });
        } else {
            await DB.w_sports_lives.create({ SportId, liveIds });
        }
        await DB.w_sports.update({ period: 'Finished' }, {
            where: {
                Id: {
                    [Op.notIn]: liveIdParam
                },
                isPreMatch: false,
                SportId
            }
        });
    } catch (error) {
        console.log(error.message, 'save live ids error');
    }
}

const deleteEvent = async(Id) => {
    // const remove = await DB.w_sports.destroy({ where: { Id } });
    await DB.w_sports.update({ period: 'Finished' }, { where: { Id } });
    console.log(Id, 'remove status');
}

const gameEnds = () => {
    try {
        console.log("server on: ends1");
        getGameEnd();
        const job1 = new CronJob(config.API.END_TIME, () => {
            getGameEnd();
            console.log('end: ', moment().format("YYYY-MM-DD hh:mm:ss"));
        });
        job1.start();
    } catch (error) {
        console.log(`ends1 server error`, error);
    }
};

const getGameEnd = async() => {
    const sportsmatchs = await DB.w_sports.findAll({ attributes: ['Id'], where: { period: "Finished" } });
    const matchIds = sportsmatchs.map((e) => e.dataValues.Id);
    const id_count = 10;
    let pages = Math.ceil(matchIds.length / id_count);
    let sendEventIds = [];
    for (let i = 0; i < pages; i++) {
        let matchId = [];
        if (i === 0) {
            matchId = matchIds.slice(0, i + 1 * id_count);
        } else {
            matchId = matchIds.slice(i * id_count, (i + 1) * id_count);
        }
        sendEventIds.push(matchId.join(","));
    }
    console.log("GetEndedEvents!");

    for (let i in sendEventIds) {
        await getEndedEvents(sendEventIds[i]);
    }
};

export const getEndedEvents = async(event_id) => {
    const options = {
        method: "GET",
        url: config.API.RESULT_ENDPOINT,
        headers: { "Content-Type": "application/json" },
        params: { token, event_id }
    };

    try {
        const { data } = await axios(options); // Use axios here
        if (data && data.success && data.results.length) {
            const results = data.results;
            for (const i in results) {
                console.log("UpdateEndedEvents!");

                await updateEndedEvents(results[i]);
            }
        }
    } catch (error) {
        console.log(error);
    }
};
const updateEndedEvents = async(result) => {
    return new Promise(async(resolve, reject) => {
        if (!result || result.success == 0) return resolve("error");
        await new Promise(resolve => setTimeout(resolve, 20));
        try {
            await DB.w_sports.update({ period: 'Finished' }, { where: { Id: result.bwin_id } });
            const bets = await DB.w_sports_bet.findAll({ where: { 'eventId': result.bwin_id, status: 'BET' } });
            if (bets.length) {
                for (let item of bets) {
                    await makeBetResult(item, result);
                }
            }
            resolve("success");
        } catch (error) {
            console.log(`updateEndedEvents error`, error);
            resolve("error");
        }
    });
};

// Others Function
export const filterMarket = (markets, SportId) => {
    let keys = config.filterList[SportId] ? config.filterList[SportId] : [];
    if (keys.length) {
        let filtered = [];
        for (let i = 0; i < markets.length; i++) {
            for (let j = 0; j < keys.length; j++) {
                if (keys[j].pure) {
                    if (markets[i].name.value == keys[j].value) {
                        filtered.push(markets[i]);
                        break;
                    }
                } else if (keys[j].startsWith) {
                    if (markets[i].name.value.startsWith(keys[j].startsWith)) {
                        if (keys[j].has) {
                            if (markets[i].name.value.indexOf(keys[j].has) != -1) {
                                filtered.push(markets[i]);
                            }
                        } else {
                            filtered.push(markets[i]);
                        }
                        break;
                    }
                }
            }
        }
        return filtered;
    }
    return markets;
}

export const filterOdds = async(data) => {
    return new Promise(async(resolve, reject) => {
        let odds = {};
        for (const i in data) {
            if (data[i] && data[i].length) {
                odds[i] = data[i].sort((a, b) => Number(b.add_time) - Number(a.add_time))[0];
            }
        }
        resolve(odds);
    });
};

const filterLiveOdds = async(odds, oldOdds) => {
    return new Promise(async(resolve, reject) => {
        if (!odds) {
            resolve({});
        }
        for (const i in odds) {
            if (!oldOdds) {
                odds[i].notUpdate = 0;
            } else {
                try {
                    let notUpdate = oldOdds[i] ? .notUpdate ? oldOdds[i].notUpdate : 0;
                    if (odds[i] ? .time_str && odds[i].time_str != oldOdds[i] ? .time_str) {
                        notUpdate = 0;
                    } else if (odds[i] ? .add_time && odds[i].add_time != oldOdds[i] ? .add_time) {
                        notUpdate = 0;
                    } else {
                        notUpdate++;
                    }
                    odds[i].notUpdate = notUpdate;
                } catch (error) {
                    odds[i].notUpdate = 0;
                }
            }
        }
        resolve(odds);
    });
};

//Bet Settlement
// Match Winner 2-Way
const get1X2 = ({ h_score, a_score, oddType }) => {
    if (h_score === a_score && oddType === "X") {
        return "WIN";
    } else if (h_score > a_score && oddType === "1") {
        return "WIN";
    } else if (h_score < a_score && oddType === "2") {
        return "WIN";
    } else {
        return "LOST";
    }
};

// DoubleChance
const getDoubleChance = ({ h_score, a_score, oddType }) => {
    oddType = oddType.split(',');
    if (oddType[0] == '1' && oddType[1] == 'X') {
        if (h_score > a_score || h_score == a_score) {
            return "WIN";
        } else {
            return "LOST";
        }
    } else if (oddType[0] == 'X' && oddType[1] == '2') {
        if (h_score == a_score || h_score < a_score) {
            return "WIN";
        } else {
            return "LOST";
        }
    } else {
        if (h_score !== a_score) {
            return "WIN";
        } else {
            return "LOST";
        }
    }
}

// Draw No Bet (Cricket)
const getDrawNoBet = ({ h_score, a_score, oddType }) => {
    if (h_score === a_score) {
        return "REFUND";
    } else if (h_score > a_score && oddType == "1") {
        return "WIN";
    } else if (h_score < a_score && oddType == "2") {
        return "WIN";
    } else {
        return "LOST";
    }
};

// Asian Handicap
const getAsianHandicap = ({ h_score, a_score, oddType, handicap }) => {
    const isFavorite = Number(handicap) > 0 ? true : false;
    const _handicap = Math.abs(handicap);
    let d_score = Math.floor(_handicap);
    let handicap_od = d_score < 1 ? _handicap : _handicap % d_score;
    if (oddType === "home") {
        handicap_od = isFavorite ? handicap_od : handicap_od * -1;
        h_score = h_score + (isFavorite ? d_score : d_score * -1);
    } else if (oddType === "away") {
        let temp = h_score;
        handicap_od = isFavorite ? handicap_od * -1 : handicap_od;
        h_score = a_score - (isFavorite ? d_score : d_score * -1);
        a_score = temp;
    }
    if (handicap_od === 0.25) {
        if (h_score > a_score) {
            return "WIN";
        } else if (h_score === a_score) {
            return "HALF_WIN";
        } else {
            return "LOST";
        }
    } else if (handicap_od === 0.5) {
        if (h_score > a_score) {
            return "WIN";
        } else if (h_score === a_score) {
            return "WIN";
        } else {
            return "LOST";
        }
    } else if (handicap_od === 0.75) {
        if (h_score > a_score) {
            return "WIN";
        } else if (h_score === a_score) {
            return "WIN";
        } else if (h_score + 1 === a_score) {
            return "HALF_LOST";
        } else {
            return "LOST";
        }
    } else if (handicap_od === -0.25) {
        if (h_score > a_score) {
            return "WIN";
        } else if (h_score === a_score) {
            return "HALF_LOST";
        } else {
            return "LOST";
        }
    } else if (handicap_od === -0.5) {
        if (h_score > a_score) {
            return "WIN";
        } else {
            return "LOST";
        }
    } else if (handicap_od === -0.75) {
        if (h_score > a_score + 1) {
            return "WIN";
        } else if (h_score === a_score + 1) {
            return "HALF_WIN";
        } else {
            return "LOST";
        }
    } else {
        if (h_score > a_score) {
            return "WIN";
        } else if (h_score === a_score) {
            return "REFUND";
        } else {
            return "LOST";
        }
    }
};

// Handicap
const getHandicap = ({ h_score, a_score, oddType, handicap }) => {
        handicap = Number(handicap);
        if (oddType == 1 && (h_score + handicap) > a_score) {
            return 'WIN';
        } else if (oddType == 2 && (a_score + handicap) > h_score) {
            return 'WIN';
        } else {
            return 'LOST';
        }
    }
    //Over/Under
const getOverUnder_ = ({ t_score, handicap, oddType }) => {
    handicap = Math.abs(handicap);
    let d_score = Math.floor(handicap);
    let over_under = d_score < 1 ? handicap : handicap % d_score;
    if (oddType === "Under") {
        if (over_under === 0.25) {
            if (t_score < d_score) {
                return "WIN";
            } else if (t_score === d_score) {
                return "HALF_WIN";
            } else {
                return "LOST";
            }
        } else if (over_under === 0.5) {
            if (t_score <= d_score) {
                return "WIN";
            } else {
                return "LOST";
            }
        } else if (over_under === 0.75) {
            if (t_score <= d_score) {
                return "WIN";
            } else if (t_score === d_score + 1) {
                return "HALF_LOST";
            } else {
                return "LOST";
            }
        } else {
            if (t_score < d_score) {
                return "WIN";
            } else if (t_score === d_score) {
                return "REFUND";
            } else {
                return "LOST";
            }
        }
    } else if (oddType === "Over") {
        if (over_under === 0.25) {
            if (t_score > d_score) {
                return "WIN";
            } else if (t_score === d_score) {
                return "HALF_LOST";
            } else {
                return "LOST";
            }
        } else if (over_under === 0.5) {
            if (t_score > d_score) {
                return "WIN";
            } else {
                return "LOST";
            }
        } else if (over_under === 0.75) {
            if (t_score > d_score + 1) {
                return "WIN";
            } else if (t_score === d_score + 1) {
                return "HALF_WIN";
            } else {
                return "LOST";
            }
        } else {
            if (t_score > d_score) {
                return "WIN";
            } else if (t_score === d_score) {
                return "REFUND";
            } else {
                return "LOST";
            }
        }
    } else {
        return "";
    }
};

const getOverUnder = ({ t_score, handicap, oddType }) => {
    handicap = Number(handicap);
    if (oddType == 'Over' && t_score > handicap) {
        return 'WIN';
    } else if (oddType == 'Under' && t_score < handicap) {
        return 'WIN'
    } else {
        return 'LOST';
    }
}

// Odd/Even
const getOddEven = ({ score, oddType }) => {
    let mod = score % 2;
    if (mod == 1 && oddType == 'Odd') {
        return 'WIN';
    } else if (mod == 0 && oddType == 'Even') {
        return 'WIN';
    } else {
        return 'LOST';
    }
};

// BTTSAndEitherTeamToWin
const getBTTSEitherWin = ({ h_score, a_score, oddType }) => {
    if (oddType == 'Yes' && h_score != 0 && a_score != 0 && h_score != a_score) {
        return 'WIN';
    } else {
        return 'LOST';
    }
}

// Match Won by [X] Goal Exactly
const getWonByExactGoal = ({ t_score, handicap, oddType }) => {
    handicap = Number(handicap);
    if (oddType == 'Yes' && t_score == handicap) {
        return 'WIN';
    } else if (oddType == 'No' && t_score != handicap) {
        return 'WIN';
    } else {
        return 'LOST';
    }
}

// Correct Score
const getCorrectScore = ({ h_score, a_score, oddType }) => {
    const home = oddType.split(':')[0];
    const away = oddType.split(':')[1];
    if (Number(home) && Number(away)) {
        if (h_score == home && a_score == away) {
            return 'WIN';
        } else {
            return 'LOST';
        }
    } else {
        return 'REFUND';
    }
}

// Total Goals - Exact
const getExactNumber = ({ t_score, oddType }) => {
    if (oddType == 'No goal' && t_score == 0) {
        return 'WIN';
    } else if (Number(oddType) && Number(oddType) == t_score) {
        return 'WIN';
    } else if (oddType.indexOf('or more') != -1) {
        let index = oddType.indexOf('or more');
        let score = Number(oddType.slice(0, index));
        if (t_score >= score) {
            return 'WIN';
        } else {
            return 'LOST';
        }
    } else {
        return 'LOST';
    }
}

// Both Teams To Score
const getBTTS = ({ h_score, a_score, oddType }) => {
    if (oddType == 'Yes' && h_score > 0 && a_score > 0) {
        return 'WIN';
    } else if (oddType == 'No' && (h_score == 0 || a_score == 0)) {
        return 'WIN';
    } else {
        return 'LOST';
    }
}

// Set Betting
const getSetBetting = ({ h_score, a_score, oddType }) => {
    const home = oddType.split('-')[0];
    const away = oddType.split('-')[1];
    if (Number(home) && Number(away)) {
        if (h_score == home && a_score == away) {
            return 'WIN';
        } else {
            return 'LOST';
        }
    } else {
        return 'REFUND';
    }
}

// Tie breaks
const getTiebreaks = ({ h_score, a_score, oddType }) => {
    const condi = h_score - a_score;
    if (oddType === 'Yes' && (condi >= 2 || condi <= -2)) {
        return 'WIN';
    } else if (oddType === 'No' && (condi < 2 || condi > -2)) {
        return 'WIN';
    } else {
        return 'LOST';
    }
}

//Number of games
const numberOfGame = ({ t_score, oddType }) => {
    let f_count = 0,
        s_count = 0;
    if (oddType.indexOf(' games or more') !== -1) {
        let idx = oddType.indexOf(' games or more');
        f_count = oddType.slice(0, idx);
        if (Number(f_count) == t_score || Number(f_count) < t_score) {
            return 'WIN';
        } else {
            return 'LOST';
        }
    } else {
        let idx = oddType.indexOf(' Games');
        let range = oddType.slice(0, idx);
        f_count = range.split('-')[0];
        s_count = range.split('-')[1];
        f_count = Number(f_count);
        s_count = Number(s_count);
        if ((f_count <= t_score) && (s_count >= t_score)) {
            return 'WIN';
        } else {
            return 'LOST';
        }
    }
}

// Total Scored
const getTotalScore = ({ score, oddType }) => {
    if (oddType.indexOf('or less') !== -1) {
        let idx = oddType.indexOf(' or less');
        let count = oddType.slice(0, idx);
        count = Number(count);
        if (score <= count) {
            return 'WIN';
        } else {
            return 'LOST';
        }
    } else if (oddType.indexOf('or more') !== -1) {
        let idx = oddType.indexOf(' or more');
        let count = oddType.slice(0, idx);
        count = Number(count);
        if (score >= count) {
            return 'WIN';
        } else {
            return 'LOST';
        }
    } else {
        let f_count = oddType.split(' to ')[0];
        let s_count = oddType.split(' to ')[1];
        f_count = Number(f_count);
        s_count = Number(s_count);
        if ((f_count <= score) && (s_count >= score)) {
            return 'WIN';
        } else {
            return 'LOST';
        }
    }
}

/**
 * Settle Tools
 */
const getFScore = (scores) => {
    return scores[Object.keys(scores).sort().reverse()[0]];
};

const getScore = (scores) => {
    let home = 0,
        away = 0;
    for (const i in scores) {
        if (Number(scores[i].home) > Number(scores[i].away)) {
            home++;
        } else if (Number(scores[i].home) < Number(scores[i].away)) {
            away++;
        }
    }
    return { home, away };
};

const getScores = ({ SportId, scores, ss }) => {
    let h_score = 0,
        a_score = 0,
        t_score = 0,
        h_score_f = 0,
        a_score_f = 0;

    // Football
    if (SportId == 4) {
        const f_score = getFScore(scores);
        h_score = Number(f_score.home);
        a_score = Number(f_score.away);
        h_score_f = Number(scores['1'].home);
        a_score_f = Number(scores['1'].away);
        t_score = h_score + a_score;
        return { h_score, a_score, h_score_f, a_score_f, t_score, state: true };
    } else if (SportId === 5) { // Tennis
        const f_score = getScore(scores);
        if (f_score.home === f_score.away) {
            return { h_score, a_score, t_score, state: false };
        } else {
            const home_score = Object.values(scores).reduce((sum, { home }) => (sum += Number(home)), 0);
            const away_score = Object.values(scores).reduce((sum, { away }) => (sum += Number(away)), 0);
            h_score = Number(f_score.home);
            a_score = Number(f_score.away);
            t_score = home_score + away_score;
            return { h_score, a_score, t_score, state: true };
        }
    } else if (SportId === 7) { // BaskcetBall
        h_score = Number(scores['7'].home);
        a_score = Number(scores['7'].away);
        h_score_f = Number(scores['3'].home);
        a_score_f = Number(scores['3'].away);
        t_score = h_score + a_score;
        let home = [''],
            away = [''];
        for (let i = 1; i < 6; i++) {
            if (i === 3) continue;
            home.push(Number(scores[i].home));
            away.push(Number(scores[i].away));
        }
        return { h_score, a_score, h_score_f, a_score_f, t_score, home, away, state: true };
    } else if (
        SportId === 12 ||
        SportId === 17 ||
        SportId === 18 ||
        SportId === 19 ||
        SportId === 78
    ) {
        const f_score = getFScore(scores);
        h_score = Number(f_score.home);
        a_score = Number(f_score.away);
        t_score = h_score + a_score;
        return { h_score, a_score, t_score, state: true };
    } else if (
        SportId === 91 ||
        SportId === 92 ||
        SportId === 94 ||
        SportId === 95
    ) {
        const home_score = Object.values(scores).reduce((sum, { home }) => (sum += Number(home)), 0);
        const away_score = Object.values(scores).reduce((sum, { away }) => (sum += Number(away)), 0);
        const f_score = getScore(scores);
        h_score = Number(f_score.home);
        a_score = Number(f_score.away);
        t_score = home_score + away_score;
        return { h_score, a_score, t_score, state: true };
    } else if (
        SportId === 8 ||
        SportId === 9 ||
        SportId === 14 ||
        SportId === 15 ||
        SportId === 16 ||
        SportId === 36 ||
        SportId === 66 ||
        SportId === 83 ||
        SportId === 90 ||
        SportId === 107 ||
        SportId === 110 ||
        SportId === 151
    ) {
        const s = ss.split("-");
        h_score = Number(s[0]);
        a_score = Number(s[1]);
        t_score = h_score + a_score;
        return { h_score, a_score, t_score, state: true };
    } else if (SportId === 3) {
        const s1 = ss.split("-");
        const s2 = ss.split(",");
        if (s1[0] && s1[1]) {
            h_score = Number(s1[0].split("/")[0]);
            a_score = Number(s1[1].split("/")[0]);
            t_score = h_score + a_score;
            return { h_score, a_score, t_score, state: true };
        } else if (s2[0] && s2[1]) {
            h_score = Number(s2[0].split("/")[0]);
            a_score = Number(s2[1].split("/")[0]);
            t_score = h_score + a_score;
            return { h_score, a_score, t_score, state: true };
        } else {
            return { h_score, a_score, t_score, state: false };
        }
    } else if (SportId === 75) {
        return { h_score, a_score, t_score, state: false };
    } else {
        return { h_score, a_score, t_score, state: false };
    }
};

const getCorner = (scores) => {
    if (scores && scores.length) {
        return Number(scores[0]) + Number(scores[1]);
    } else {
        return false;
    }
};

const getSHScore = (scores) => {
    const f_score = scores[Object.keys(scores).sort()[0]];
    const home = Number(f_score.home);
    const away = Number(f_score.away);
    return { home, away, total: home + away };
};

const getBHScore = (scores) => {
    let f_score = null;
    if (!scores) {
        f_score = null;
    } else if (Object.keys(scores).length >= 6) {
        f_score = scores["3"];
    } else if (Object.keys(scores).length >= 3) {
        f_score = scores["1"];
    }
    if (f_score) {
        const home = Number(f_score.home);
        const away = Number(f_score.away);
        return { home, away, total: home + away, state: true };
    } else {
        return { home: 0, away: 0, total: 0, state: false };
    }
};

const getBQScore = (scores, quarter) => {
    let f_score = {
        home: 0,
        away: 0,
    };
    let state = true;
    if (quarter === "1" || quarter === "0") {
        f_score = scores["1"];
    } else if (quarter === "2") {
        f_score = scores["2"];
    } else if (quarter === "3") {
        f_score = scores["4"];
    } else if (quarter === "4") {
        f_score = scores["5"];
    }
    if (f_score.home === 0 && f_score.away === 0) {
        state = false;
    }
    const home = Number(f_score.home);
    const away = Number(f_score.away);
    return { home, away, total: home + away, state };
};

const getHockeyScore = (scores) => {
    let h_score = Object.values(scores)
        .slice(0, 3)
        .reduce((sum, { home }) => (sum += Number(home)), 0);
    let a_score = Object.values(scores)
        .slice(0, 3)
        .reduce((sum, { away }) => (sum += Number(away)), 0);
    return { h_score, a_score };
};

const getQuarter = (str) => {
    switch (str) {
        case '1st':
            return 1;
        case '2nd':
            return 2;
        case '3rd':
            return 3;
        default:
            return str.slice(0, 1);
    }
}

const getProfit = ({ status, bet }) => {
    if (status === "WIN") {
        return bet.stake * bet.odds;
    } else if (status === "LOST") {
        return bet.stake * -1;
    } else if (status === "REFUND") {
        return bet.stake;
    } else if (status === "HALF_WIN") {
        return (bet.stake * bet.odds) / 2 + bet.stake / 2;
    } else if (status === "HALF_LOST") {
        return (bet.stake / 2) * -1;
    }
};

const football = async(bet, data) => {
    try {
        const { oddType, SportId, marketType, handicap, period } = bet;
        const { h_score, a_score, h_score_f, a_score_f, t_score } = getScores({ SportId, scores: data.scores, ss: data.ss });
        const h_score_s = h_score - h_score_f,
            a_score_s = a_score - a_score_f;
        let betResult = '';

        switch (marketType) {
            case '3way':
                if (period == 'RegularTime') {
                    betResult = await get1X2({ h_score, a_score, oddType });
                } else if (period == "SecondHalf") {
                    betResult = await get1X2({ h_score: h_score_s, a_score: a_score_s, oddType });
                } else {
                    betResult = await get1X2({ h_score: h_score_f, a_score: a_score_f, oddType });
                }
                break;
            case 'DoubleChance':
                if (period == 'RegularTime') {
                    betResult = await getDoubleChance({ h_score, a_score, oddType });
                } else if (period == "SecondHalf") {
                    betResult = await getDoubleChance({ h_score: h_score_s, a_score: a_score_s, oddType });
                } else {
                    betResult = await getDoubleChance({ h_score: h_score_f, a_score: a_score_f, oddType });
                }
                break;
            case 'Odd/Even':
                if (period == 'RegularTime') {
                    betResult = await getOddEven({ score: t_score, oddType })
                } else if (period == "SecondHalf") {
                    betResult = await getOddEven({ score: (h_score_s - a_score_s), oddType })
                } else {
                    betResult = await getOddEven({ score: (h_score_f + a_score_f), oddType })
                }
                break;
            case 'Over/Under':
                if (period == 'RegularTime') {
                    betResult = await getOverUnder({ t_score, handicap, oddType })
                } else if (period == "SecondHalf") {
                    betResult = await getOverUnder({ t_score: (h_score_s + a_score_s), handicap, oddType })
                } else {
                    betResult = await getOverUnder({ t_score: (h_score_f + a_score_f), handicap, oddType })
                }
                break;
            case 'BTTS':
                if (period == 'RegularTime') {
                    betResult = await getBTTS({ h_score, a_score, oddType });
                } else if (period == "SecondHalf") {
                    betResult = await getBTTS({ h_score: h_score_s, a_score: a_score_s, oddType });
                } else {
                    betResult = await getBTTS({ h_score: h_score_f, a_score: a_score_f, oddType });
                }
                break;
            case 'BTTSAndEitherTeamToWin':
                if (period == 'RegularTime') {
                    betResult = await getBTTSEitherWin({ h_score, a_score, oddType });
                } else if (period == "SecondHalf") {
                    betResult = await getBTTSEitherWin({ h_score: h_score_s, a_score: a_score_s, oddType });
                } else {
                    betResult = await getBTTSEitherWin({ h_score: h_score_f, a_score: a_score_f, oddType });
                }
                break;
            case 'DrawNoBet':
                if (period == 'RegularTime') {
                    betResult = await getDrawNoBet({ h_score, a_score, oddType });
                } else if (period == "SecondHalf") {
                    betResult = await getDrawNoBet({ h_score: h_score_s, a_score: a_score_s, oddType });
                } else {
                    betResult = await getDrawNoBet({ h_score: h_score_f, a_score: a_score_f, oddType });
                }
                break;
            case 'WinningDifference':
                betResult = await getWonByExactGoal({ t_score, handicap, oddType });
                break;
            case 'Handicap':
                const _handicap = Number(handicap);
                if (period == 'RegularTime') {
                    betResult = await get1X2({ h_score: (h_score - _handicap), a_score: (a_score + _handicap), oddType })
                } else if (period == "SecondHalf") {
                    betResult = await get1X2({ h_score: (h_score_s - _handicap), a_score: (a_score_s + _handicap), oddType })
                } else {
                    betResult = await get1X2({ h_score: (h_score_f - _handicap), a_score: (a_score_f + _handicap), oddType })
                }
                break;
            case 'CorrectScore':
            case 'DynamicCorrectScore':
                if (period == 'RegularTime') {
                    betResult = await getCorrectScore({ h_score, a_score, oddType });
                } else if (period == "SecondHalf") {
                    betResult = await getCorrectScore({ h_score: h_score_s, a_score: a_score_s, oddType });
                } else {
                    betResult = await getCorrectScore({ h_score: h_score_f, a_score: a_score_f, oddType });
                }
                break;
            case 'ExactNumberOfHappening':
                if (period == 'RegularTime') {
                    betResult = await getExactNumber({ t_score, oddType });
                } else if (period == "SecondHalf") {
                    betResult = await getExactNumber({ t_score: (h_score_s + a_score_s), oddType });
                } else {
                    betResult = await getExactNumber({ t_score: (h_score_f + a_score_f), oddType });
                }
                break;
        }

        return betResult;
    } catch (error) {
        console.log('football error:', error);
    }
}

const tennis = async(bet, data) => {
    const { oddType, SportId, marketType, handicap, period, title } = bet;
    const { h_score, a_score, t_score, status } = getScores({ SportId, scores: data.scores, ss: data.ss });
    let h_set = 0,
        s_set = 0,
        t_set = 0;
    let betResult = '';

    switch (marketType) {
        case '2Way - Who will win?':
            betResult = await get1X2({ h_score, a_score, oddType: String(oddType) });
            break;
        case 'Set related bets':
            if (title === 'Set Betting') {
                betResult = await getSetBetting({ h_score, a_score, oddType });
                break;
            } else {
                h_set = data.scores[period].home;
                s_set = data.scores[period].away;
                betResult = await get1X2({ h_score: Number(h_set), a_score: Number(s_set), oddType: String(oddType) });
                break;
            }
        case 'Correct score':
            h_set = data.scores[period].home;
            s_set = data.scores[period].away;
            betResult = await getSetBetting({ h_score: Number(h_set), a_score: Number(s_set), oddType });
            break;
        case 'Tie breaks':
            h_set = data.scores[period].home;
            s_set = data.scores[period].away;
            betResult = await getTiebreaks({ h_score: Number(h_set), a_score: Number(s_set), oddType });
            break;
        case 'Number of games':
            h_set = data.scores[period].home;
            s_set = data.scores[period].away;
            t_set = Number(h_set) + Number(s_set);
            betResult = await numberOfGame({ t_score: t_set, oddType });
            break;
    }
    return betResult;
}

const basketball = async(bet, data) => {
    let betResult = '';
    const { oddType, SportId, marketType, handicap, period, title } = bet;
    const { h_score, a_score, h_score_f, a_score_f, t_score, home, away } = getScores({ SportId, scores: data.scores, ss: data.ss });

    switch (marketType) {
        case 'Money Line':
            betResult = await get1X2({ h_score, a_score, oddType: String(oddType) });
            break;
        case '1st Half Money Line':
            betResult = await get1X2({ h_score: h_score_f, a_score: a_score_f, oddType: String(oddType) });
            break;
        case '2nd Half Money Line':
            betResult = await get1X2({ h_score: (h_score - h_score_f), a_score: (a_score - a_score_f), oddType: String(oddType) });
            break;
        case 'Handicap/Spread':
            betResult = await getHandicap({ h_score, a_score, handicap, oddType: String(oddType) })
            break;
        case '1st Half - Handicap/Spread':
        case '2nd Half - Handicap/Spread':
            if (title.startsWith('1st')) {
                betResult = await getHandicap({ h_score: h_score_f, a_score: a_score_f, handicap, oddType: String(oddType) })
            } else {
                betResult = await getHandicap({ h_score: (h_score - h_score_f), a_score: (a_score - a_score_f), handicap, oddType: String(oddType) })
            }
            break;
        case '3-Way Result':
            if (period === 'RegularTime') {
                betResult = await get1X2({ h_score, a_score, oddType: String(oddType) });
            } else if (period === 'FirstHalf') {
                betResult = await get1X2({ h_score: h_score_f, a_score: a_score_f, oddType: String(oddType) });
            } else if (period === 'SecondHalf') {
                betResult = await get1X2({ h_score: (h_score - h_score_f), a_score: (a_score - a_score_f), oddType: String(oddType) });
            } else {
                let q = getQuarter(period)
                betResult = await get1X2({ h_score: home[q], a_score: away[q], oddType: String(oddType) });
            }
            break;
        case 'Totals':
        case '1st Half Totals':
        case '2nd Half Totals':
            if (title === 'Will the final score be odd or even?') {
                betResult = await getOddEven({ score: t_score, oddType })
            } else if (title === 'How many points will be scored in the game? (Regular time only)') {
                betResult = await getTotalScore({ score: t_score, oddType })
            } else {
                if (period == 'FirstHalf') {
                    betResult = await getOverUnder({ t_score: (h_score_f + a_score_f), handicap, oddType });
                } else if (period == 'SecondHalf') {
                    betResult = await getOverUnder({ t_score: (t_score - h_score_f - a_score_f), handicap, oddType });
                } else {
                    betResult = await getOverUnder({ t_score, handicap, oddType });
                }
            }
            break;
    }
    return betResult;
}

export const bettingSettled = async(bet, data) => {
    if (!bet || !data) return { profit: 0, status: "" };

    let status = "";
    switch (Number(bet.SportId)) {
        case 4:
            status = await football(bet, data);
            break;
        case 5:
            status = await tennis(bet, data);
            break;
        case 7:
            status = await basketball(bet, data);
            break;
    }

    if (status) {
        const profit = getProfit({ status, bet });
        return { profit, status };
    } else {
        return { profit: 0, status: "PENDING" };
    }
};

const makeBetResult = async(bet, data) => {
    const result = await bettingSettled(bet, data);
    await DB.w_sports_bet.update({ profit: result.profit, status: result.status }, { where: { id: bet.id } });
    console.log("!!!!!!!!!!RESULT!!!!!!!!!!", result);

    if (bet.betType == 'single') {
        const user = await DB.w_users.findOne({ attributes: ['balance'], where: { id: bet.user_id } });
        if (result.status !== 'LOST') {
            const balance = Number(user.dataValues.balance) + Number(result.profit);
            await DB.w_users.update({ balance }, { where: { id: bet.user_id } });
        }
    } else {
        const multi = await DB.w_sports_bet.findAll({ where: { betsId: bet.betsId } });
        let flag = 1,
            aCount = 0,
            wCount = 0;

        for (let item of multi) {
            if (item.status == 'BET') {
                flag = 0;
                return;
            } else if (item.status == 'WIN') {
                wCount++;
            }
            aCount++;
        }

        if (flag) {
            if (aCount == wCount) {
                const user = await DB.w_users.findOne({ attributes: ['balance'], where: { id: bet.user_id } });
                const balance = Number(user.dataValues.balance) + Number(multi[0].potential);
                await DB.w_users.update({ balance }, { where: { id: bet.user_id } });
                await DB.w_sports_bet.update({ profit: multi[0].potential }, { where: { betsId: bet.betsId } });
            }
        }
    }
}