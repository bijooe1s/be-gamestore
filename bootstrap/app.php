<?php

// Fix untuk Railway PORT issue
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_SERVER['HTTP_USER_AGENT']) 
    && strpos($_SERVER['HTTP_USER_AGENT'], 'Railway/Healthcheck') !== false) {
    http_response_code(200);
    echo 'OK';
    exit;
}

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
