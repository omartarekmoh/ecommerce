<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\board\ProductController;
use App\Http\Controllers\board\CategoryController;
use App\Http\Controllers\board\productAttributeController;
use App\Http\Controllers\board\SubCategoryController;

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
   return view('board.layouts.app');
});


Route::group(
   [
      'prefix' => LaravelLocalization::setLocale(),
      'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
   ],
   function () {
      Route::resource('category', CategoryController::class)->except(['show']);
      Route::resource('subcategory', SubCategoryController::class)->except(['show']);
      Route::resource('product', ProductController::class)->except(['show']);
      Route::resource('product-attribute', productAttributeController::class)->except(['show']);
   }
);
