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
    return view('index');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/typo', function () {
    return view('typo');
});
Route::get('/icon', function () {
    return view('icon');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/notif', function () {
    return view('notif');
});
