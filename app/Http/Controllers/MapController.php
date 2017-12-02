<?php

namespace App\Http\Controllers;
use Mapper;
use Config;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
	{
    	Mapper::map(
    		Config::get('googlmapper.longitude'),
    		Config::get('googlmapper.latitude'),
    		[
    			'zoom' => Config::get('googlmapper.home_zoom'),
    			'markers' => ['title' => 'My Location', 'animation' => 'DROP'],
    		]
    	);    	
    	return view('contact_us');
	}
}
