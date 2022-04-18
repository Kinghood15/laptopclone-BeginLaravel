<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
require 'VnConvertStringURL.php';
use Illuminate\Http\Request;
use App\Models\Postnews;
use App\Models\Categorynews;



class PostnewsController extends Controller
{
    public function index(Request $request){
        $imageproducts = Postnews::limit(10)->get(['title_postnews','Image_postnew']);
        return $imageproducts;
    }

    public function store(Request $request){

    }

    public function showByCategorynews($name_categorynews){
        $total_name_categorynews = explode('-',$name_categorynews);
        $name_categorynews =implode(' ',$total_name_categorynews);
        $name_categorynew=vn_to_str($name_categorynews); 
        // $name_categorynews=$this->vn_to_str($name_categorynews); 
        $FindCategorynewByName = Categorynews::where('name_categorynew','LIKE','%'.$name_categorynew.'%')->value('id');
        // $postnews = Postnews::all();
        $postnews = Postnews::where('id_categorynews',$FindCategorynewByName)->get(['title_postnews','description_postnews','Image_postnew','updated_at']);
        return $postnews;
    }

    public function showCountByCategorynews($name_categorynews){
        $total_name_categorynews = explode('-',$name_categorynews);
        $name_categorynews =implode(' ',$total_name_categorynews);
        $name_categorynews=vn_to_str($name_categorynews); 
        $FindCategorynewByName = Categorynews::where('name_categorynew','LIKE','%'.$name_categorynews.'%')->value('id');
        $countpostnews = Postnews::where('id_categorynews',$FindCategorynewByName)->count();
        return $countpostnews; 
    }

    public function show($name_categorynews,$namepostnews){
        $total_name_categorynews = explode('-',$name_categorynews);
        $name_categorynews =implode(' ',$total_name_categorynews);
        $name_categorynews=vn_to_str($name_categorynews); 
        $FindCategorynewByName = Categorynews::where('name_categorynew',$name_categorynews)->limit(1)->get('id');
        $total_name_postnews = explode('-',$namepostnews);
        $name_postnews =implode(' ',$total_name_postnews);
        $name_postnews=vn_to_str($name_postnews); 
        $postnews = Postnews::where('id_categorynews',$FindCategorynewByName,'and','title_postnews','LIKE','%'.$name_postnews.'%')->limit(1)->get(['title_postnews','description_postnews','Image_postnew','updated_at']);
        // $categorylaptops = Categorylaptops::where('name_categorylaptop','LIKE','%'.$name_categorylaptops.'%')->get('name_categorylaptop','description_categorylaptop','image_categorylaptop');
        return $postnews; 
    }
}
