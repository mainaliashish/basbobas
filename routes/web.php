<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Backend\SliderImageController;
use App\Http\Controllers\Backend\NewsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('error', function() {
    return view('errors.404');
})->name('404-error');

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth', 'checkAdmin'], 'prefix' => 'backend'], function() {

    Route::get('/dashboard', function () 
    { return view('backend.dashboard')->with('active_dashboard', 'active');})->name('backend.dashboard');

    Route::get('/home', [HomeController::class, 'index'])->name('backend.home');
    Route::get('/about', [AboutController::class, 'index'])->name('backend.about');
    Route::post('/about/update', [AboutController::class, 'updateAbout'])->name('backend.about.update');
    Route::get('/services', [ServiceController::class, 'index'])->name('backend.services');
    Route::get('/services/create-service', [ServiceController::class, 'create'])->name('backend.services.create');
    Route::post('/services/store-service', [ServiceController::class, 'store'])->name('backend.services.store');
    Route::get('/services/show/{id}', [ServiceController::class, 'show'])->name('backend.services.show');
    Route::get('/services/edit/{id}', [ServiceController::class, 'edit'])->name('backend.services.edit');
    Route::patch('/services/update/{id}', [ServiceController::class, 'update'])->name('backend.services.update');
    Route::get('/services/destroy/{id}', [ServiceController::class, 'destroy'])->name('backend.services.destroy');
    Route::get('/projects', [ProjectController::class, 'index'])->name('backend.projects');
    Route::get('/projects/create-project', [ProjectController::class, 'create'])->name('backend.projects.create');
    Route::post('/projects/store-project', [ProjectController::class, 'store'])->name('backend.projects.store');
    Route::get('/projects/show/{id}', [ProjectController::class, 'show'])->name('backend.projects.show');
    Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('backend.projects.edit');
    Route::patch('/projects/update/{id}', [ProjectController::class, 'update'])->name('backend.projects.update');
    Route::get('/projects/destroy/{id}', [ProjectController::class, 'destroy'])->name('backend.projects.destroy');
    Route::get('/teams', [TeamController::class, 'index'])->name('backend.teams');
    Route::get('/teams/create-project', [TeamController::class, 'create'])->name('backend.teams.create');
    Route::post('/teams/store-project', [TeamController::class, 'store'])->name('backend.teams.store');
    Route::get('/teams/show/{id}', [TeamController::class, 'show'])->name('backend.teams.show');
    Route::get('/teams/edit/{id}', [TeamController::class, 'edit'])->name('backend.teams.edit');
    Route::patch('/teams/update/{id}', [TeamController::class, 'update'])->name('backend.teams.update');
    Route::get('/teams/destroy/{id}', [TeamController::class, 'destroy'])->name('backend.teams.destroy');
    Route::get('/account', [AccountController::class, 'account'])->name('backend.account');
    Route::patch('/account/update', [AccountController::class, 'updateAccountPassword'])->name('backend.account.update');
    Route::get('/profile', [AccountController::class, 'profile'])->name('backend.profile');
    Route::patch('/profile/update', [AccountController::class, 'updateProfile'])->name('backend.profile.update');
    Route::get('/sliders', [SliderImageController::class, 'sliderImage'])->name('backend.sliders');
    Route::get('/sliders/show/{id}', [SliderImageController::class, 'showImage'])->name('backend.sliders.show'); 
    Route::get('/sliders/create', [SliderImageController::class, 'createImage'])->name('backend.sliders.create');
    Route::post('/sliders/store', [SliderImageController::class, 'storeImage'])->name('backend.sliders.store');
    Route::get('/sliders/edit/{id}', [SliderImageController::class, 'editImage'])->name('backend.sliders.edit');
    Route::patch('/sliders/update/{id}', [SliderImageController::class, 'updateImage'])->name('backend.sliders.update');
    Route::get('/sliderimages/destroy/{id}', [SliderImageController::class, 'destroyImage'])->name('backend.sliders.destroy');
    Route::get('/messages', [MessageController::class, 'index'])->name('backend.messages');
    Route::get('/messages/show/{id}', [MessageController::class, 'show'])->name('backend.messages.show');
    Route::get('/messages/destroy/{id}', [MessageController::class, 'destroy'])->name('backend.messages.destroy');
    Route::get('/news', [NewsController::class, 'index'])->name('backend.news');
    Route::get('/news/show/{id}', [NewsController::class, 'show'])->name('backend.news.show');
    Route::get('/news/create', [NewsController::class, 'create'])->name('backend.news.create');
    Route::get('/news/store', [NewsController::class, 'store'])->name('backend.news.store');
    Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('backend.news.edit');
    Route::patch('/news/update/{id}', [NewsController::class, 'update'])->name('backend.news.update');
    Route::get('/news/destroy/{id}', [NewsController::class, 'destroy'])->name('backend.news.destroy');

});

Route::get('/', [FrontendController::class, 'index'])->name('frontend-home');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend-about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend-contact');
Route::get('/services', [FrontendController::class, 'services'])->name('frontend-services');
Route::get('/projects', [FrontendController::class, 'projects'])->name('frontend-projects');
Route::get('/news', [FrontendController::class, 'news'])->name('frontend-news');
Route::get('/news-detail/{id}', [FrontendController::class, 'news_detail'])->name('frontend-news-detail');
Route::get('/service-detail/{id}', [FrontendController::class, 'service_detail'])->name('frontend-service-detail');
Route::get('/project-detail/{id}', [FrontendController::class, 'project_detail'])->name('frontend-project-detail');
Route::post('/messages/post', [FrontendController::class, 'messagePost'])->name('frontend.messages.post');