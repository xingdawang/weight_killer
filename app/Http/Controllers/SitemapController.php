<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Carbon\Carbon;

class SitemapController extends Controller
{
	public function index(Request $request) {

		$sitemap = [
			[url('/'), Carbon::now()->toIso8601String(), 'weekly', 1],
			[url('/login'), Carbon::now()->toIso8601String(), 'weekly', 0.5],
			[url('/register'), Carbon::now()->toIso8601String(), 'weekly', 0.5],
			[url('/user/bmi'), Carbon::now()->toIso8601String(), 'weekly', 0.5],
			[url('/user/bfp'), Carbon::now()->toIso8601String(), 'weekly', 0.5],
			[url('/user/trendline'), Carbon::now()->toIso8601String(), 'weekly', 0.5],
			[url('/user/update'), Carbon::now()->toIso8601String(), 'weekly', 0.5],
			[url('/user/weight'), Carbon::now()->toIso8601String(), 'weekly', 0.5],
			[url('/contact_us'), Carbon::now()->toIso8601String(), 'weekly', 0.5],

		];

		return response()->view('sitemap', compact('sitemap'))->header('Content-Type', 'text/xml');
	}
}
