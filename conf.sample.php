<?php

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

define('APP_ROOT', __DIR__ . DIRECTORY_SEPARATOR);

return [
    "mysql" => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'e_nations',
        'username' => 'root',
        'password' => 'CHANGE_ME',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ],
    "password_hash" => "CHANGE_ME_TO_A_LONG_RANDOM_SECRET",
    'mode' => 'development',
    'displayErrorDetails' => true,
    'debug' => true,
    'cookies.encrypt' => false,
    'cookies.secret_key' => 'CHANGE_ME_TO_A_LONG_RANDOM_SECRET',
    'cookies.path' => '/',
    'cookies.domain' => '',
];
