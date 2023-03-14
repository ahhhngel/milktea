<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TodoController;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\AdminController;
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

Route::get('/',[TodoController::class, 'index'])->name('partial.index');
Route::get('/about',[TodoController::class, 'about'])->name('partial.about');
Route::get('/contact',[TodoController::class, 'contact'])->name('partial.contact');
Route::resource('/admin', AdminController::class);