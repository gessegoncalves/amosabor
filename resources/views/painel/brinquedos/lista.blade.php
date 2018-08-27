<div class="row">
	@foreach($itens as $item)
	    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
 	       <div class="item">
        			<h4 class="text-center titulo">{{$item->titulo}}</h4>
					<hr>
					<p class="text-justify item-texto">{{$item->texto}}</p>
					
   		            <p>Periodo:{{$item->periodo}}</p>				              
				    <p>Valor:{{$item->valor}}</p>				              
  		            <a href="{{route('brinquedo.selecionar',$item->id)}}" class="btn btn-sm btn-primary btn-block">SELECIONAR</a>							  
            </div>
   		</div>						       
    @endforeach	
</div>     	