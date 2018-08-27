<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosBrinquedosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('fotos_brinquedos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brinquedo_id')->unsigned();
            $table->foreign('brinquedo_id')->references('id')->on('brinquedos');            
            $table->string('titulo',50);
            $table->string('texto',300);
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
         Schema::drop('fotos_brinquedos');
    }
}
