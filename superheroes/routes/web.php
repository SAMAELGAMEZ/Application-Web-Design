<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;

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

Route::resource('superheroes', SuperheroController::class);

/*
Route::get('superheroes', 'SuperheroController@index')->name('superheroes.index'); 
Route::post('superheroes', 'SuperheroController@store')->name('superheroes.store'); 
Route::post('superheroes/create', 'SuperheroController@create')->name('superheroes.create'); 
Route::get('superheroes/{id}', 'SuperheroController@show')->name('superheroes.show'); 
Route::patch('superheroes/{id}', 'SuperheroController@update')->name('superheroes.update'); 
Route::delete('superheroes/{id}', 'SuperheroController@destroy')->name('superheroes.destroy'); 
Route::get('superheroes/{id}/edit', 'SuperheroController@edit')->name('superheroes.edit'); 
*/