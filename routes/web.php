<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\CarmakeController;
use App\Http\Controllers\Admin\CarmodelController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountyController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Auth;

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

Route :: get ('/',  [PagesController::class, 'index'])->name('index');
Route :: get ('category',  [PagesController::class, 'category'])->name('category');
Route :: get ('single',  [PagesController::class, 'single'])->name('single');
Route :: get ('about_us',  [PagesController::class, 'about_us'])->name('about_us');
Route :: get ('ad_list_view',  [PagesController::class, 'ad_list_view'])->name('ad_list_view');
Route :: get ('blog',  [PagesController::class, 'blog'])->name('blog');
Route :: get ('contact_us',  [PagesController::class, 'contact_us'])->name('contact_us');
Route :: get ('user/login',  [PagesController::class, 'login'])->name('user.login');
Route :: get ('package',  [PagesController::class, 'package'])->name('package');
Route :: get ('register',  [PagesController::class, 'register'])->name('register');
Route :: get ('vehicles',  [PagesController::class, 'vehicles'])->name('vehicles');
Route :: get ('post_ad_form',  [PagesController::class, 'post_ad_form'])->name('post_ad_form');
Route :: get ('single_blog',  [PagesController::class, 'single_blog'])->name('single_blog');
Route :: get ('terms_condition',  [PagesController::class, 'terms_condition'])->name('terms_condition');
Route :: get ('user_profile',  [PagesController::class, 'user_profile'])->name('user_profile');

Auth::routes();

Route::group(['middleware' => ['auth:web'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get ('/dashboard',  [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('package', PackageController::class);
    Route::resource('carmake', CarmakeController::class);
    Route::resource('carmodel', CarmodelController::class);
    Route::resource('city', CityController::class);
    Route::resource('county', CountyController::class);
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);

});

Route::group(['middleware' => ['auth:web'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get ('/dashboard',  [DashboardController::class, 'myads'])->name('dashboard');
    Route :: get ('dashboard_archived_ads',  [DashboardController::class, 'dashboard_archived_ads'])->name('dashboard_archived_ads');
    Route :: get ('dashboard_favourite_ads',  [DashboardController::class, 'dashboard_favourite_ads'])->name('dashboard_favourite_ads');
    Route :: get ('dashboard_my_ads',  [DashboardController::class, 'dashboard_my_ads'])->name('dashboard_my_ads');
    Route :: get ('dashboard_pending_ads',  [DashboardController::class, 'dashboard_pending_ads'])->name('dashboard_pending_ads');
    Route :: get ('dashboard',  [DashboardController::class, 'dashboard'])->name('dashboard');
    Route :: get ('listing',  [DashboardController::class, 'create_listing'])->name('listing');
    Route :: post ('store_listing',  [DashboardController::class, 'store_listing'])->name('store_listing');
    Route :: get ('category',  [DashboardController::class, 'category'])->name('category');
    Route :: get ('vehicle_ad',  [DashboardController::class, 'vehicle_ad'])->name('vehicle_ad');
    Route :: get ('model',  [DashboardController::class, 'model'])->name('model');
   



});

Route::  get('user/export', [DashboardController::class, 'export'])->name('export');
Route::  get('user/exportpackage', [DashboardController::class, 'exportpackage'])->name('exportpackage');