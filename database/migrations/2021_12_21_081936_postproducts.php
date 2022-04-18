<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class Postproducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postproducts', function (Blueprint $table) {
            $table->id();
            $table->text('title_postproduct');
            $table->longText('description_postproduct');
            $table->unsignedBigInteger('id_categorynews');
            $table->foreign('id_categorynews')->references('id')->on('categorynews');
            $table->unsignedBigInteger('id_products');
            $table->foreign('id_products')->references('id')->on('products');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
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
