<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Eventos\Repositories\IClienteRepository as repository;


class ClientesController extends Controller
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



       $itens   = $this->repository->index($request->all());

  
        
         return view('painel.clientes')->with(compact('itens')) ;

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $item = $this->repository->store($request->all());
        return view('painel.brinquedos.seleciona')->with(compact('item'));
       
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = $this->repository->show($id);
        return view('painel.brinquedos.seleciona')->with(compact('item'));
    }  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $result = $this->repository->update($request->all());
        
        if(!$result){
            return redirect()->back()->withErrors(['Falha ao atualizar']);
        }

        return redirect()->back()->with('success','Atualizado com sucesso !');

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
                 return redirect()->back()->withErrors(['Falha ao cadastrar']);
        }

        return redirect()->back()->with('success','Removido com sucesso !');   
    }


    
}
