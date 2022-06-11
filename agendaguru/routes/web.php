<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\UserController;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Agenda;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[LoginController::class,'login']);

// auth
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/loginuser',[LoginController::class,'loginuser']);
Route::get('/register',[LoginController::class,'register']);
    Route::post('/registeruser',[LoginController::class,'registeruser']);
Route::get('/logout',[LoginController::class,'logout']);
// auth closed


Route::group(['middleware'=>['auth','hakakses:admin']],function(){
    Route::get('/index', function () {
    $jumlahagenda = Agenda::count();
    $jumlahguru = Guru::count();
    $jumlahkelas = Kelas::count();
    return view('index' ,compact('jumlahagenda','jumlahguru','jumlahkelas'));
    });
    // tabel guru
    Route::get('/guru',[GuruController::class,'indexguru'])->middleware('auth');
    Route::get('/createguru',[GuruController::class,'crtguru']);
    Route::post('/storeguru',[GuruController::class,'strguru']);
    Route::get('/editguru/{id}',[GuruController::class,'editguru']);
    Route::put('/updateguru/{id}',[GuruController::class,'updtguru']);
    Route::delete('/deleteguru/{id}',[GuruController::class,'dltguru']);
    // tabel guru closed

    // tabel kelas
    Route::get('/kelas',[KelasController::class,'indexkelas']);
    Route::get('/createkelas',[KelasController::class,'crtkelas']);
    Route::post('/storekelas',[KelasController::class,'strkelas']);
    Route::get('/ubahkelas/{id}',[KelasController::class,'ubahkelas']);
    Route::put('/updatekelas/{id}',[KelasController::class,'updatekelas']);
    Route::delete('/deletekelas/{id}',[KelasController::class,'deletekelas']);
    // tabel kelas closed

    // tabel  agenda
    Route::get('/agenda',[AgendaController::class,'indexagenda']);
    Route::get('/createagenda',[AgendaController::class,'crtagenda']);
    Route::post('/storeagenda',[AgendaController::class,'stragenda']);
    Route::get('/editagenda/{id}',[AgendaController::class,'editagenda']);
    Route::put('/updateagenda/{id}',[AgendaController::class,'updateagenda']);
    Route::delete('/deleteagenda/{id}',[AgendaController::class,'deleteagenda']);
    // tabel  agenda closed

    // tabel mapel
    Route::get('/mapel',[MapelController::class, 'indexmapel']);
    Route::get('/createmapel',[MapelController::class,'crtmapel']);
    Route::post('/storemapel',[MapelController::class,'strmapel']);
    Route::get('/editmapel/{id}',[MapelController::class,'editmapel']);
    Route::put('/updatemapel/{id}',[MapelController::class,'updatemapel']);
    Route::delete('/deletemapel/{id}',[MapelController::class,'deletemapel']);
    // tabel mapel closed

    // register
    
    // register closed
});



Route::group(['middleware'=>['auth','hakakses:user']],function(){
   
    // user
    Route::get('/user',[UserController::class,'indexuser']);
    Route::post('/storeuser',[UserController::class,'struser']);
    // user close
});


