<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',50)->nullable();
            $table->string('telefone',50)->nullable();
            $table->string('celular',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('cidade',50)->nullable();
            $table->string('bairro',50)->nullable();
            $table->string('rua',50)->nullable();            
            $table->string('complemento',50)->nullable();
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
        Schema::drop('clientes');
    }
}
