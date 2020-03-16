<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductdesc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productdesc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('users_id');
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_category');
            $table->string('product_price');
            $table->string('product_image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productdesc');
    }
}
