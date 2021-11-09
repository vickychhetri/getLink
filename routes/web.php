<?php

use Illuminate\Support\Facades\Route;

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
    return view('Guest.Homepage');
});

Route::get('/About', function () {
    return view('Guest.Aboutus');
});
Route::get('/Register', 'App\Http\Controllers\UserpagebaseController@index');
Route::post('/Register', 'App\Http\Controllers\UserpagebaseController@store');

Route::get('/Login', 'App\Http\Controllers\Checklogin@index');
Route::post('/Login', 'App\Http\Controllers\Checklogin@store');


Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});