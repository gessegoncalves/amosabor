@extends('layouts.painel')
	 @section('painel')


@include('painel.partials.menu')


<br><br><br>

@include('painel.brinquedos.atualiza')	
<div class="container">
	<div class="row">
        <div class="col-lg-12">
	        <h4>{{$item->titulo}}</h4>
	        <div>{{$item->texto}}</div>
		    <div>Periodo:{{$item->periodo}}</div>
			<div>Valor:{{$item->valor}}</div>   
        </div>




		<div class="col-lg-12">
		    <div class="btn-group " role="group" >
		         <button type="button" class="btn btn-primary  mybutton" data-toggle="modal">ATUALIZAR</button>
		     
		    </div>		     
		</div>


 <div class="col-lg-12">
 <hr>
   <div class="row">
	@foreach($item->getFotos as $foto)

	   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                <div class="thumbnail">
					<img src="/images/brinquedos/{{$foto->id}}.jpg" alt="..."><br>
					<a href="{{route('brinquedo.fotos.remover',$foto->id)}}" class="btn btn-primary btn-block btn-sm" role="button">REMOVER</a>
				</div>


	  </div>
						       
    @endforeach	
		
		</div>		
	</div>							







					
				</div>
			

</div>

  @parent
@stop