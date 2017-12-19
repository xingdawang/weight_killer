<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class LanguageSwitchController extends Controller
{
	/**
     * Update language.
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */
	protected function update(Request $request) {
		if(!empty($request->locale)) {
			App::setLocale($request->locale);
		}
		// Redirect to previous url.
		return redirect(url()->previous());
	}
}
