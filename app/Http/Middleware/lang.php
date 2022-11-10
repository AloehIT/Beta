<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Lang
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
        if (App::currentLocale() == null) {
           
            App::setLocale('id');
        }
        if ($request->lang != '' && in_array($request->lang, ['id', 'en'])) {
            App::setLocale($request->lang);
            Session::put('locale', $request->lang);
        } else {
            App::setLocale(Session::get('locale'));
        }



        return $next($request);
    }
}
