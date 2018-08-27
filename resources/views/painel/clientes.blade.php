@extends('layouts.painel')
	 @section('painel')


@include('painel.partials.menu')


<br><br><br>
<div class="container">

		<h2>GERENCIAR CLIENTES</h2>

		<br>

		@include('painel.clientes.lista')	
      	     <hr>
				<div class="row">
					<div class="col-lg-12">
					
								    		<button type="button" class="btn btn-block btn-primary mybutton" data-toggle="modal" >
							  					CADASTRAR CLIENTE
						             		</button>								       
									
							
							{{--@include('painel.brinquedos.formulario')	--}}



						   

							

					</div>
				</div>

			

		

			

</div>

  @parent
@stop