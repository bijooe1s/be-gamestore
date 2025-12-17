<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout'],
    
    'allowed_methods' => ['*'],
    
    'allowed_origins' => [
        env('APP_URL', 'http://localhost'),
        env('FRONTEND_URL', 'https://gamestoredz.vercel.app'),
        'http://localhost:5173',
        'http://localhost:3000'
    ],
    
    'allowed_origins_patterns' => [],
    
    'allowed_headers' => ['*'],
    
    'exposed_headers' => [],
    
    'max_age' => 0,
    
    'supports_credentials' => false,
];