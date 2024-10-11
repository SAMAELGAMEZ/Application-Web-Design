<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;

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

Route::resource('grades', GradeController::class);

/*
Route::get('grades', 'GradeController@index')->name('grades.index');
Route::post('grades', 'GradeController@store')->name('grades.store');
Route::get('grades/create', 'GradeController@create')->name('grades.create');
Route::get('grades/{id}', 'GradeController@show')->name('grades.show');
Route::patch('grades/{id}', 'GradeController@update')->name('grades.update');
Route::delete('grades/{id}', 'GradeController@destroy')->name('grades.destroy');
Route::get('grades/{id}/edit', 'GradeController@edit')->name('grades.edit');
*/