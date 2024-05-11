<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');
Route::get('/hello', [\App\Http\Controllers\HelloController::class, 'index']);
Route::controller(\App\Http\Controllers\AuthController::class)->group(function (){
    Route::get('login', 'index')->name('login');
    Route::post('login', 'signIn')->name('signIn');
    Route::get('sign-up', 'signUp')->name('sign-up');

});
