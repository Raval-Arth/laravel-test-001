<?php

use Illuminate\Support\Facades\Auth;
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

// Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'admin_index'])->name('admin');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
