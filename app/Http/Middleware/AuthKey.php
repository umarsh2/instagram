<?php

namespace App\Http\Middleware;

use Closure;

class AuthKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $token = $request->header('APP_KEY');
        // return response()->json(["token"=>$token]);
        // if($token!=null)
        //     return response()->json(["message"=> "app key not found"],401);
        return $next($request);
    }
}
