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
use App\Http\Controllers\Admin\Allusercontroller;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminListingController;
use App\Http\Controllers\User\ListingController;
use App\Http\Controllers\User\UserController;
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
Route :: get ('carmodel',  [PagesController::class, 'carmodel'])->name('carmodel');
Route :: get ('category',  [PagesController::class, 'category'])->name('category');
Route :: get ('single',  [PagesController::class, 'single'])->name('single');
Route :: get ('about_us',  [PagesController::class, 'about_us'])->name('about_us');
Route :: get ('ad_list_view',  [PagesController::class, 'ad_list_view'])->name('ad_list_view');
Route :: get ('blog',  [PagesController::class, 'blog'])->name('blog');
Route :: get ('contact_us',  [PagesController::class, 'contact_us'])->name('contact_us');
Route :: get ('signup',  [PagesController::class, 'signup'])->name('signup');
Route :: post ('storeuser',  [PagesController::class, 'storeuser'])->name('storeuser');
Route :: get ('user/login',  [PagesController::class, 'login'])->name('user.login');
Route :: get ('package',  [PagesController::class, 'package'])->name('package');
Route :: get ('register',  [PagesController::class, 'register'])->name('register');
Route :: get ('vehicle_search',  [PagesController::class, 'vehicle_search'])->name('vehicle_search');
Route :: get ('vehicle_filter/{vehicle}',  [PagesController::class, 'vehicle_filter'])->name('vehicle_filter');
Route :: get ('vehicles_grid',  [PagesController::class, 'vehicles_grid'])->name('vehicles_grid');
Route :: get ('vehicles_list',  [PagesController::class, 'vehicles_list'])->name('vehicles_list');
Route :: get ('vehicle/{listing}/{vehicle}',  [PagesController::class, 'vehicle'])->name('vehicle');
Route :: get ('post_ad_form',  [PagesController::class, 'post_ad_form'])->name('post_ad_form');
Route :: get ('single_blog',  [PagesController::class, 'single_blog'])->name('single_blog');
Route :: get ('terms_condition',  [PagesController::class, 'terms_condition'])->name('terms_condition');


Auth::routes();

Route::group(['middleware' => ['auth:web'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get ('/dashboard',  [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('package', PackageController::class);
    Route::resource('carmake', CarmakeController::class);
    Route::resource('carmodel', CarmodelController::class);
    Route::resource('city', CityController::class);
    Route::resource('county', CountyController::class);
    Route::resource('user', Allusercontroller::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::get ('listing',  [AdminListingController::class, 'index'])->name('listing.index');
    Route::get ('edit_listing/{listing}',  [AdminListingController::class, 'edit'])->name('listing.edit');
    Route::put ('update_listing/{listing}',  [AdminListingController::class, 'update'])->name('listing.update');
    Route::get ('listing/{listing}',  [AdminListingController::class, 'delete'])->name('listing.delete');
    Route::get ('vehicle',  [AdminListingController::class, 'vehicles'])->name('listing.vehicles');

});

Route::group(['middleware' => ['auth:web'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route :: get ('archived_list',  [ListingController::class, 'archived_list'])->name('archived_list');
    Route :: get ('favourite_list',  [ListingController::class, 'favourite_list'])->name('favourite_list');
    Route :: get ('my_list',  [ListingController::class, 'my_list'])->name('my_list');
    Route :: get ('pending_list',  [ListingController::class, 'pending_list'])->name('pending_list');
    Route :: get ('create_listing',  [ListingController::class, 'create_listing'])->name('create_listing');
    Route :: get ('create_listing2',  [ListingController::class, 'create_listing2'])->name('create_listing2');
    Route :: post ('store_listing',  [ListingController::class, 'store_listing'])->name('store_listing');
    Route :: get ('edit_listing/{listing}/{vehicle}',  [ListingController::class, 'edit_listing'])->name('edit_listing');
    Route :: put ('update_listing/{listing}/{vehicle}',  [ListingController::class, 'update_listing'])->name('update_listing');
    Route :: get ('show_listing/{listing}/{vehicle}',  [ListingController::class, 'show_listing'])->name('show_listing');
    Route :: delete ('delete_listing/{listing}/{vehicle}',  [ListingController::class, 'delete_listing'])->name('delete_listing');
    Route :: get ('category',  [ListingController::class, 'category'])->name('category');
    Route :: get ('vehicle_ad',  [ListingController::class, 'vehicle_ad'])->name('vehicle_ad');
    Route :: post ('store_vehicle_ad',  [ListingController::class, 'store_vehicle_ad'])->name('store_vehicle_ad');
    Route :: get ('model',  [ListingController::class, 'model'])->name('model');
    Route :: get ('invoice/{listing}/{vehicle}',  [ListingController::class, 'invoice'])->name('invoice');
   


});
Route::group(['middleware' => ['auth:web'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route :: get ('user_profile/{user}',  [UserController::class, 'user_profile'])->name('user_profile');
    Route :: put ('update_user/{user}',  [UserController::class, 'update_user'])->name('update_user');

});

Route::  get('user/export', [ListingController::class, 'export'])->name('export');
Route::  get('user/exportpackage', [ListingController::class, 'exportpackage'])->name('exportpackage');