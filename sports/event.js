import moment from "moment";
// import request from "request";
import axios from "axios";
import { CronJob } from "cron";
import { Op } from '@sequelize/core';
// import sequelize from './app/sequelize/index.js';
import config from "./app/config/index.js";
import countries from "./app/config/countries.js";
import { response } from "express";

const token = config.TOKEN;
// const DB = sequelize.models;

const getInplayPage = (sport_id) => {
    const options = {
        method: "GET",
        url: 'https://api.b365api.com/v3/events/inplay',
        params: { token: token, sport_id: sport_id, skip_esports: "Esports" },
        headers: { "Content-Type": "application/json" },
        data: { page: 1, skip_markets: 1 },
        responseType: 'json',
    };

    const fetchLivePageData = async (options, sport_id) => {
        try {
            // Assuming options contains method, url, headers, etc.
            const response = await axios(options); // axios automatically handles JSON parsing
            const data = response.data; // The parsed response body
            console.log(data.results[0].timer);
            return;
            if (!data || !data.pager) {
                return console.log('No pager found in response:', data);
            }

            const pager = data.pager;
            const page = Math.ceil(pager.total / pager.per_page);

            // Loop through the pages and call getInplayEvents
            for (let i = 0; i < page; i++) {
                getInplayEvents(sport_id, i + 1); // Pass the sport_id and current page number
            }

        } catch (error) {
            // Handle errors here
            console.log('Error response:', error.response ? error.response.data : 'No response');
            console.log('Error message:', error.message);
            console.log('Failed to fetch live page data');
        }
    };
    fetchLivePageData(options, sport_id);
};

getInplayPage(1);