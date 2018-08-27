<div class="row">
	@foreach($itens as $item)
	    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
 	       <div class="item">
 	   
				<h5>Cliente</h5>	

				<p>{{$item->getCliente->nome}}</p>


				<h5>Itens Locados</h5>

           		 @foreach($item->getItensPedido as $itensPedido)
           		     <p>{{$itensPedido->getItens->titulo}}</p> 										
        		 @endforeach

				<a href="{{route('brinquedo.selecionar',$item->id)}}" class="btn btn-sm btn-primary btn-block">SELECIONAR</a>							  
            </div>
   		</div>						       
    @endforeach	
</div>     	


{{-- dd($itens[0]->getItensPedido[0]->getItens);--}}



