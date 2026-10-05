<?php

ini_set('display_errors', '1');
error_reporting(E_ALL & ~E_NOTICE);

define('APP_ROOT', __DIR__ . DIRECTORY_SEPARATOR);

return [
    'mysql' => [
        'driver' => 'mysql',
        'host' => getenv('ENATIONS_DB_HOST') ?: 'localhost',
        'database' => getenv('ENATIONS_DB_NAME') ?: 'erepublik',
        'username' => getenv('ENATIONS_DB_USER') ?: 'root',
        'password' => getenv('ENATIONS_DB_PASSWORD') ?: '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ],
    'password_hash' => getenv('ENATIONS_PASSWORD_HASH') ?: 'change-this-password-salt',
    'mode' => getenv('ENATIONS_MODE') ?: 'development',
    'displayErrorDetails' => true,
    'debug' => true,
    'cookies.encrypt' => false,
    'cookies.secret_key' => getenv('ENATIONS_COOKIE_SECRET') ?: 'change-this-cookie-secret',
    'cookies.path' => '/',
    'cookies.domain' => getenv('ENATIONS_COOKIE_DOMAIN') ?: '',
];
