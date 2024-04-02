<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CheckAuthMiddleware;
use App\Http\Middleware\IsMemeberMiddleWare;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'check_auth'=>CheckAuthMiddleware::class,
            'member'=>IsMemeberMiddleWare::class,
            'admin'=>AdminMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
