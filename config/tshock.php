<?php

return [
    
    'host' => env('TSHOCK_HOST', '127.0.0.1'),
    'port' => env('TSHOCK_PORT', '7777'),
    
    'rest' => [
        'host' => env('TSHOCK_REST_HOST', '127.0.0.1'),
        'port' => env('TSHOCK_REST_PORT', '7878'),
        'username' => env('TSHOCK_REST_USERNAME', 'rest'),
        'password' => env('TSHOCK_REST_PASSWORD'),
    ],
    
];
