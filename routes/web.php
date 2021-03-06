<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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
    return view('prueba');
});


Route::get('/vista', 'App\Http\Controllers\IndexController@index')->name('vista');

Route::resource('maestros','App\Http\Controllers\MaestrosController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

