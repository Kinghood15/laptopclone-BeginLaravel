<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImageproductsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ImageproductsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ImageproductsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Imageproducts::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/imageproducts');
        CRUD::setEntityNameStrings('hình ảnh sản phẩm', 'Hình ảnh sản phẩm');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        
        CRUD::column('image_product1')->label('Hình ảnh sản phẩm')->type('image');
        CRUD::column('image_product2')->label('Hình ảnh sản phẩm')->type('image');
        CRUD::column('image_product3')->label('Hình ảnh sản phẩm')->type('image');
        CRUD::addColumn([
            // 1-n relationship
            'label'          => 'Sản phẩm', // Table column heading
            'type'           => 'select',
            'name'           => 'id_products', // the column that contains the ID of that connected entity;
            'entity'         => 'products', // the method that defines the relationship in your Model
            'attribute'      => 'name_product', // foreign key attribute that is shown to user
            'model' => '\App\Models\Products',
            
        ]);
        CRUD::column('created_at')->label('Ngày khởi tạo');
        CRUD::column('updated_at')->label('Ngày cập nhật');

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
        CRUD::setValidation(ImageproductsRequest::class);

        
        CRUD::field('image_product1')->label('Hình ảnh sản phẩm')->type('image');
        CRUD::field('image_product2')->label('Hình ảnh sản phẩm')->type('image');
        CRUD::field('image_product3')->label('Hình ảnh sản phẩm')->type('image');
        CRUD::field('id_products')->label('Sản phẩm')->type('select')->entity('products')->model('\App\Models\Products')->attribute('name_product')->options( function ($query) { return $query->orderBy('name_product','ASC')->get();} );

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
