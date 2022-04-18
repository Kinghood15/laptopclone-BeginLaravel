<?php

use Illuminate\Support\Facades\Route;
use App\Models\Categorynews;
use App\Models\Categoryproducts;
use App\Models\Categorysuppliers;
use App\Models\Categorylaptops;
use App\Models\Products;
use App\Models\Imageproducts;
use App\Models\Postnews;
use App\Models\PostProducts;
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
    return view('home');
    return view('layout.welcome');
});
Route::get('/tin-tuc', function () {
    return view('listcategorynews');
    return view('layout.welcome');
});
Route::get('/tin-tuc/{id}', function ($id) {
    $postnewbyid =Postnews::where('id_categorynews',$id)->orderBy('created_at', "desc")->get();
    $categorynewbyid = Categorynews::where('id',$id)->get('name_categorynew');
    return view('categorynews',compact('categorynewbyid','postnewbyid'));
    return view('layout.welcome');
});

Route::get('/tin-tuc/{id}/bai-viet/{id_post}', function ($id,$id_post) {
    $postnewbyid =Postnews::where('id',$id_post)->where('id_categorynews',$id)->get();
    $categorynewbyid = Categorynews::where('id',$id)->get('name_categorynew');
    return view('post',compact('postnewbyid','categorynewbyid'));
    return view('layout.welcome');
});

Route::get('/san-pham', function () {
    $imageproduct = Imageproducts::all('image_product1','id_products');
    $productall = Products :: all();
    $categoryproductall = Categoryproducts::all('id','name_categoryproduct');
    return view('product',compact('productall','imageproduct','categoryproductall'));
    return view('layout.welcome');
});

Route::get('/san-pham/{id}', function ($id) {
    $categoryproductall = Categoryproducts::all('id','name_categoryproduct');
    $imageproduct = Imageproducts::all('image_product1','id_products');
    $productall = Products :: where('id_categoryproducts',$id)->get();
    return view('product',compact('productall','imageproduct','categoryproductall'));
    return view('layout.welcome');
});

Route::get('/san-pham/{id}/chi-tiet-san-pham/{id_post}', function ($id,$id_post) {
    $productsbyid = Products :: where('id',$id_post)->where('id_categoryproducts',$id)->get();
    $imageproduct = Imageproducts::where('id_products',$id_post)->get('image_product1','image_product2','image_product3','id_products');
    // $postnewbyid =Postnews::where('id',$id_post)->where('id_categorynews',$id)->get();
    $categoryproductall = Categoryproducts::all('id','name_categoryproduct');
    $postproductall = Postproducts::where('id_products',$id_post)->get();
    return view('productdetails',compact('productsbyid','imageproduct','categoryproductall','postproductall'));
    return view('layout.welcome');
});