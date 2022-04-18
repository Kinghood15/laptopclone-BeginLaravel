<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Postproducts;
use App\Models\Categorynews;

class PostproductsController extends Controller
{
    public function index(Request $request){
        $imageproducts = Postnews::limit(10)->get(['title_postnews','Image_postnew']);
        return $imageproducts;
    }

    public function store(Request $request){

    }

    public function show($id_products){
        $imageproducts = Postnews::where('id_products',$id_products)->limit(1)->get(['image_product1','image_product2','image_product3']);
        // $categorylaptops = Categorylaptops::where('name_categorylaptop','LIKE','%'.$name_categorylaptops.'%')->get('name_categorylaptop','description_categorylaptop','image_categorylaptop');
        return $imageproducts; 
    }
}
