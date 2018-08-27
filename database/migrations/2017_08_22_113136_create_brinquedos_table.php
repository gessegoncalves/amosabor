<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrinquedosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brinquedos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('titulo',50)->nullable();
            $table->string('texto',300)->nullable();
            $table->string('periodo',20)->nullable();
            $table->string('valor',10)->nullable();
            $table->string('status',10)->default('ATIVO');
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
         Schema::drop('brinquedos');
    }
}