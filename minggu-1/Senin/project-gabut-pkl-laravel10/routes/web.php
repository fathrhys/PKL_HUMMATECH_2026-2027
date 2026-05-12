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
    return view('welcome');
});
Route::get('/tes-backend', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'ini project awal ku'
    ]);
});
Route::get('/admin', function() {
    return response()->json([
        'admin' => 'aku admin!',
        'tes' => 'tes'
    ]);
});