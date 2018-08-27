<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table    = 'pedidos';
    protected $fillable = ['cliente_id','evento','cidade','bairro','rua','complemento','data'];

    public function getItensPedido(){
   	        return $this->hasMany('App\ItensPedido','pedido_id','id');
    }


   
    public function getCliente(){
	       return $this->belongsTo('App\Cliente','cliente_id','id');
	}

}