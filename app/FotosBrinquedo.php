<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotosBrinquedo extends Model
{
    protected $table    = 'fotos_brinquedos';
    protected $fillable = ['titulo','texto'];


    public function getBrinquedo(){
	       return $this->belongsTo('App\Brinquedo','pedido_id','id');
	}
} 