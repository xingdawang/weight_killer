<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

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
        $detected_locale = "";

        $contain_en = strpos($raw_locale, $english);
        $contain_cn = strpos($raw_locale, $chinese);

        if ($contain_cn !== false) {
            $detected_locale = 'cn';
        } else if($contain_en !== false) {
            $detected_locale = 'en';
        } else {
            // If detect failed, use app default locale.
            $detected_locale = App::getLocale();
        }

        $locale = Session::get('locale') !== NULL ? Session::get('locale') : $detected_locale;
        App::setLocale($locale);
        return $next($request);
    }
 }
