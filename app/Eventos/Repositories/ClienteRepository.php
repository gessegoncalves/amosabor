<?php namespace App\Eventos\Repositories;


use \App\Cliente as Cliente;
use Carbon\Carbon;

class ClienteRepository implements IClienteRepository
                                     
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

        $result = Cliente::orderBy($order[0],$order[1])
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
  

    
      // dd($input);

          $cliente                            = new Cliente();
          $cliente->nome                      = $input['nome'];
          $cliente->telefone                  = $input['telefone']; 
          $cliente->celular                   = $input['celular'];  
          $cliente->email                     = $input['email'];  
          $cliente->cidade                    = $input['cidade'];
          $cliente->bairro                    = $input['bairro'];  
          $cliente->rua                       = $input['rua'];   
          $cliente->complemento               = $input['complemento'];  
          $cliente->save();

          return  $cliente->id;

       
    }
   
    public function show($id)
    {
        $result = Cliente::findOrFail($id);
        return $result;
    }   
    
   
    public function update($input)
    {




      
    }

  
    public function destroy($id)
    {
       
    }



}