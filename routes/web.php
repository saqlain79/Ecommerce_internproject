<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/',[HomeController::class,'show_homepage']);

Route::get('/contactus', [HomeController::class ,'contact_us']);

Route::get('/admin', [HomeController::class, 'admin_dashboard']);

Route::get('/show_table', [CatagoryController::class,'show_table']);

Route::get('/create_catagory', [CatagoryController::class, 'create_catagory']);

Route::get('/store_catagory', [CatagoryController::class, 'store_catagory']);

Route::get('/edit_catagory/{id}', [CatagoryController::class, 'edit_catagory']);

Route::put('/update_catagory/{id}', [CatagoryController::class, 'update_catagory']);

Route::get('/delete_catagory/{id}', [CatagoryController::class, 'delete_catagory']);

Route::get('/show_product', [ProductController::class, 'show_product']);

Route::get('/create_product', [ProductController::class, 'create_product']);

Route::get('/store_product', [ProductController::class, 'store_product']);

Route::get('/edit_product', [ProductController::class, 'edit_product']);

Route::put('/update_product', [ProductController::class, 'update_product']);

Route::get('/delete_product', [ProductController::class, 'delete_product']);


