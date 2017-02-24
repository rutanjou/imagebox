<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;
class ControllerPageAccueil extends Controller
{
	public function getRandom(){
		$root = 'mesImages';
		$images = glob($root.'/*.jpeg', GLOB_BRACE); 
		$randomImage = $images[array_rand($images)];
		return view('PageAccueil', ['image'=>$randomImage]);		
	}
	
}