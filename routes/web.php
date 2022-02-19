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
// Forgot or logout session 
Route::get('/noaccess', function () {
    Session()->forget('username');
    Session()->forget('password');
    Session()->flush();
    return redirect("/Login")->with('message', ' User is logged out !');
});
Route::get('/', function () {
    return view('Guest.Homepage');
});

Route::get('/About', function () {
    return view('Guest.Aboutus');
});
Route::get('/Register', 'App\Http\Controllers\UserpagebaseController@index');
Route::post('/Register', 'App\Http\Controllers\UserpagebaseController@store');

Route::get('/Login', 'App\Http\Controllers\Checklogin@index');
Route::post('/Login', 'App\Http\Controllers\Checklogin@StartSessionLogin');

//club 
Route::group(["middleware" => ["UserLogChecker"]], function(){
Route::get('/dashboard', 'App\Http\Controllers\PageController@index');
Route::post('/dashboard', 'App\Http\Controllers\PageController@store');
Route::post('/Edashboard', 'App\Http\Controllers\PageController@update');
Route::post('/upload', 'App\Http\Controllers\PageController@upload');

Route::get('/headerScript', 'App\Http\Controllers\HeaderfilesController@index');
Route::post('/headerScript', 'App\Http\Controllers\HeaderfilesController@store');
Route::post('/EheaderScript', 'App\Http\Controllers\HeaderfilesController@update');
Route::get('/Profile', 'App\Http\Controllers\Profileupdate@index');

Route::get('/User/Images', 'App\Http\Controllers\Profileupdate@all_images');
Route::get('/User/Delete/Image/{id}', 'App\Http\Controllers\Profileupdate@delete_image');
Route::get('/Checkusername/validation','App\Http\Controllers\Uservalidajax@index');
});

Route::get('/{pagename}','App\Http\Controllers\Pagemain@show');
