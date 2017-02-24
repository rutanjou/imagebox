<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('pageAccueil');
});

Route::get('/i/{w}/{h}', function($w,$h)
{
    $img = Image::make()->resize($w, $h);

    return $img->response('jpeg');
});
