<?php namespace App\Eventos\Repositories;


use \App\Brinquedo as Brinquedo;
use \App\Events\AddPedidoEvent; 
              
use Carbon\Carbon;

class IndexRepository implements IIndexRepository
                                     
{
 
    public function index($input)
    {

        return Brinquedo::inRandomOrder()->where('status','like','ATIVO')->get();
      
    }   

  
    public function store($input)
    {
  
     
        \Event::fire(new AddPedidoEvent($input));

        return $input;
    
    
      

    
    } 
   
    public function show($id)
    {
        $result = Brinquedo::findOrFail($id);
        return $result;
    }   
    
   
    public function update($input)
    {




      
    }

  
    public function destroy($id)
    {
       
    }



}