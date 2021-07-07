<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;

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
Route :: get ('contact_us',  [PagesController::class, 'contact_us'])->name('contact_us');
Route :: get ('dashboard_archived_ads',  [PagesController::class, 'dashboard_archived_ads'])->name('dashboard_archived_ads');
Route :: get ('dashboard_favourite_ads',  [PagesController::class, 'dashboard_favourite_ads'])->name('dashboard_favourite_ads');
Route :: get ('dashboard_my_ads',  [PagesController::class, 'dashboard_my_ads'])->name('dashboard_my_ads');
Route :: get ('dashboard_pending_ads',  [PagesController::class, 'dashboard_pending_ads'])->name('dashboard_pending_ads');
Route :: get ('dashboard',  [PagesController::class, 'dashboard'])->name('dashboard');
Route :: get ('login',  [PagesController::class, 'login'])->name('login');
Route :: get ('package',  [PagesController::class, 'package'])->name('package');
Route :: get ('register',  [PagesController::class, 'register'])->name('register');
Route :: get ('single_blog',  [PagesController::class, 'single_blog'])->name('single_blog');
Route :: get ('terms_condition',  [PagesController::class, 'terms_condition'])->name('terms_condition');
Route :: get ('user_profile',  [PagesController::class, 'user_profile'])->name('user_profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route :: get ('/admin/dashboard',  [AdminController::class, 'dashboard'])->name('admin.dashboard');