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
    return view('welcome');
});

Route::get('/me', function () {
    return [
        'Name' => 'Thoriq',
        'Kelas' => 'XII RPL 0',
        'NIS' => '123456',
    ];
});

Route::get('saya', function () {
    return [
        'Name' => 'Thoriq',
        'Kelas' => 'XII RPL 0',
        'NIS' => '123456',
    ];
});