<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;

class ControllerPageAccueil extends Controller
{
	public function getIndex(){
		$image = Images::all();
		return view('PageAccueil', ['image'=>$image]);
	}
	public function getShow(){
		$image = Images::all();
		return view ('PageAccueil');
	}
}
