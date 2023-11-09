<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CorsMiddleware
{
    public function handle($request, Closure $next)
    {
        // Permitir cualquier origen (puedes personalizar esto)
        $response = $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');

        return $response;
    }
}
