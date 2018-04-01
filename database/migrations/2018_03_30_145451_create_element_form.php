<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('element_form', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_input');
            $table->string('type_input');
            $table->string('place_input');
             $table->integer('id_form')->unsigned();
             $table->foreign('id_form')->references('id')->on('form')->onDelete('cascade');
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
        Schema::dropIfExists('element_form');
    }
}
