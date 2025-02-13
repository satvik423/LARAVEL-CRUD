<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;


class LogRequestActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): SymfonyResponse
    {
        $requestId = uniqid();
        Log::info("[$requestId] Request: {$request->ip()} → {$request->method()} {$request->fullUrl()}");

        $response = $next($request);

        // Log response details
        Log::info("Response Status: " . $response->getStatusCode());

        return $response;
    }
}
