<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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

        // Admin a seulement un rôle.
        // Use "role" == 0.

        if (Auth::check()) {
            if (Auth::user()->role == '1') {

                return $next($request);
            } else {
                return redirect('/admin/questions')->with('message', 'You are not Admin!');
            }
        } else {
            return redirect('/login')->with('message', 'Not access.');
        }

        return $next($request);
    }
}
