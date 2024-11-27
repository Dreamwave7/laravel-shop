<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LoggerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 
        // логи тут будуть /logs/logging.log
        $logging = [
            "url" => $request->fullUrl(),
            "method" => $request->method(),
            "ip" => $request->ip(),
            "get_parameters" => $request->query(),
            "post_parameters" =>$request->all()
        ];

        Log::channel("logging")->info(json_encode($logging));

        return $next($request);
    }
}
