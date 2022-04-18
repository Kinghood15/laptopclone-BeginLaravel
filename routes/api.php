<?php

use App\Http\Controllers\Auth\CategorylaptopsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Categorynews;
use App\Models\Categoryproducts;
use App\Models\Categorysuppliers;
use App\Models\Categorylaptops;
use App\Models\Products;
use App\Models\ImageProducts;
use App\Models\Postnews;
use App\Models\PostProducts;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/danh-muc-laptop', 'App\Http\Controllers\Auth\CategorylaptopsController@index');

Route::get('/danh-muc-laptop/{name_categorylaptops}', 'App\Http\Controllers\Auth\CategorylaptopsController@show');

Route::get('/danh-muc-tin-tuc', 'App\Http\Controllers\Auth\CategorynewsController@index');

Route::get('/danh-muc-tin-tuc/{name_categorynews}', 'App\Http\Controllers\Auth\CategorynewsController@show');

Route::get('/danh-muc-san-pham', 'App\Http\Controllers\Auth\CategoryproductsController@index');

Route::get('/danh-muc-san-pham/{name_categoryproducts}', 'App\Http\Controllers\Auth\CategoryproductsController@show');

Route::get('/nha-cung-cap', 'App\Http\Controllers\Auth\CategorysuppliersController@index');

Route::get('/nha-cung-cap/{name_categorysuppliers}', 'App\Http\Controllers\Auth\CategorysuppliersController@show');

// Route::get('/nha-cung-cap', 'App\Http\Controllers\Auth\CategorysuppliersController@index');

Route::get('/hinh-anh-san-pham/{id_products}', 'App\Http\Controllers\Auth\ImageproductsController@show');

Route::get('/tin-tuc', 'App\Http\Controllers\Auth\PostnewsController@index');

Route::get('/tin-tuc/{name_categorynews}', 'App\Http\Controllers\Auth\PostnewsController@showByCategorynews');

Route::get('/tong-tin-tuc/{name_categorynews}', 'App\Http\Controllers\Auth\PostnewsController@showCountByCategorynews');

Route::get('/tin-tuc/{name_categorynews}/{name_postnews}', 'App\Http\Controllers\Auth\PostnewsController@show');

Route::get('/categorynews/{id}', function ($id) {
    $categorynewbyid = Postnews :: where('title_postnews','Giới thiệu về công ty')->get('Image_postnew');
    return $categorynewbyid;
})->name('categorynewsbyid');