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

use App\Person;

Route::get('/', function () {
    return view('welcome', 
      ['nome' => 'Otavio']);
});

Route::get('/blade', function() {
  return view('templates.main');
});

Route::get('/inicio', function() {
  return view('inicio');
});

Route::get('/pessoas/{id}', function($id) {
  $pessoa = Person::find($id);
  dd($pessoa);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
