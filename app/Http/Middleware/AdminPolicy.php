<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
class AdminPolicy
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,string $role):Response
    {
        dd($role);  
        $authUserRole = Auth::user()->role ;
        if($authUserRole !=$role){
            abort(404,'un auth user');
        }
        return $next($request);
    }
}
    