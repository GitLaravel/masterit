<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\СategoryController;
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


Route::get('/home', [Controller::class, 'show']);
Route::post('/home', [Controller::class, 'getFormOrderMaster'])->name('getFormOrderMaster.store');
//Route::post('/home', [Controller::class, 'getFormOrderCallMe'])->name('getFormOrderCallMe.store');
//Route::get('/home/pk', [СategoryController::class, 'index']);
Route::get('/form', [Controller::class, 'index']);
Route::post('/form', [Controller::class, 'store'])->name('form.store');
