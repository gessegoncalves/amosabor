<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     {{ Form::open(['route'=>'brinquedo.registrar','class'=>'form-horizontal','form-horizontal','files'=>'true','method'=>'POST']) }}
  
  <div class="modal-dialog" role="document">
    
    <div class="modal-content">
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">CADASTRAR BRINQUEDO</h4>
      </div>
    
      <div class="modal-body">
    <!---->
        <div class="form-group">
           <!---->
            

                  {{  Form::hidden('id', null, array('class'=>'form-control','id'=>'id'))  }}
                
                     

                  <div class="col-lg-12"> 
                   <label for="inputPassword" >TITULO</label>          
                  {{  Form::text('titulo', null, array('class'=>'form-control','id'=>'titulo'))  }}
                  </div>

                  <div class="col-lg-12"> 
                   <label for="inputPassword" >PERIODO</label>          
                  {{  Form::text('periodo', null, array('class'=>'form-control','id'=>'periodo'))  }}
                  </div>



                  <div class="col-lg-12"> 
                   <label for="inputPassword" >VALOR</label>          
                  {{  Form::text('valor', null, array('class'=>'form-control','id'=>'valor'))  }}
                  </div>

                  <div class="col-lg-12"> 
                   <label for="inputPassword" >TEXTO</label>          
                  {{  Form::textarea('texto', null, array('class'=>'form-control','id'=>'texto'))  }}
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
                 {{ Form::submit('CADASTRAR', array('class' => 'btn btn-primary btn-block','id'=>'btnregistra')) }}
            </div>     
         </div>  
      </div>


    </div>
    </div>

  {{ Form::close() }}
</div> 