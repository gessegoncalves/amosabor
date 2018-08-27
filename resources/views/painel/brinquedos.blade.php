@extends('layouts.painel')
	 @section('painel')


@include('painel.partials.menu')


<br><br><br><br>
<div class="container">
	

	<h2>GERENCIAR ITENS</h2>

		<br>


	@include('painel.brinquedos.lista')	

		<div class="row">

		  <div class="col-lg-12">
					
					
					<hr>	


				
					<button type="button" class="btn btn-block btn-primary mybutton" data-toggle="modal" >
					 					CADASTRAR NOVO BRINQUEDO
						             		</button>								       
		
							
							@include('painel.brinquedos.formulario')	



						   

							

				

				
			

	</div>
	</div>		

</div>

  @parent
@stop