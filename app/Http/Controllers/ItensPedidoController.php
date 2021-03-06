<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Eventos\Repositories\IItensPedidoRepository as repository;


//App\Eventos\Repositories\IBrinquedoRepository does not exist



class ItensPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      protected $repository;  

   
    function __construct(repository $repository){
            $this->repository = $repository; // injeta o repositorio na controle
    }  

    public function index(Request $request)
    {



         $itens = $this->repository->index($request->all());
         return view('site.index')->with(compact('itens')) ;

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      

        $this->repository->store($request->all());
        return view('site.feedBack');


        
       
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$titulo)
    {

 





      //  $item = $this->repository->show($id);
      //  return view('painel.brinquedos.seleciona')->with(compact('item'));
    }  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // $result = $this->repository->update($request->all(), $id);
       // return response()->JSON($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


      
        $result = $this->repository->destroy($id);
      
        if(!$result){
                 return redirect()->back()->withErrors(['Falha ao Remover Foto']);
        }

        return redirect()->back()->with('success','Foto Removida !');
    }
}
