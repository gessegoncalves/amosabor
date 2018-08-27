<?php namespace App\Eventos\Repositories;


use \App\Pedido as Pedido;
use Carbon\Carbon;

class PedidoRepository implements IPedidoRepository
                                     
{
 
    public function index($input)
    {


        $limit = $input['limit'] ?? 20;
        $order = $input['order'] ?? null;
      
        if($order !== null){
            $order = explode(',',$order);
        }

        $order[0] = $order[0] ?? 'id';
        $order[1] = $order[1] ?? 'asc';

        $where = $input['where'] ?? [];
        $like  = $input['like']  ?? null;

        if($like){
            $like    = explode(',', $like);
            $like[1] = '%' . $like[1] . '%';

        }

        $result = Pedido::orderBy($order[0],$order[1])
        ->where(function($query) use ($like){
            if($like){
                return $query->where($like[0],'like',$like[1]);
            }
          return $query;
        })
        ->where($where)
        ->paginate($limit);
     
        return $result;

       
    }   

  
    public function store($input)
    {
  
          $pedido                            = new Pedido();
          $pedido->cliente_id                = $input['cliente_id'];
          $pedido->evento                    = $input['evento']; 
          $pedido->cidade                    = $input['cidade'];  
          $pedido->bairro                    = $input['bairro'];  
          $pedido->rua                       = $input['complemento'];
          $pedido->complemento               = $input['bairro'];  
          $pedido->data                      = $input['data'];   
        
          $pedido->save();

          return  $pedido->id;

    }
   
    public function show($id)
    {
        $result = Pedido::findOrFail($id);
        return $result;
    }   
    
   
    public function update($input)
    {




      
    }

  
    public function destroy($id)
    {
       
    }



}