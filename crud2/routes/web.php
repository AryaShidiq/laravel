<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/home',[PegawaiController::class, 'index'] );
Route::get('/create',[PegawaiController::class, 'create'] );
Route::post('/store',[PegawaiController::class, 'store'] );
Route::get('/tampilan/{id}',[PegawaiController::class, 'tampilan'] );
Route::put('/update/{id}',[PegawaiController::class, 'update'] );
Route::delete('/delete/{id}',[PegawaiController::class, 'destroy'] );
// Route::delete('/delete/{id}',[PegawaiController::class, 'delete'] );

// Route::get('/{id}tampilan',[PegawaiController::class, 'tampilan'] );
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
