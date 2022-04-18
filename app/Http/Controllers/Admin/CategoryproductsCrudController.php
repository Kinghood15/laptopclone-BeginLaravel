<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryproductsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CategoryproductsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CategoryproductsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Categoryproducts::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/categoryproducts');
        CRUD::setEntityNameStrings('danh mục sản phẩm', 'Danh mục sản phẩm');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        
        CRUD::column('name_categoryproduct')->label('Tên danh mục sản phẩm');
        // CRUD::column('descriptionproduct')->label('Mô tả')->type('textarea');
        CRUD::column('imageproduct')->label('Hình ảnh mô tả')->type('image');
        CRUD::column('created_at')->label('Ngày khởi tạo');
        CRUD::column('updated_at')->label('Ngày cập nhật');


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }
    protected function setupShowOperation()
    {
        
        CRUD::column('name_categoryproduct')->label('Tên danh mục sản phẩm');
        CRUD::column('descriptionproduct')->label('Mô tả')->type('textarea');
        CRUD::column('imageproduct')->label('Hình ảnh mô tả')->type('image');
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
        CRUD::setValidation(CategoryproductsRequest::class);

        
        CRUD::field('name_categoryproduct')->label('Tên danh mục sản phẩm');
        CRUD::field('descriptionproduct')->type('ckeditor')->label('Mô tả');
        CRUD::field('imageproduct')->label('Hình ảnh')->type('image');

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
