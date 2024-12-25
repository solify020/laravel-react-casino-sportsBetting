import express from "express";
import { Sequelize } from '@sequelize/core';
import path from 'path';
import dotenv from 'dotenv'
import { fileURLToPath } from 'url';
import cors from 'cors'
import bodyParser from 'body-parser';

import { start } from './app/controllers/sports.js'

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
dotenv.config({ path: path.join(__dirname, '..', '.env') });

const app = express();
const PORT = '1213';


const sequelize = new Sequelize(
  process.env.DB_DATABASE,
  process.env.DB_USERNAME,
  process.env.DB_PASSWORD,
  {
    host: process.env.DB_HOST,
    dialect: 'mysql'
  }
);

cors({ origin: true });
// app.use(cors);
app.options('*', cors);
app.use(bodyParser.json({ limit: '15360mb', type: 'application/json' }));
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.urlencoded({ extended: true }));
app.get('/', (req, res) => {
  res.send({ message: 'SportsBook!' });
});

try {
  await sequelize.authenticate();
  console.log('Connection has been established successfully.');
  app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}.`);
    start();
  });
} catch (error) {
  console.error('Unable to connect to the database:', error);
}