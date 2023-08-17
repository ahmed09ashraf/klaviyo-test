<?php

use App\Http\Controllers\KlaviyoCatalogController;
use App\Http\Controllers\KlaviyoProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlaviyoController;
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
    return view('welcome');
});





Route::get('/create-profile', [KlaviyoProfileController::class, 'createProfile']);
Route::get('/create-catalog', [KlaviyoCatalogController::class, 'createCatalog']);
Route::get('/create-list', [KlaviyoController::class, 'createList']);

Route::get('/products',[ProductController::class,'index'])->name('products.index') ;
Route::get('/products/search',[ProductController::class,'search'])->name('products.search') ;