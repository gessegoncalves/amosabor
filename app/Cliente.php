<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table    = 'clientes';
    protected $fillable = ['nome','telefone','celular','email','cidade','bairro','rua','complemento'];

   // public function getFotos(){
   //	        return $this->hasMany('App\FotosBrinquedo','brinquedo_id','id');
   // }


    //public function getItens(){
   	  //      return $this->hasMany('App\ItensPedido','brinquedo_id','id');
    // }

}



 