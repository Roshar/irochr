<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController as FrontCategoryController;
use App\Http\Controllers\Akkino\MainController as AkkinoController; //Контроллер Админки
use App\Http\Controllers\Akkino\CategoryController;
use App\Http\Controllers\Akkino\PostController;
use App\Http\Controllers\UserController;

/**
 * ГМаршруты для клиентской части 
 */

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/article/{slug}', [MainController::class, 'show'])->name('article');
Route::get('/category/{slug}', [FrontCategoryController::class, 'index'])->name('category');
Route::post('/category', [FrontCategoryController::class, 'load_more'])->name('load_more_data');


/**
 * Группа маршрутов для админпанели 
 */

Route::group(['prefix' => 'akkino','middleware' => 'admin'], function(){
        Route::get('/', [AkkinoController::class, 'index'])->name('admin.index');
        Route::resource('/categories', CategoryController::class);
        Route::resource('/posts', PostController::class);
});

/**
 * группа маршрутов для авторизации и аутентификации 
 */
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [UserController::class,'create'])->name('register.create');
    Route::post('/register', [UserController::class,'store'])->name('register.store');
    Route::get('/login', [UserController::class,'loginForm'])->name('login.create');
    Route::post('/login', [UserController::class,'login'])->name('login');
});


Route::get('/logout', [UserController::class,'logout'])->name('logout')->middleware('auth');

