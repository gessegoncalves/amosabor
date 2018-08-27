<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes'); 
            $table->string('evento',50)->nullable();
            $table->string('cidade',50)->nullable();
            $table->string('bairro',50)->nullable();
            $table->string('rua',50)->nullable();            
            $table->string('complemento',50)->nullable();
            $table->string('data',10)->nullable(); 
            $table->timestamps();
        });
    }

    // 9216 8728 francisco grela

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('pedidos');
    }
}
