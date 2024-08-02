<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\plaintesController;
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

Route::get('/', [loginController::class, 'index'])->name('index');
Route::get('accueil', [homeController::class, 'index'])->name('home');
Route::get('admin', [adminController::class, 'index'])->name('dash');
Route::get('mes_requetes', [plaintesController::class, 'index'])->name('mes-requetes');

