<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\Routing\Middleware;
use Session;
use App;
use Config;
use Lang;
use Cookie;
class Language
{
    public function __construct(Application $app, Redirector $redirector, Request $request) {
        $this->app = $app;
        $this->redirector = $redirector;
        $this->request = $request;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {   
        $locale;    
        if( Session::has('locale')) 
        {
            $locale = Session::get( 'locale', Config::get('app.locale'));
        } else 
        {
            $locale = 'vi';
        }
        $locale = Cookie::get('locale', 'vi');
        // dd(Cookie::get('frequent_visited_subject_ids',json_encode([]));)
        // Session::put('locale', $locale);
        App::setLocale($locale);
        // $cookie = Cookie::queue(Cookie::forever('locale', $locale));
        $cookieJar = new CookieJar;
        $cookieJar->queue(cookie('locale', $locale, 45000));
        
        return $next($request);
    }
}
