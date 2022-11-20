<?php

use App\Http\Controllers\board\BlogCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\board\BlogController;
use App\Http\Controllers\board\RoleController;
use App\Http\Controllers\board\ProductController;
use App\Http\Controllers\board\CategoryController;
use App\Http\Controllers\board\CustomerController;
use App\Http\Controllers\board\DiscountController;
use App\Http\Controllers\board\OfferController;
use App\Http\Controllers\board\PartialsController;
use App\Http\Controllers\board\SubCategoryController;
use App\Http\Controllers\board\productAttributeController;
use App\Http\Controllers\board\ReviewController;

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




Route::group(
   [
      'prefix' => LaravelLocalization::setLocale(),
      'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', ]
   ],
   function () {

      Auth::routes();   
      Route::group(['middleware' => 'auth'], function () {
         Route::get('/', function () {
            // dd(auth()->user());
            return view('board.layouts.app');
         });
         Route::resource('category', CategoryController::class)->except(['show']);
         Route::resource('subcategory', SubCategoryController::class)->except(['show']);
         Route::resource('product', ProductController::class)->except(['show']);
         Route::resource('product-attribute', productAttributeController::class)->except(['show']);
         Route::resource('customer', CustomerController::class)->except(['edit']);
         Route::resource('blog', BlogController::class)->except(['show']);
         Route::resource('blog_category', BlogCategoryController::class)->except(['show']);
         Route::resource('discount', DiscountController::class)->except(['show']);
         Route::resource('offer', OfferController::class)->except(['show']);
         Route::resource('role', RoleController::class)->except(['show']);
         Route::get('review', [ReviewController::class, 'index'])->name('review.index');
   
   
   
         Route::get('contact', [PartialsController::class, 'contact'])->name('contact.edit');
         Route::get('about', [PartialsController::class, 'about'])->name('about.edit');
         Route::get('terms', [PartialsController::class, 'terms'])->name('terms.edit');
         Route::put('terms', [PartialsController::class, 'termsUpdate'])->name('terms.update');
         Route::put('about', [PartialsController::class, 'aboutUpdate'])->name('about.update');
         Route::put('contact', [PartialsController::class, 'contactUpdate'])->name('contact.update');
      });
      
   }
);
