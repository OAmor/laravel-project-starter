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
    return view('acceuil');
});

Auth::routes();

Route::get('/home', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Route::get('/produit/creation', [
    'uses' => 'ProductController@create',
    'as' => 'product.create'
]);

Route::get('/barcode', function (){
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML(DNS1D::getBarcodeHTML("4445", "UPCA"))->setPaper('a5','portrait');
    return $pdf->stream('test.pdf');
});


//Route::get('/home', 'HomeController@index')->name('home');
