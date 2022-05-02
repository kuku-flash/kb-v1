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
Route :: get ('post_ad',  [PagesController::class, 'post_ad'])->name('post_ad');
Route :: get ('blog',  [PagesController::class, 'blog'])->name('blog');
Route :: get ('houses',  [PagesController::class, 'houses'])->name('houses');
Route :: get ('contact_us',  [PagesController::class, 'contact_us'])->name('contact_us');
Route :: get ('dashboard_archived_ads',  [PagesController::class, 'dashboard_archived_ads'])->name('dashboard_archived_ads');
Route :: get ('dashboard_favourite_ads',  [PagesController::class, 'dashboard_favourite_ads'])->name('dashboard_favourite_ads');
Route :: get ('dashboard_my_ads',  [PagesController::class, 'dashboard_my_ads'])->name('dashboard_my_ads');
Route :: get ('dashboard_pending_ads',  [PagesController::class, 'dashboard_pending_ads'])->name('dashboard_pending_ads');
Route :: get ('dashboard',  [PagesController::class, 'dashboard'])->name('dashboard');
Route :: get ('user/login',  [PagesController::class, 'login'])->name('user.login');
Route :: get ('package',  [PagesController::class, 'package'])->name('package');
Route :: get ('register',  [PagesController::class, 'register'])->name('register');
Route :: get ('single_blog',  [PagesController::class, 'single_blog'])->name('single_blog');
Route :: get ('terms_condition',  [PagesController::class, 'terms_condition'])->name('terms_condition');
Route :: get ('user_profile',  [PagesController::class, 'user_profile'])->name('user_profile');

//post ad routes
Route::get('/postad/category', 'PostAdController@category')->name('postad.category');
Route::get('/postad/subcategory', 'PostAdController@subcategory')->name('postad.subcategory');
Route::get('/postad/city', 'PostAdController@city')->name('postad.city');
Route::get('/postad/model', 'PostAdController@model')->name('postad.model');



Route::get('/postad/apartment_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_apartment_ad_post')->name('postad.apartment_ad_post');
Route::post('/postad/apartment_ad_post/', 'PostAdController@store_apartment_ad_post')->name('postad.store_apartment_ad_post');
Route::get('/postad/apartment_ad_show/{apartment_ad}', 'PostAdController@show_apartment_ad_post')->name('postad.show_apartment_ad_post');
Route::get('/postad/{apartment_ad}/apartment_ad_edit', 'PostAdController@edit_apartment_ad')->name('postad.edit_apartment_ad');
Route::put('/postad/apartment_ad_update/{apartment_ad}', 'PostAdController@update_apartment_ad')->name('postad.update_apartment_ad');
Route::delete('/postad/apartment_ad_destroy/{apartment_ad}', 'PostAdController@apartment_ad_destroy')->name('postad.destory_apartment_ad');
Route::get('/postad/apartment_ad_pay/{apartment_ad}', 'PostAdController@pay_apartment_ad')->name('postad.pay_apartment_ad_post');

Route::get('/postad/car_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_car_ad_post')->name('postad.car_ad_post');
Route::post('/postad/car_ad_post/', 'PostAdController@store_car_ad_post')->name('postad.store_car_ad_post');
Route::get('/postad/car_ad_show/{car_ad}', 'PostAdController@show_car_ad_post')->name('postad.show_car_ad_post');
Route::get('/postad/{car_ad}/car_ad_edit', 'PostAdController@edit_car_ad')->name('postad.edit_car_ad');
Route::put('/postad/car_ad_update/{car_ad}', 'PostAdController@update_car_ad')->name('postad.update_car_ad');
Route::delete('/postad/car_ad_destroy/{car_ad}', 'PostAdController@car_ad_destroy')->name('postad.destory_car_ad');
Route::get('/postad/car_ad_pay/{car_ad}', 'PostAdController@pay_car_ad')->name('postad.pay_car_ad_post');


Route::get('/postad/house_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_house_ad_post')->name('postad.house_ad_post');
Route::post('/postad/house_ad_post/', 'PostAdController@store_house_ad_post')->name('postad.store_house_ad_post');
Route::get('/postad/house_ad_show/{house_ad}', 'PostAdController@show_house_ad_post')->name('postad.show_house_ad_post');
Route::get('/postad/{house_ad}/house_ad_edit', 'PostAdController@edit_house_ad')->name('postad.edit_house_ad');
Route::put('/postad/house_ad_update/{house_ad}', 'PostAdController@update_house_ad')->name('postad.update_house_ad');
Route::delete('/postad/house_ad_destroy/{house_ad}', 'PostAdController@house_ad_destroy')->name('postad.destory_house_ad');
Route::get('/postad/house_ad_pay/{house_ad}', 'PostAdController@pay_house_ad')->name('postad.pay_house_ad_post');

Route::get('/postad/land_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_land_ad_post')->name('postad.land_ad_post');
Route::post('/postad/land_ad_post/', 'PostAdController@store_land_ad_post')->name('postad.store_land_ad_post');
Route::get('/postad/land_ad_show/{land_ad}', 'PostAdController@show_land_ad_post')->name('postad.show_land_ad_post');
Route::get('/postad/{land_ad}/land_ad_edit', 'PostAdController@edit_land_ad')->name('postad.edit_land_ad');
Route::put('/postad/land_ad_update/{land_ad}', 'PostAdController@update_land_ad')->name('postad.update_land_ad');
Route::delete('/postad/land_ad_destroy/{land_ad}', 'PostAdController@land_ad_destroy')->name('postad.destory_land_ad');
Route::get('/postad/land_ad_pay/{land_ad}', 'PostAdController@pay_land_ad')->name('postad.pay_land_ad_post');

Auth::routes();

Route::group(['middleware' => ['auth:web'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get ('/dashboard',  [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('package', PackageController::class);
    Route::resource('carmake', CarmakeController::class);
    Route::resource('carmodel', CarmodelController::class);
    Route::resource('city', CityController::class);
    Route::resource('county', CountyController::class);

});