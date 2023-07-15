<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\TPesananController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/json-data',[JsonController::class,'index']);
Route::get('/json-data/{id}',[JsonController::class,'show'])->name('pesanans.show');
Route::get('/pesanans',[TPesananController::class, 'index'])->name('pesanans.index');
Route::get('/pesanans/create',[TPesananController::class,'create'])->name('pesanans.create');
Route::post('/pesanans', [TPesananController::class,'store' ])->name('pesanans.store');


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
