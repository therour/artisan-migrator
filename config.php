<?php

/** @var \Illuminate\Config\Repository $config */

$config->set('database', [
    'default' => 'mysql',
    'migrations' => 'migrations',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', 3306),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => env('DB_PREFIX', ''),
            'strict' => env('DB_STRICT_MODE', true),
            'engine' => null,
            'timezone' => env('DB_TIMEZONE', '+00:00'),
        ],
    ],
]);
