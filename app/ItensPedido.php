<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItensPedido extends Model
{
    protected $table    = 'itens_pedido';
    protected $fillable = ['pedido_id','brinquedo_id'];

    public function getPedido(){
   	        return $this->belongsTo('App\Pedido','pedido_id','id');
    }
    public function getItens(){
   	         return $this->belongsTo('App\Brinquedo','brinquedo_id','id');
    }
}  