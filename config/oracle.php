<?php

return [
    'oracle' => [
        'driver'         => 'oracle',
        'tns'            => env('DB_TNS', 'orcl'),
        'host'           => env('DB_HOST', '192.168.1.73'),
        'port'           => env('DB_PORT', 'L_1522'),
        'database'       => env('DB_DATABASE', 'orcl'),
        'username'       => env('DB_USERNAME', 'superuser'),
        'password'       => env('DB_PASSWORD', 'rmgerp123#'),
        'charset'        => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'         => env('DB_PREFIX', ''),
        'prefix_schema'  => env('DB_SCHEMA_PREFIX', ''),
        'edition'        => env('DB_EDITION', 'ora$base'),
        'server_version' => env('DB_SERVER_VERSION', '12c'),
    ],
];
