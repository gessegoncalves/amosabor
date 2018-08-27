<?php namespace App\Eventos\Repositories;


use \App\Brinquedo as Brinquedo;
use \App\Events\AddFotosEvent;
use Carbon\Carbon;

class BrinquedoRepository implements IBrinquedoRepository
                                     
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
     
        $result = Brinquedo::create($input);
      
        $input['id'] = $result->id;

        if((isset($input['images']) == true)){
              \Event::fire(new AddFotosEvent($input));
        }
    
        return $result;
    }
   
    public function show($id)
    {
        $result = Brinquedo::findOrFail($id);
        return $result;
    }   
    
   
    public function update($input)
    {




        $result = Brinquedo::findOrFail($input['id']);
        $result->update($input);
        
        if((isset($input['images']) == true)){
          \Event::fire(new AddFotosEvent($input));
        }

        return $result;
    }

  
    public function destroy($id)
    {
        $result = Brinquedo::findOrFail($id);
        $result->delete();
        return $result;
    }



}