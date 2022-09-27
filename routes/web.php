<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[mycontroller::class,'home'])->name('home');
Route::get('/team',[mycontroller::class,'team'])->name('team');
Route::get('/history',[mycontroller::class,'history'])->name('history');
Route::get('/myorder',[mycontroller::class,'myorder'])->name('myorder');
Route::get('/passenger',[mycontroller::class,'passenger'])->name('passenger');
Route::get('/about_us',[mycontroller::class,'about_us'])->name('about_us');
Route::get('/driver',[mycontroller::class,'driver'])->name('driver');
Route::get('/singup',[mycontroller::class,'sign_up'])->name('sing_up');
Route::get('/booking',[mycontroller::class,'booking'])->name('booking');
Route::get('/mylogin',[mycontroller::class,'login'])->name('mylogin');
Route::post('/hi',[mycontroller::class,'store_user'])->name('store_user');
Route::post('/store',[mycontroller::class,'store_driver'])->name('store_driver');
Route::post('/storelogin',[mycontroller::class,'store_login'])->name('store_login');
Route::get('/log',[mycontroller::class,'my_logout'])->name('my_logout');
Route::post('/store_trip',[mycontroller::class,'store_trip'])->name('store_trip');
Route::get('/driver_pro',[mycontroller::class,'driver_pro'])->name('driver_pro');
Route::get('/customer_pro',[mycontroller::class,'customer_pro'])->name('customer_pro');
Route::post('/store_trip',[mycontroller::class,'store_trip'])->name('store_trip');
Route::get('/customer_trip',[mycontroller::class,'customer_trip'])->name('customer_trip');
Route::get('/driver_requsisite',[mycontroller::class,'driver_requsisite'])->name('driver_requsisite');
Route::get('/driver_trip',[mycontroller::class,'driver_trip'])->name('driver_trip');
Route::post('/he',[mycontroller::class,'finish'])->name('he');
Route::post('/delete/{trip}',[mycontroller::class,'destroy'])->name('delete');
Route::get('/my_trip',[mycontroller::class,'my_trip'])->name('my_trip');
Route::post('/store_bookin',[mycontroller::class,'store_bookin'])->name('store_bookin');
Route::get('/admin',[mycontroller::class,'admin'])->name('admin');
Route::get('/admin_driver',[mycontroller::class,'admin_driver'])->name('admin_driver');
Route::get('/admin_order',[mycontroller::class,'admin_order'])->name('admin_order');
Route::get('/card/{trip}',[mycontroller::class,'card'])->name('card');
Route::get('/delete_admin/{user}',[mycontroller::class,'delete_admin'])->name('delete_admin');
Route::get('/delete_order/{trip}',[mycontroller::class,'delete_order'])->name('delete_order');
Route::get('/delete_driver/{driver}',[mycontroller::class,'delete_driver'])->name('delete_driver');
Route::get('/search',[mycontroller::class,'search'])->name('search');
Route::get('/driver_req',[mycontroller::class,'driver_req'])->name('driver_req');








Auth::routes();

Route::get('/Home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home');
