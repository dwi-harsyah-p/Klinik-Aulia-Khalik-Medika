<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsKasi
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
        if (auth()->check() && auth()->user()->level->name !== 'Admin' && auth()->user()->level->name !== 'Kasi') {
            abort(403);
        }
        return $next($request);
    }
}