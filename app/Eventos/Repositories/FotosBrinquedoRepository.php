<?php namespace App\Eventos\Repositories;

use \App\FotosBrinquedo as Fotos;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

ini_set('memory_limit','-1');

class FotosBrinquedoRepository implements IFotosBrinquedoRepository
                                     
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

        $result = fotos::orderBy($order[0],$order[1])
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
      
       
        $imagens = $input['images'];
   
        Image::configure(array('driver' => 'gd'));

        $x = 0;

          


        foreach($imagens as $imagem) {
 
             $extencao = strtolower($imagem->getClientOriginalExtension());

          
         
               if( $extencao =='jpg'){

                        $foto = new Fotos();
                        $foto->brinquedo_id =    $input['id'];
                        $foto->titulo       =   'titulo' ;//  $input['titulo'][$x];
                        $foto->texto        =   'texto';// $input['text'][$x];
                        $foto->save();
                       

                      //  Image::make($imagem)->heighten(600)->save(base_path() . '/public/images/brinquedos/' .  $foto->id  . '.' . $extencao );   


                        Image::make($imagem)->resize(1200, 750)->save(base_path() . '/public/images/brinquedos/' .  $foto->id  . '.' . $extencao );   






                }

               ++$x;

          }
        
             

           return true;  


          


    }
   
    public function show($id)
    {
        $result = fotos::findOrFail($id);
        return $result;
    }   
    
   
    public function update($input,$id)
    {
        $result = fotos::findOrFail($id);
        $result->update($input);
        return $result;
    }

  
    public function destroy($id)
    {
        $result = fotos::findOrFail($id);
        $result->delete();
        unlink('./../public/images/brinquedos/' .  $id . '.jpg');
        return $result;
    }



}