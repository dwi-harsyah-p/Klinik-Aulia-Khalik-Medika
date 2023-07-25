<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NoUser
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
        if (!auth()->check()) {
            return redirect('login');
        }
        if (auth()->check() && auth()->user()->level->name == "Pasien") {
            abort(403);
        }
        return $next($request);
    }
}
