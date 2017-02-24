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

<<<<<<< HEAD
Route::get('/', function(){
    return view('PageAccueil');
});
Route::get('/','ControllerPageAccueil@getRandom');


=======


Route::get('/', function () {
    return view('PageAccueil');
});

Route::get('/', 'ControllerPageAccueil@getRandom');

// Route::get('/i/{w}/{h}', function($w,$h)
// {
//     $img = Image::make()->resize($w, $h);

//     return $img->response('jpeg');
// });
>>>>>>> 192d73de52aa444a93374c66426411f9462f271c
