<?php

use App\Http\Middleware\Admin;
use App\Http\Middleware\Gerant;
use App\Http\Middleware\User;
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
    //     //
    $middleware->alias(['admin'=>Admin::class,
                        'gerant'=>Gerant::class,
                        'user'=>User::class]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

// return $app;

