<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmembers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('Name');
            $table->string('ppimage');
            $table->string('description');
            $table->string('Facebooklink');
            $table->string('Instalink');
            $table->string('Contact_NO');
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
        Schema::dropIfExists('_addmembers');
    }
}
