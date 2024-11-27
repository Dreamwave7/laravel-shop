<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
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
        $allowed = [
            '127.0.0.1',
        ];


        // логи тут будуть /logs/logging.log
        $logging = [
            "url" => $request->fullUrl(),
            "method" => $request->method(),
            "ip" => $request->ip(),
            "get_parameters" => $request->query(),
            "post_parameters" =>$request->all()
        ];
        Log::channel("logging")->info(json_encode($logging));


        if(in_array((request()->ip()),$allowed)){
            Log::channel("logging")->info("Log in to admin panel");
        }else{
            Log::channel("logging")->info("Acces denied to ip ".request()->ip());
            return response("Access denied");
        }


        return $next($request);
    }
}
