<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('prod_id');
            $table->foreign('cat_id')->references('cat_id')->on('categories');
            $table->foreign('brand_id')->references('brand_id')->on('brands');
            $table->foreign('specification_id')->references('specification_id')->on('specifications');
            $table->char('name',60);
            $table->boolean('avaible')->default(false);
            $table->char('img',255);
            $table->decimal('price',8,2);
            $table->integer('popular');
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
