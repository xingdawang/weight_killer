<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitchController extends Controller
{
	/**
     * Update language.
     *
     * @param  Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
	protected function update(Request $request) {

		if(!empty($request->locale)) {
			App::setLocale($request->locale);
			Session::put('locale', $request->locale);
		}
		return redirect()->back();
	}
}
