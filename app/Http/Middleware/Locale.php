<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Config;
use Session;

class Locale
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
        $raw_locale = $request->server('HTTP_ACCEPT_LANGUAGE');
        $english = 'en';
        $chinese = 'zh';
        $contain_en = strpos($raw_locale, $english);
        $contain_cn = strpos($raw_locale, $chinese);
        if($contain_cn !== false) {
            $locale = 'cn';
        }else if($contain_en !== false) {
            $locale = 'en';
        }else {
            $locale = Config::get('app.locale');
        }
        App::setLocale($locale);
        return $next($request);
    }
 }
