<?php

namespace App\Http\Middleware;

use App\Http\Controllers\API\ResponseController;
use Closure;
use Illuminate\Http\Request;

class ApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   

        if($request->header('apiKey') !== config('app.api_key'))
            return ResponseController::create([], 'error', 'unauthorized', 401);

        return $next($request);
    }
}
