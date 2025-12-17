<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout', 'register', 'forgot-password'],
    
    'allowed_methods' => ['*'],
    
    'allowed_origins' => array_filter([
        env('FRONTEND_URL', 'https://gamestoredz.vercel.app'),
        env('APP_URL'),
        'http://localhost:5173',
        'http://localhost:3000',
        'https://*.vercel.app',
        'https://*.railway.app',
    ]),
    
    'allowed_origins_patterns' => [],
    
    'allowed_headers' => [
        'Accept',
        'Authorization',
        'Content-Type',
        'X-Requested-With',
        'X-CSRF-TOKEN',
        'X-XSRF-TOKEN',
    ],
    
    'exposed_headers' => [
        'Authorization',
        'X-CSRF-TOKEN',
        'X-XSRF-TOKEN',
    ],
    
    'max_age' => 60 * 60 * 24, // 24 jam
    
    'supports_credentials' => true,
];