<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexRequest as Request;

use App\Eventos\Repositories\IIndexRepository as repository;






class IndexController extends Controller
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

           

            $validator = validator($request->all(),[
                  'nome'           => 'required|min:2|max:30',
                  'brinquedo_id'   => 'required|min:1',
            //    'uf'         => 'required',
               
            ],[
               

                 'nome.required'                => 'Digite seu nome !',
                 'nome.min'                     => 'Digite seu nome corretamente !',
                 'nome.max'                     => 'Digite seu nome corretamente!',

                 'brinquedo_id.required'        => 'Adicione Itens Ao Seu Pedido !',
               
                   
            ]);

            
            if($validator->fails())  {
                 return redirect()->back()->with('error','Houve Um Erro Ao Solicitar Orçamento.');               
            }
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////


                    $texto  =        '<table width="100%" border="0" bordercolor="#FF0000">';
                    
                    $texto .=           '<tr >';
                    $texto .=              '<td  bgcolor="#000000" style="color:#FFFFFF"  colspan="4" align="center" ><h1> PEDIDO</h1></td>';
                    $texto .=           '</tr>';



                    $texto .=           '<tr >';
                    $texto .=              '<td  bgcolor="#ffffff" style="color:#000000"  colspan="4" align="center" ><h2>ITENS DO PEDIDO</h2></td>';
                    $texto .=           '</tr>';



                           $x=0;


                            foreach($request->input('brinquedo_titulo') as $item) {

                                      if($x % 2==0){           
                                        $texto .=           '<tr  bgcolor="#0000000" style="color:#FFFFFF">';
                                      } 

                                      if($x % 2 !=0){           
                                        $texto .=           '<tr bgcolor="#FFFFFF" style="color:#000000"  >';
                                      } 




                                        $texto .=              '<td  colspan="4" align="left" >'.  $item  . '</td>';
                                        $texto .=           '</tr>';
                                               
                                         

                                     ++$x;                 
                                     
                              }  





                    $texto .=           '<tr >';
                    $texto .=              '<td  bgcolor="#000000" style="color:#FFFFFF"  colspan="4" align="center" > <h3> DADOS DO CLIENTE</h3></td>';
                    $texto .=           '</tr>';       


                    $texto .=           '<tr bgcolor="#FFFFFF" style="color:#000000">';
                    $texto .=              '<td   align="left">NOME</td>';


                 //   $texto .=              '<td   align="left">TELEFONE</td>';
                  //  $texto .=              '<td   align="left">CELULAR</td>';
                 //   $texto .=              '<td   align="left">EMAIL</td>';
                    
                    $texto .=           '</tr>';



                    $texto .=           '<tr bgcolor="#000000" style="color:#FFFFFF">';
                    $texto .=              '<td   align="left" >'. $request->input('nome')  . '</td>';
                  //  $texto .=              '<td   align="left" >'. $request->input('telefone')  . '</td>';
                  //  $texto .=              '<td   align="left" >'. $request->input('celular')  . '</td>';
                   // $texto .=              '<td   align="left" >'. $request->input('email')  . '</td>';
     
                    $texto .=           '</tr>';


                    //  $texto .=              '<td   align="left">NOME</td>';


                    $texto .=              '<td   align="left">TELEFONE</td>';
                  //  $texto .=              '<td   align="left">CELULAR</td>';
                 //   $texto .=              '<td   align="left">EMAIL</td>';
                    
                    $texto .=           '</tr>';



                    $texto .=           '<tr bgcolor="#000000" style="color:#FFFFFF">';
                 //   $texto .=              '<td   align="left" >'. $request->input('nome')  . '</td>';
                    $texto .=              '<td   align="left" >'. $request->input('telefone')  . '</td>';
                  //  $texto .=              '<td   align="left" >'. $request->input('celular')  . '</td>';
                   // $texto .=              '<td   align="left" >'. $request->input('email')  . '</td>';
     
                    $texto .=           '</tr>';



                      //$texto .=              '<td   align="left">NOME</td>';


                 //   $texto .=              '<td   align="left">TELEFONE</td>';
                    $texto .=              '<td   align="left">CELULAR</td>';
                 //   $texto .=              '<td   align="left">EMAIL</td>';
                    
                    $texto .=           '</tr>';



                    $texto .=           '<tr bgcolor="#000000" style="color:#FFFFFF">';
                   // $texto .=              '<td   align="left" >'. $request->input('nome')  . '</td>';
                  //  $texto .=              '<td   align="left" >'. $request->input('telefone')  . '</td>';
                    $texto .=              '<td   align="left" >'. $request->input('celular')  . '</td>';
                   // $texto .=              '<td   align="left" >'. $request->input('email')  . '</td>';
     
                    $texto .=           '</tr>';



                    //  $texto .=              '<td   align="left">NOME</td>';


                 //   $texto .=              '<td   align="left">TELEFONE</td>';
                  //  $texto .=              '<td   align="left">CELULAR</td>';
                    $texto .=              '<td   align="left">EMAIL</td>';
                    
                    $texto .=           '</tr>';



                    $texto .=           '<tr bgcolor="#000000" style="color:#FFFFFF">';
                    //$texto .=              '<td   align="left" >'. $request->input('nome')  . '</td>';
                  //  $texto .=              '<td   align="left" >'. $request->input('telefone')  . '</td>';
                  //  $texto .=              '<td   align="left" >'. $request->input('celular')  . '</td>';
                    $texto .=              '<td   align="left" >'. $request->input('email')  . '</td>';
     
                    $texto .=           '</tr>';






                    $texto .=           '<tr bgcolor="#000000" style="color:#FFFFFF">';
                    $texto .=              '<td  colspan="4" align="left" style="color:#FFFFFF">'. $request->input('mensagem')  . '</td>';
                    $texto .=           '</tr>';

                


                       
                     








                  $texto .=        '</table>';


              
              


                 $header  = "MIME-Version: 1.1\n";
                 $header .= "Content-type: text/html;charset=iso-8859-1\n";
                 $header .= "From: " .  $request->input('email') . " \n";
                 $header .= "Cc: gessegoncalves@gmail.com\n";
                 $header .= "Bcc: amosaborbomboniere@gmail.com\n";
                 $header .= "Return-Path: anacarolinajesuinomartinsdesou@gmail.com\n";
                 mail("amosaborbomboniere@gmail.com@gmail.com",$request->input('nome'),$texto,$header,"-r"."amosaborbomboniere@gmail.com@gmail.com");






















            ////////////////////////////////////////////////////////////////////////////////////////////////////////////          

            //$this->repository->store($request->all());
            return redirect()->back()->with('success','Seu Orçamento Foi Enviado, Aguarde Nosso Contato. '); 


        
       
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
