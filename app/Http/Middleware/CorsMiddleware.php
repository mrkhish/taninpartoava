<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\products;
use App\Models\contact;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(isset($_SERVER['HTTP_ORIGIN'])){
            header("Access-Control-Allow-Origin:{$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');
        }
        if($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            if(isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET , POST , OPTIONS");
        if($request->isMethod('OPTIONS')){
            return response('',200)
            ->header('Access-Control-Allow-Methods',' GET , POST , OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type , Authorization');
        }
        if(isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers : {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    exit(0);
        }
        return $next($request);
    }
}
