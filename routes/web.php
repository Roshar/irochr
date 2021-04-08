<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController as FrontCategoryController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\Akkino\MainController as AkkinoController; //Контроллер Админки
use App\Http\Controllers\Akkino\CategoryController;
use App\Http\Controllers\Akkino\PostController;
use App\Http\Controllers\UserController;

/**
 * Маршруты для клиентской части
 */

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/article/{slug}', [MainController::class, 'show'])->name('article');
Route::get('/category/{slug}', [FrontCategoryController::class, 'index'])->name('category');

//Раздел "Институт"
Route::group(['prefix' => 'institute'], function(){
    Route::get('/', [InstituteController::class, 'index'])->name('institute.index');
    Route::get('/document', [InstituteController::class, 'document'])->name('institute.document');
    Route::get('/structure', [InstituteController::class, 'structure'])->name('institute.structure');
    Route::get('/leadership', [InstituteController::class, 'leadership'])->name('institute.leadership');
    Route::get('/material_technical_support', [InstituteController::class, 'material_technical_support'])->name('institute.mts');
    Route::get('/scholarships', [InstituteController::class, 'scholarships'])->name('institute.scholarships');
    Route::get('/education', [InstituteController::class, 'education'])->name('institute.education');
    Route::get('/educational_standards', [InstituteController::class, 'educational_standards'])->name('institute.educational_standards');
    Route::get('/financial_and_economic_activities', [InstituteController::class, 'financial_and_economic_activities'])->name('institute.financial');
    Route::get('/vacancies', [InstituteController::class, 'vacancies'])->name('institute.vacancies');
    Route::get('/paid_educational_services', [InstituteController::class, 'paid_educational_services'])->name('institute.paid_educational_services');
});

//Раздел "Центры"
Route::group(['prefix' => 'center'], function(){
    Route::get('/', [InstituteController::class, 'index'])->name('center.index');
});


Route::post('/category', [FrontCategoryController::class, 'load_more'])->name('load_more_data');

/**
 * Маршруты для пакета laravel-filemanager
 */
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

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

