import express from 'express';
import { getLeagueApi } from "../controllers/sports.js";
const router = express.Router();

router.post("/get-league", getLeagueApi);

export default router;