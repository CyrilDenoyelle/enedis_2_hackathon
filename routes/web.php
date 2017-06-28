<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('presentation');
});

Route::get('/route', function (){
    return view('autres');
});

Route::get('/infos', function (){
    return view('infos');
});

Route::get('/key', function() {
    return str_random(32);
});

Route::get('/gauge', 'GaugeController@index');

Route::get('/conso', 'ConsommationController@index');
Route::get('/compare', 'ComparaisonController@index');