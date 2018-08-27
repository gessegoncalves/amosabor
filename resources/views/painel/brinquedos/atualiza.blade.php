<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     {{ Form::open(['route'=>'brinquedo.atualizar','class'=>'form-horizontal','form-horizontal','files'=>'true','method'=>'POST']) }}
  
  <div class="modal-dialog" role="document">
    
    <div class="modal-content">
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ATUALIZAR BRINQUEDO</h4>
      </div>
    
      <div class="modal-body">
    <!---->
        <div class="form-group">
           <!---->
            

                  {{  Form::hidden('id', $item->id, array('class'=>'form-control','id'=>'id'))  }}
                
                     

                  <div class="col-lg-12"> 
                   <label for="inputPassword" >TITULO</label>          
                  {{  Form::text('titulo', $item->titulo, array('class'=>'form-control','id'=>'titulo'))  }}
                  </div>

                  <div class="col-lg-12"> 
                   <label for="inputPassword" >PERIODO</label>          
                  {{  Form::text('periodo', $item->periodo, array('class'=>'form-control','id'=>'periodo'))  }}
                  </div>
                   

                  <div class="col-lg-12"> 
                   <label for="inputPassword" >STATUS</label>          
                 {{ Form::select('status', ['ATIVO' => 'ATIVO', 'INATIVO' => 'INATIVO'],$item->status, array('class'=>'form-control','id'=>'status')) }}
                  </div>
 
    
                  <div class="col-lg-12"> 
                   <label for="inputPassword" >VALOR</label>          
                  {{  Form::text('valor', $item->valor, array('class'=>'form-control','id'=>'valor'))  }}
                  </div>

                  <div class="col-lg-12"> 
                   <label for="inputPassword" >TEXTO</label>          
                  {{  Form::textarea('texto', $item->texto, array('class'=>'form-control','id'=>'texto'))  }}
                  </div>
                 <!---------------------------->
                 <div class="col-lg-12">
                    <label for="inputPassword" >FOTOS</label> 
                    {{ Form::file('images[]',array('multiple'=>true,'id'=>'myFile')) }}
                </div>            
           <!---->
        </div>
    <!---->
    </div>
      
      <div class="modal-footer">      
         <div class="col-lg-12">  
           <div class="form-group">
                 {{ Form::submit('ATUALIZAR', array('class' => 'btn btn-primary btn-block','id'=>'btnregistra')) }}
            </div>     
         </div>  
      </div>


    </div>
    </div>

  {{ Form::close() }}
</div> 