<?php

return [
    'driver' => env('SESSION_DRIVER', 'file'),
    'expire_on_close' => false,
    'max_lifetime' => env('SESSION_MAX_LIFETIME', 1440),
    'lifetime' => env('SESSION_LIFETIME', 0),
    'encrypt' => false,
    'files' => base_path('framework/sessions'),
    'connection' => null,
    'table' => 'sessions',
    'store' => null,
    'lottery' => [2, 100],
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => env('SESSION_DOMAIN', false),
    'secure' => env('SESSION_SECURE_COOKIE', false),
    'http_only' => env('SESSION_HTTP_ONLY', false),
];