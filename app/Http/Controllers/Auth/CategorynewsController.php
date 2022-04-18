<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
require 'VnConvertStringURL.php';
use Illuminate\Http\Request;
use App\Models\Categorynews;

class CategorynewsController extends Controller
{
    public function index(Request $request){
        $categorynews = Categorynews::all(['name_categorynew','description_categorynew']);
        return $categorynews;
    }

    public function store(Request $request){

    }

    public function show($name_categorynews){
        $total = explode('-',$name_categorynews);
        $name_categorynews =implode(' ',$total);
        $name_categorynews=vn_to_str($name_categorynews); 
        $categorynews = Categorynews::where('name_categorynew','LIKE',$name_categorynews)->limit(1)->get(['name_categorynew','description_categorynew']);
        // $categorynews = categorynews::where('name_categorylaptop','LIKE','%'.$name_categorynews.'%')->get('name_categorylaptop','description_categorylaptop','image_categorylaptop');
        return $categorynews; 
    }
}
