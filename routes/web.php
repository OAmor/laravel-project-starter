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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Route::get('/route1', function (){
    return view('route1');
})->name('route1');

Route::get('/route2', function (){
    return view('route2');
})->name('route2');

Route::get('/route3', function (){
    return view('route3');
})->name('route3');

Route::get('/route4', function (){
    return view('route4');
})->name('route4');

Route::get('/route5', function (){
    return view('route5');
})->name('route5');

//Route::get('/home', 'HomeController@index')->name('home');
