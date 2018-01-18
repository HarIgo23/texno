<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specifications', function (Blueprint $table) {
            $table->increments('specification_id');
            $table->char('spec_name',60);
            $table->text('description');
            $table->char('spec_img1',255);
            $table->char('spec_img2',255);
            $table->char('spec_img3',255);
            $table->char('spec_img4',255);
            $table->char('spec_img5',255);
            $table->char('spec_img6',255);
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
