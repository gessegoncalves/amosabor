<div class="row">
	@foreach($itens as $item)
	    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
 	       <div class="item">
        			<h5 class="text-center titulo">{{$item->nome}}</h5>
					<hr>
				    <p>Telefone:{{$item->telefone}} </p>
					<p>Celular:{{$item->celular}}</p>
					<p>Email:{{$item->email}}</p>
					<p>Cidade:{{$item->cidade}}</p>
					<p>Bairro:{{$item->bairro}}</p>
					<p>Rua:{{$item->rua}}</p>
					<p>Complemento:{{$item->complemento}}</p>				              
  		            <a href="{{route('brinquedo.selecionar',$item->id)}}" class="btn btn-sm btn-primary btn-block">SELECIONAR</a>							  
            </div>
   		</div>						       
    @endforeach	
</div>     	