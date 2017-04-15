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
    return view('welcome');
})->name('home');

Route::get('/competition', function () {
    return view('competition');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/rules', function () {
    return view('rules');
});

Route::get('/rank', function () {



    return view('rank');

})->name('rank');

Route::get('/prizes', function () {
    return view('prizes');
});

Auth::routes();




Route::middleware('contest')->group(function() {

    Route::get('/competition-start', 'HomeController@index');

});
