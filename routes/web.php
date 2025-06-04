<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

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


//Route::get('lang/{locale}', function ($locale) {
//    $availableLocales = ['uz', 'en', 'ru']; // qo'llab-quvvatlanadigan tillar
//    if (in_array($locale, $availableLocales)) {
//        Session::put('locale', $locale);
//    }
//    return Redirect::back();
//})->name('lang.switch');
Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => [
//        'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'
        'web',
//        'localeSessionRedirect',
//        'localizationRedirect',
    ]],
    function () {
        Route::get('/', [WebController::class, 'home']);
        Route::get('/cat/{id}', [WebController::class, 'cat'])->name('cat');
        Route::get('/post/{id}', [WebController::class, 'post'])->name('post');
        Auth::routes();
    });


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
//
//    // Admin panel bosh sahifasi
//    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
//
//    // Admin uchun kategoriya CRUD
//    Route::resource('categories', CategoryController::class);
//
//    // Admin uchun post CRUD
//    Route::resource('posts', PostController::class);
//});

Route::group(['prefix' => '{locale}', 'middleware' => ['setlocale', 'auth', 'admin']], function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('categories', CategoryController::class);
        Route::resource('posts', PostController::class);
    });

});

