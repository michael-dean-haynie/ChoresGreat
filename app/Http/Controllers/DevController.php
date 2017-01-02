<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevController extends Controller
{
	public function route1(){
		return view('Dev/route1');
	}
}
