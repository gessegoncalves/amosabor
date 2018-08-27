<?php namespace App\Eventos\Repositories;


use \App\ItensPedido as ItensPedido;
use Carbon\Carbon;

class ItensPedidoRepository implements IItensPedidoRepository
                                     
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

        $result = Brinquedo::orderBy($order[0],$order[1])
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
    

        $qnt  = count($input['brinquedo_id']);

     
        for($x =0 ; $x<$qnt; ++$x ){
            $item                            = new ItensPedido();
            $item->brinquedo_id              = $input['brinquedo_id'][$x];
            $item->pedido_id                 = $input['pedido_id']; 
            $item->save();
        }
      

    
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