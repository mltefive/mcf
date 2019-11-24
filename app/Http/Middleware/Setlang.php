<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Setlang
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
        App::setLocale(session()->get('selected_language') ?? 'ru');
        // App::setLocale(App::getLocale());
        return $next($request);
    }
}
