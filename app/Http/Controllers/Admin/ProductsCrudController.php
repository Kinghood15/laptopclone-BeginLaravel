<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Products::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/products');
        CRUD::setEntityNameStrings('sản phẩm', 'Sản phẩm');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name_product')->label('Tên sản phẩm');
        // CRUD::column('cpu');
        // CRUD::column('gpu');
        // CRUD::column('memory')->label('Bộ nhớ');
        // CRUD::column('ram');
        // CRUD::column('display')->label('Màn hình');
        // CRUD::column('color')->label('Màu');
        // CRUD::column('weight')->label('Khối lượng');
        // CRUD::column('id_categorylaptops');
        CRUD::column('quanlity')->label('Số lượng');
        CRUD::column('discount')->label('Giảm giá');
        CRUD::column('quotedprice')->label('Giá niêm yết')->suffix(" VNĐ");
        CRUD::column('price')->label('Giá sản phẩm')->suffix(" VNĐ");
        CRUD::addColumn([
            // 1-n relationship
            'label'          => 'Danh mục sản phẩm', // Table column heading
            'type'           => 'select',
            'name'           => 'id_categoryproducts', // the column that contains the ID of that connected entity;
            'entity'         => 'categoryproducts', // the method that defines the relationship in your Model
            'attribute'      => 'name_categoryproduct', // foreign key attribute that is shown to user
            'model' => '\App\Models\Categoryproducts',
            
        ]);
        CRUD::addColumn([
            // 1-n relationship
            'label'          => 'Danh mục laptop', // Table column heading
            'type'           => 'select',
            'name'           => 'id_categorylaptops', // the column that contains the ID of that connected entity;
            'entity'         => 'categorylaptops', // the method that defines the relationship in your Model
            'attribute'      => 'name_categorylaptop', // foreign key attribute that is shown to user
            'model' => '\App\Models\Categorylaptops',
            
        ]);
        CRUD::column('created_at');
        CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductsRequest::class);

        
        CRUD::field('name_product');
        CRUD::field('cpu');
        CRUD::field('gpu');
        CRUD::field('memory');
        CRUD::field('ram');
        CRUD::field('display');
        CRUD::field('color');
        CRUD::field('weight');
        CRUD::field('quanlity');
        CRUD::field('discount');
        CRUD::field('quotedprice');
        CRUD::field('price');
        CRUD::field('id_categoryproducts')->label('Danh mục sản phẩm')->type('select')->entity('categoryproducts')->model('\App\Models\Categoryproducts')->attribute('name_categoryproduct')->options( function ($query) { return $query->orderBy('name_categoryproduct','ASC')->get();} );
        CRUD::field('id_categorylaptops')->label('Danh mục laptop')->type('select')->entity('categorylaptops')->model('\App\Models\Categorylaptops')->attribute('name_categorylaptop')->options( function ($query) { return $query->orderBy('name_categorylaptop','ASC')->get();} );

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
