@extends('layouts.painel')
	 @section('painel')


@include('painel.partials.menu')


<br><br><br>
<div class="container">

	<h2>GERENCIAR LOGO</h2>

	<br>

		@include('painel.logo.lista')	
      	     
			

		

			

</div>

  @parent
@stop