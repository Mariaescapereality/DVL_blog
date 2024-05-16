<?php

const SITE_NAME = "Recette Facile & Rapide";

const APP_ENV = 'dev';

const DB_TYPE = 'mysql';
const DB_HOST = '127.0.0.1';
const DB_PORT = '3306';
const DB_NAME = 'blogus';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';

const ADMIN_USERNAME =  'admin';
const ADMIN_PASSWORD = 'admin';

const MAIN_MENU = [
    ['index.php', 'Home'],
    ['pages/newsletter.php', 'Newsletter']
];

const FOOTER_HIDE_NEWSLETTER_LOCATIONS = [
    'pages/newsletter.php',
    'admin',
];