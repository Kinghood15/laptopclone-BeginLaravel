<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Categoryproducts;

class CategoryproductsController extends Controller
{
    public function index(Request $request){
        $categoryproducts = Categoryproducts::all(['name_categoryproduct','descriptionproduct','imageproduct']);
        return $categoryproducts;
    }

    public function store(Request $request){

    }

    public function show($name_categoryproducts){
        $total = explode('-',$name_categoryproducts);
        $name_categoryproducts =implode(' ',$total);
        $categoryproducts = Categoryproducts::where('name_categorylaptop',$name_categoryproducts)->limit(1)->get(['name_categoryproduct','descriptionproduct','imageproduct']);
        // $categorylaptops = Categorylaptops::where('name_categorylaptop','LIKE','%'.$name_categorylaptops.'%')->get('name_categorylaptop','description_categorylaptop','image_categorylaptop');
        return $categoryproducts; 
    }
}
