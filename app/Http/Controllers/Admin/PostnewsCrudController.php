<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostnewsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PostnewsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PostnewsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Postnews::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/postnews');
        CRUD::setEntityNameStrings('bài viết tin tức, khuyến mại', 'Bài viết tin tức, khuyến mại');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::filter('select2')
        //     ->type('select2')
        //     ->label('Danh mục tin tức')
        //     ->values(function () {
        //         return \App\Models\Categorynews::all('name_categorynew');
        //     })->apply();
        // CRUD::addFilter([
        //     'label'          => 'Danh mục tin tức', // Table column heading
        //     'name'           => 'id_categorynews', // the column that contains the ID of that connected entity;
        //     'entity'         => 'categorynews', // the method that defines the relationship in your Model
        //     'attribute'      => 'name_categorynew', // foreign key attribute that is shown to user
        //     'model' => '\App\Models\Categorynews',
        //     'options' => [function ($query) {
        //         return $query->orderBy('name_categorynew', 'ASC')->get();
        //     }],
        // ]);
        CRUD::column('title_postnews')->label('Tiêu đề bài viết');
        // CRUD::column('description_postnews')->label('Mô tả');
        CRUD::addColumn([
            // 1-n relationship
            'label'          => 'Danh mục tin tức', // Table column heading
            'type'           => 'select',
            'name'           => 'id_categorynews', // the column that contains the ID of that connected entity;
            'entity'         => 'categorynews', // the method that defines the relationship in your Model
            'attribute'      => 'name_categorynew', // foreign key attribute that is shown to user
            'model' => '\App\Models\Categorynews',
            'options' => [function ($query) {
                return $query->orderBy('name_categorynew', 'ASC')->whereNotIn('name_categorynew', ['Thông tin sản phẩm'])->get();
            }],
        ]);
        CRUD::column('Image_postnew')->type('image')->label('Hình ảnh đại diện bài viết:');
        CRUD::column('created_at')->label('Ngày khởi tạo');
        CRUD::column('updated_at')->label('Ngày cập nhật');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }
    // protected function setupShowOperation()
    // {
    //     // CRUD::filter('select2')
    //     //     ->type('select2')
    //     //     ->label('Danh mục tin tức')
    //     //     ->values(function () {
    //     //         return \App\Models\Categorynews::all('name_categorynew');
    //     //     })->apply();
    //     // CRUD::addFilter([
    //     //     'label'          => 'Danh mục tin tức', // Table column heading
    //     //     'name'           => 'id_categorynews', // the column that contains the ID of that connected entity;
    //     //     'entity'         => 'categorynews', // the method that defines the relationship in your Model
    //     //     'attribute'      => 'name_categorynew', // foreign key attribute that is shown to user
    //     //     'model' => '\App\Models\Categorynews',
    //     //     'options' => [function ($query) {
    //     //         return $query->orderBy('name_categorynew', 'ASC')->get();
    //     //     }],
    //     // ]);
    //     CRUD::column('title_postnews')->label('Tiêu đề bài viết');
    //     // CRUD::column('description_postnews')->label('Mô tả');
    //     CRUD::addColumn([
    //         // 1-n relationship
    //         'label'          => 'Danh mục tin tức', // Table column heading
    //         'type'           => 'select',
    //         'name'           => 'id_categorynews', // the column that contains the ID of that connected entity;
    //         'entity'         => 'categorynews', // the method that defines the relationship in your Model
    //         'attribute'      => 'name_categorynew', // foreign key attribute that is shown to user
    //         'model' => '\App\Models\Categorynews',
    //         'options' => [function ($query) {
    //             return $query->orderBy('name_categorynew', 'ASC')->whereNotIn('name_categorynew', ['Thông tin sản phẩm'])->get();
    //         }],
    //     ]);
    //     CRUD::column('Image_postnew')->type('image')->label('Hình ảnh đại diện bài viết:');
    //     CRUD::column('created_at')->label('Ngày khởi tạo');
    //     CRUD::column('updated_at')->label('Ngày cập nhật');

    //     /**
    //      * Columns can be defined using the fluent syntax or array syntax:
    //      * - CRUD::column('price')->type('number');
    //      * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
    //      */
    // }
    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PostnewsRequest::class);


        CRUD::field('title_postnews')->label('Tiêu đề bài viết tin tức, khuyến mại:');
        CRUD::field('description_postnews')->type('ckeditor')->label('Bài viết:');
        CRUD::field('Image_postnew')->type('image')->label('Hình ảnh đại diện bài viết:');
        CRUD::field('id_categorynews')->label('Danh mục tin tức')->type('select')->entity('categorynews')->model('\App\Models\Categorynews')->attribute('name_categorynew')->options(function ($query) {
            return $query->orderBy('name_categorynew', 'ASC')->whereNotIn('name_categorynew', ['Thông tin sản phẩm'])->get();
        });


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
