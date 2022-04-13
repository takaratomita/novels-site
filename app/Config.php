<?php
define('HOST', (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST']);

if ($_SERVER['HTTP_HOST'] === 'localhost') {
    define('DB_HOST', 'mysql:host=localhost;');
    define('DB_NAME', 'dbname=novels_db;');
    define('DB_CHARSET', 'charset=utf8mb4');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
}

class Config
{

}