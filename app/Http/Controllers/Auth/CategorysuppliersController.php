<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorysuppliers;

class CategorysuppliersController extends Controller
{
    public function index(Request $request){
        $categorysuppliers = Categorysuppliers::all(['name_categorysupplier','image_categorysupplier']);
        return $categorysuppliers;
    }

    public function store(Request $request){

    }

    public function show($name_categorysuppliers){
        $total = explode('-',$name_categorysuppliers);
        $name_categorysuppliers =implode(' ',$total);
        $categorylaptops = Categorysuppliers::where('name_categorylaptop',$name_categorysuppliers)->limit(1)->get(['name_categorysupplier','image_categorysupplier']);
        // $categorylaptops = Categorylaptops::where('name_categorylaptop','LIKE','%'.$name_categorylaptops.'%')->get('name_categorylaptop','description_categorylaptop','image_categorylaptop');
        return $categorylaptops; 
    }
}
