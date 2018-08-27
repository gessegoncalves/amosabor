<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brinquedo extends Model
{
    protected $table    = 'brinquedos';
    protected $fillable = ['titulo','periodo','status','valor','texto'];

    public function getFotos(){
   	        return $this->hasMany('App\FotosBrinquedo','brinquedo_id','id');
    }


    public function getItens(){
   	        return $this->hasMany('App\ItensPedido','brinquedo_id','id');
    }

}