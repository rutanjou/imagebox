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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pageAccueil');
});
=======
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PageAccueilController@getIndex');
Route::get('/show', 'ControllerPageAccueil@getShow');

>>>>>>> a7e933867ee84160de32f8cb70d3fb785ccad761
