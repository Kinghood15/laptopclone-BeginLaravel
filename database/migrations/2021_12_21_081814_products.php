<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_product');
            $table->string('cpu');
            $table->string('gpu');
            $table->string('memory');
            $table->string('ram');
            $table->string('display');
            $table->string('color');
            $table->string('weight');
            $table->Integer('quanlity');
            $table->Integer('discount');
            $table->double('quotedprice');
            $table->double('price');
            $table->unsignedBigInteger('id_categoryproducts');
            $table->foreign('id_categoryproducts')->references('id')->on('categoryproducts');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('id_categorylaptops');
            $table->foreign('id_categorylaptops')->references('id')->on('categorylaptops');
            // $table->timestamp('deleted_at')->default(DB::raw('CURRENT_TIMESTAMP on delete CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
