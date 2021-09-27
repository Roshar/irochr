<?php

use App\Http\Controllers\Akkino\LinkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController as FrontCategoryController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\Akkino\MainController as AkkinoController; //Контроллер Админки
use App\Http\Controllers\Akkino\CategoryController;
use App\Http\Controllers\Akkino\PostController;
use App\Http\Controllers\Akkino\DocumentController;
use App\Http\Controllers\Akkino\VideoController as AkkinoVideoController;
use App\Http\Controllers\Akkino\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\VideoController;


/**
 * Основыные маршруты
 */

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/article/{slug}', [MainController::class, 'show'])->name('article');
Route::get('/category/{slug}', [FrontCategoryController::class, 'index'])->name('category');
Route::get('/news_list', [FrontCategoryController::class, 'news_list'])->name('news_list');
Route::get('/seminars_conference', [FrontCategoryController::class, 'seminars_conference'])->name('seminars_conference');
Route::get('/contest', [FrontCategoryController::class, 'contest'])->name('contest');
Route::get('/announce_list', [FrontCategoryController::class, 'announce_list'])->name('announce_list');
Route::get('/modern_school', [FrontCategoryController::class, 'modern_school'])->name('modern_school');
Route::get('/monitoring', [FrontCategoryController::class, 'monitoring'])->name('monitoring');


/**
 * Раздел "Институт"
 */

Route::group(['prefix' => 'institute'], function(){
    Route::get('/', [InstituteController::class, 'index'])->name('institute.index');
    Route::get('/history', [InstituteController::class, 'history'])->name('institute.history');
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
    Route::get('/academic_council', [InstituteController::class, 'academic_council'])->name('institute.academic_council');
    Route::get('/trade_union', [InstituteController::class, 'trade_union'])->name('institute.trade_union');
});

/**
 * Раздел Проекты
 */

Route::group(['prefix' => 'project'], function(){
    Route::get('/', [FrontCategoryController::class, 'projects'])->name('project.index');
    Route::get('/modern_school', [FrontCategoryController::class, 'modern_school'])->name('modern_school');
    Route::get('/gpro', [FrontCategoryController::class, 'gpro'])->name('gpro');
    Route::get('/srm', [FrontCategoryController::class, 'srm'])->name('srm');
    Route::get('/cos', [FrontCategoryController::class, 'cos'])->name('cos');
});


/**
 * Раздел Деятельность
 */
// Внешние ссылки на google диск
Route::group(['prefix' => 'activity'], function(){
    Route::get('/', [FrontCategoryController::class, 'projects'])->name('activity.index');
    Route::get('/educative', [FrontCategoryController::class, 'educative'])->name('educative');
    Route::get('/rumo', [FrontCategoryController::class, 'rumo'])->name('rumo');
    Route::get('/pubreport', [FrontCategoryController::class, 'pub_report'])->name('pub_report');
    Route::get('/plan', [FrontCategoryController::class, 'plan'])->name('plan');
    Route::get('/approbation', [FrontCategoryController::class, 'approbation'])->name('approbation');
});

/**
 * Раздел "Центры"
 */

Route::group(['prefix' => 'center'], function(){
    Route::get('/', [CenterController::class, 'index'])->name('center.index');
    Route::get('/ric', [CenterController::class, 'ric'])->name('center.ric');
    Route::get('/cito', [CenterController::class, 'cito'])->name('center.cito');
    Route::get('/cgia', [CenterController::class, 'cgia'])->name('center.cgia');
    Route::get('/cio', [CenterController::class, 'cio'])->name('center.cio');
    Route::get('/cmi', [CenterController::class, 'cmi'])->name('center.cmi');
    Route::get('/ced', [CenterController::class, 'ced'])->name('center.ced');
    Route::get('/cod', [CenterController::class, 'cod'])->name('center.cod');
    Route::get('/cm', [CenterController::class, 'cm'])->name('center.cm');
    Route::get('/cno', [CenterController::class, 'cno'])->name('center.cno');
    Route::get('/cvps', [CenterController::class, 'cvps'])->name('center.cvps');
    Route::get('/cfo', [CenterController::class, 'cfo'])->name('center.cfo');
    Route::get('/cofc', [CenterController::class, 'cofc'])->name('center.cofc');
});

/**
 * Раздел видео
 */
Route::group(['prefix' => 'video_content'], function(){
    Route::get('/', [VideoController::class, 'index'])->name('video_content.index');
    Route::get('/instruction_student', [VideoController::class, 'instruction_student'])->name('video_content.instruction_student');
    Route::get('/instruction_teacher', [VideoController::class, 'instruction_teacher'])->name('video_content.instruction_teacher');
    Route::get('/master_class', [VideoController::class, 'master_class'])->name('video_content.master_class');
    Route::get('/smi', [VideoController::class, 'smi'])->name('video_content.smi');

});


/**
 * Раздел Полезное
 */

Route::group(['prefix' => 'useful'], function(){
//    Route::get('/', [FrontCategoryController::class, 'projects'])->name('project.index');
    Route::get('/useful_links', [FrontCategoryController::class, 'useful_links'])->name('useful_links');

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
        Route::resource('/document', DocumentController::class);
        Route::resource('/video', AkkinoVideoController::class);
        Route::resource('/review', ReviewController::class);
        Route::resource('/link', LinkController::class);
//        Route::post('/posts', [PostController::class,'filterCategory'])->name('admin.filter');
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

