<?php

use App\Http\Controllers\Main\homeController;
use App\Http\Controllers\Management\Actors\UserController;
use App\Http\Controllers\Management\Content\CategoryController;
use App\Http\Controllers\Management\Content\PlanController;
use App\Http\Controllers\Management\Content\ProfileController;
use App\Http\Controllers\Management\Content\ReminderController;
use App\Http\Controllers\Management\Content\TagController;
use Illuminate\Support\Facades\Auth;
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

Route::controller(homeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about_us')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/terms', 'terms')->name('terms');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/researchs', 'researchs')->name('researchs');
    Route::get('/appointment', 'appointment')->name('appointment');
    Route::get('/scientists', 'scientists')->name('scientists');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/users', 'users')->name('users');
    Route::get('/lab', 'lab')->name('lab');
    Route::get('/user-profile', 'profile')->name('profile');
    Route::get('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');
    Route::get('/dashboard/notif-req', 'request')->name('request');
    Route::get('/dashboard/notif-msg', 'message')->name('message');
    Route::get('/dashboard/notif-cmt', 'comments')->name('comment');
    Route::get('/dashboard/create-news', 'creat_news')->name('creat-news');
    Route::get('/dashboard/news', 'news')->name('news');
    Route::get('/dashboard/projects_management', 'projects_management')->name('prjct-man');
    Route::get('/dashboard/referee_management', 'referee_management')->name('referee');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/dashboard/users', 'index')->middleware('auth')->name('user.index');
    Route::get('/dashboard/new-user', 'create')->middleware('auth')->name('user.create');
    Route::delete('/dashboard/delete-user/{id}', 'destroy')->middleware('auth')->name('user.destroy');
    Route::post('dashboard/store-user', 'store')->middleware('auth')->name('user.store');
    // Route::get('/dashboard/edite-user/{id?}', 'edite')->middleware('auth')->name('user.edite');
    Route::put('/dashboard/update-user/{id?}', 'update')->middleware('auth')->name('user.update');
    Route::get('/dashboard/show-users', 'show')->middleware('auth')->name('user.show');

});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/dashboard/categories', 'index')->middleware(['auth'])->name('category');
    Route::post('/dashboard/new/category', 'store')->middleware(['auth'])->name('categories.store');
    Route::delete('/dashboard/delete/category/{id?}', 'destroy')->middleware(['auth'])->name('categories.delete');
});

Route::controller(TagController::class)->group(function () {
    Route::get('/dashboard/tags', 'index')->middleware(['auth'])->name('tags');
    Route::get('/dashboard/show/tag', 'fetch_data')->middleware(['auth']);
    Route::post('/dashboard/new/tag', 'add_data')->middleware(['auth'])->name('tag.create');
    Route::post('/dashboard/update/tag', 'update_data')->middleware(['auth'])->name('tag.update');
    Route::delete('/dashboard/delete/tag/{id?}', 'delete_data')->middleware(['auth'])->name('tag.delete');
});

Route::controller(ProfileController::class)->group(function(){
    Route::get('/dashboard/user/profile', 'index')->middleware(['auth'])->name('user.profile');
    Route::get('/dashboard/user/new/profile', 'create')->middleware(['auth'])->name('profile.create');
});

Route::controller(ReminderController::class)->group(function(){
    Route::get('/dashboard/management/reminder', 'index')->middleware(['auth'])->name('reminder');
});


Route::controller(PlanController::class)->group(function(){
    Route::get('/dashboard/management/plan', 'index')->middleware(['auth'])->name('plan');
    Route::get('/dashboard/management/plan/opinion', 'edite')->middleware(['auth'])->name('plan.edite');
});


require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
