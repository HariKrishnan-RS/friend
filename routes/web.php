<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "hello there how awwre xcvyou";
});

Route::get('hari', function () {
    return "hello home";
});
Route::get('hari/helo', function () {
    return "hello home hello";
});
