<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Categorynews;
use App\Models\Categoryproducts;
use App\Models\Categorysuppliers;
use App\Models\Categorylaptops;
use App\Models\Products;
use App\Models\ImageProducts;
use App\Models\Postnews;
use App\Models\PostProducts;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categorynews = Categorynews::all('id','name_categorynew')->whereNotIn('name_categorynew',['Thông tin sản phẩm','Tin công ty']);
        // $categorynews = Route::get('/categorynew', [CategorynewController::class, 'index']);
        View::share('categorynews', $categorynews);
        $categorylaptoplimits = Categorylaptops :: all('name_categorylaptop','image_categorylaptop','description_categorylaptop')->whereNotIn('name_categorylaptop',"null");
        View::share('categorylaptoplimits', $categorylaptoplimits);

        $categorysupplierlimits = Categorysuppliers :: all('name_categorysupplier','image_categorysupplier')->take(8);
        View::share('categorysupplierlimits', $categorysupplierlimits);

        $postnewslimits = Postnews :: all('title_postnews','Image_postnew','id_categorynews')->where('id_categorynews','10');
        View::share('postnewslimits', $postnewslimits);

        $postnewslimitslides = Postnews :: orderBy('created_at', "desc")->get()->take(10);
        View::share('postnewslimitslides', $postnewslimitslides);

        $postnewsskip = Postnews :: orderBy('created_at', "desc")->get()->skip(10);
        View::share('postnewsskip', $postnewsskip);

        $postnewslimitone = Postnews :: all('title_postnews','description_postnews')->where('title_postnews','Giới thiệu về công ty');
        View::share('postnewslimitone', $postnewslimitone);

        $postnewslimitoneLogo = Postnews :: where('title_postnews','Giới thiệu về công ty')->get('Image_postnew');
        View::share('postnewslimitoneLogo', $postnewslimitoneLogo);

        $categoryproducts = Categoryproducts::all();
        View::share('categoryproducts', $categoryproducts);
        
        $postnew = PostNews::all('title_postnews','description_postnews','id_categorynews');
        // $postnew->('name_categorynews') = Categorynew::all('name_categorynews')->where('id',$postnew->id_categorynews);
    }
}
