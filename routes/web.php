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
    return view('welcome');
});

Route::get('/', function () {
    return view('pageAccueil');
});

Route::get('/300/200', function()
{
    $img = Image::make('mesImages/photo627-21.jpeg')->resize(300, 200);

    return $img->response('jpeg');
});
