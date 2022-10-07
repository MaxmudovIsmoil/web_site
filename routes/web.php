<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CertifiController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\SectionController;


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

Auth::routes();
Route::group(['middleware' => 'auth'], function() {



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('category', CategoryController::class);
Route::resource('sub-category', SubCategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('partner',PartnerController::class);
Route::resource('news',NewsController::class);
Route::resource('certifi',CertifiController::class);
Route::resource('text',TextController::class);
Route::resource('slider',SliderController::class);
Route::resource('contact',ContactController::class);
Route::resource('about',AboutController::class);
Route::resource('image',ImagesController::class);
Route::resource('section',SectionController::class);
Route::get('category/{id?}/delete', [CategoryController::class,'destroy'])->name('category.delete');
Route::get('sub-category/{id?}/delete', [SubCategoryController::class,'destroy'])->name('sub-category.delete');
Route::get('product/{id?}/delete', [ProductController::class,'destroy'])->name('product.delete');
Route::get('partner/{id?}/delete', [PartnerController::class,'destroy'])->name('partner.delete');
Route::get('news/{id?}/delete', [NewsController::class,'destroy'])->name('news.delete');
Route::get('certifi/{id?}/delete', [CertifiController::class,'destroy'])->name('certifi.delete');
Route::get('text/{id?}/delete', [TextController::class,'destroy'])->name('text.delete');
Route::get('slider/{id?}/delete', [SliderController::class,'destroy'])->name('slider.delete');
Route::get('image/{id?}/delete', [ImagesController::class,'destroy'])->name('image.delete');
Route::post('cat/get_subcat', [HomeController::class,'getCat']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::get('/locale/{locale}',[HomeController::class,'switch']);
Route::get('/',[HomeController::class,'index']);
Route::get('/contact-us',[HomeController::class,'contactUs'])->name('contact-us');
Route::get('/about-us',[HomeController::class,'aboutUs'])->name('about-us');
Route::get('/news-us',[HomeController::class,'newsUs'])->name('news-us');
Route::get('news-single/{id?}', [HomeController::class,'newsSingle'])->name('news_single');
Route::get('product-single/{id?}', [HomeController::class,'productSingle'])->name('product_single');
Route::get('printers/{id?}', [HomeController::class,'printers'])->name('printers');
