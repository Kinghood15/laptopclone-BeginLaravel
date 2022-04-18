<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
require 'VnConvertStringURL.php';
use Illuminate\Http\Request;
use App\Models\Categorylaptops;

class CategorylaptopsController extends Controller
{
    public function index(Request $request){
        $categorylaptops = Categorylaptops::all(['name_categorylaptop','description_categorylaptop','image_categorylaptop']);
        return $categorylaptops;
    }

    public function store(Request $request){

    }

    public function show($name_categorylaptops){
        $total = explode('-',$name_categorylaptops);
        $name_categorylaptops =implode(' ',$total);
        $name_categorylaptops=vn_to_str($name_categorylaptops); 
        $categorylaptops = Categorylaptops::where('name_categorylaptop','LIKE',$name_categorylaptops)->limit(1)->get(['name_categorylaptop','description_categorylaptop','image_categorylaptop']);
        // $categorylaptops = Categorylaptops::where('name_categorylaptop','LIKE','%'.$name_categorylaptops.'%')->get('name_categorylaptop','description_categorylaptop','image_categorylaptop');
        return $categorylaptops; 
    }
}
