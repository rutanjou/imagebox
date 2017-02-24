<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;
use config/app.php;

class ControllerPageAccueil extends Controller
{
    public function getIndex(){
        return view('PageAccueil');
    }
    
}