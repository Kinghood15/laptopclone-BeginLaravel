<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Imageproducts;
class ImageproductsController extends Controller
{
    public function index(Request $request){
        // $imageproducts = Imageproducts::all(['image_product1','image_product2','image_product3']);
        // return $imageproducts;
    }

    public function store(Request $request){

    }

    public function show($nameproducts){
        $total = explode('-',$nameproducts);
        $nameproducts =implode(' ',$total);
        $FindProductByName = Products::where('name_product',$nameproducts)->limit(1)->get('id_product');
        $imageproducts = Imageproducts::where('id_products',$FindProductByName)->limit(1)->get(['image_product1','image_product2','image_product3']);
        // $categorylaptops = Categorylaptops::where('name_categorylaptop','LIKE','%'.$name_categorylaptops.'%')->get('name_categorylaptop','description_categorylaptop','image_categorylaptop');
        return $imageproducts; 
    }
}
