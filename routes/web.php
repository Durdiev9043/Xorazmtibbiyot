<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WebController;
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

Route::get('/',  [WebController::class, 'home']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    // Admin panel bosh sahifasi
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Admin uchun kategoriya CRUD
    Route::resource('categories', CategoryController::class);

    // Admin uchun post CRUD
    Route::resource('posts', PostController::class);
});
