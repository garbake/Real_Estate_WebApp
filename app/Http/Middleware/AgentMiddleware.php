<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AgentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){

            if(Auth::user()->role_id == 2){
                return $next($request);

            }else{
                return redirect('/')->with('Message', 'Access Denied');
            }

        }
        else{

            return redirect('/login')->with('Message', 'Login to Access');
        }

        return $next($request);
    }
}
