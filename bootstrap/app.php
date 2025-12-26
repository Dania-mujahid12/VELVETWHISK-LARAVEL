<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        
         $middleware->alias(['admin' => \App\Http\Middleware\AdminMiddleware::class]);

        $middleware->validateCsrfTokens(except: [
            '/admin/cakes',      // For Creating
            '/admin/cakes/*',    // For Updating/Deleting
            '/login',            // To test login if needed

            '/admin/categories/*', 
        '/admin/categories',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create(); 