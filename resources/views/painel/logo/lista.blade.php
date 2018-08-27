<hr>
				<div class="row">
					<div class="col-lg-12">
					


	

					 {{ Form::open(['route'=>'logo.registrar','class'=>'form-horizontal','form-horizontal','files'=>'true','method'=>'POST']) }}
  
      
     
          

								           

							<div class="panel panel-default">
								  <div class="panel-heading">
								    <h3 class="panel-title">Selecione Seu Logotipo</h3>
								  </div>

								  <div class="panel-body">
							             	       <label for="inputPassword" >FOTOS</label> 
							  	                    {{ Form::file('images',array('multiple'=>false,'id'=>'myFile')) }}
								  </div>
								  <div class="panel-footer">
								  	
								                 {{ Form::submit('ENVIAR LOGOTIPO', array('class' => 'btn btn-primary btn-block','id'=>'btnregistra')) }}
								  </div>
							</div>



  {{ Form::close() }}


    </div>
    </div>




















							


						   

							

					</div>
				</div>