<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>AmoSabor Bomboniere</title>


	<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a27a0f4bbccc80012838ab0&product=sticky-share-buttons"></script>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="doces, tortas, bomboniere, festas, eventos, chocolate, aniversario, casamento, casamentos, bufet, bife">
	<meta name="description" content="Encomendas de doces para festas e eventos">





<!--

Template 2076 Zentro

http://www.tooplate.com/view/2076-zentro


-->

	
    <link rel="stylesheet" href="site/css/nivo-lightbox.css">
	<link rel="stylesheet" href="site/css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="site/css/style.css">
	<link rel="stylesheet" href="site/css/bootstrap.min.css">
	<link rel="stylesheet" href="site/css/animate.min.css">
	<link rel="stylesheet" href="site/css/font-awesome.min.css">
	<link rel="stylesheet" href="site/css/style.css">
 
	<!--Variavel que controla o tempo de apresentação dos itens-->
       {!!$x=0!!}
	<!---->

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="myContainer">
<!-- preloader section -->
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">AMOSABOR</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="mylinkhome">INICIO</a></li>
				<li><a href="#gallery" class="mylinkgallery">BOMBONIERE</a></li>
				<!--<li><a href="#menu" class="mylinkmenu">SPECIAL MENU</a></li>
				<li><a href="#team" class="mylinkcheefs">CHEFS</a></li>-->
				<li><a href="#contact" class="mylinkcontato">PEDIDOS</a></li>
			</ul>
		</div>
	</div>
</section>


<!-- home section -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>AMOSABOR BOMBONIERE</h1>
				<h2>BOMBONIERE - BOLOS E DOCES</h2>
				<a href="#contact" class="smoothScroll btn btn-default mylinkcontato">FAÇA SEU PEDIDO</a>
			</div>
		</div>
	</div>		
</section>


<!-- gallery section -->
<section id="gallery" class="parallax-section">
	<div class="container">
		<div class="row">
			
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Bomboniere - Bolos e Doces</h1>
				<hr>
			</div>

 
   
	
	@foreach($itens as $item)
	
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="{{ $x += 0.5 }}s">
			
				@foreach($item->getFotos as $foto)
                     @if($loop->first)
				        <a href="images/brinquedos/{{$foto->id}}.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/brinquedos/{{$foto->id}}.jpg" alt="gallery img"></a>
					 @endif   	
                @endforeach 


				<div>
					<h3>{{$item->titulo}}</h3>
					<span><p class="texto-item">{{$item->texto}}</p></span><br>	
				<!--	<p><i class="fa fa-check-square-o" aria-hidden="true"></i><i class="fa fa-square-o" aria-hidden="true"></i>Adicionar ao pedido ?</p>-->

				<gs-item obj="{{$item}}"></gs-item>
				</div>
		
			</div>
			
	 @endforeach	

			


		</div>
	</div>
</section>
{{--

<!-- menu section -->
<section id="menu" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Special Menu</h1>
				<hr>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Vegetable ................ <span>$20.50</span></h4>
				<h5>Chicken / Rosemary / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Meat ........................... <span>$30.50</span></h4>
				<h5>Meat / Rosemary / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Pork ........................ <span>$40.75</span></h4>
				<h5>Pork / Tooplate / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Orange-Rosemary Salad .......................... <span>$55.00</span></h4>
				<h5>Salad / Rosemary / Orange</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Squid ...................... <span>$65.00</span></h4>
				<h5>Squid / Rosemary / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Orange-Rosemary Shrimp ........................ <span>$70.50</span></h4>
				<h5>Shrimp / Rosemary / Orange</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Prawn ................... <span>$110.75</span></h4>
				<h5>Chicken / Rosemary / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Seafood ..................... <span>$220.50</span></h4>
				<h5>Seafood / Rosemary / Lemon</h5>
			</div>
		</div>
	</div>
</section>	--}}	
{{--

<!-- team section -->
<section id="team" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Meet Zentro chefs</h1>
				<hr>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
				<img src="/site/images/team1.jpg" class="img-responsive center-block" alt="team img">
				<h4>Thanya</h4>
				<h3>Main Chef</h3>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<img src="/site/images/team2.jpg" class="img-responsive center-block" alt="team img">
				<h4>Lynda</h4>
				<h3>Pizza Specialist</h3>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<img src="/site/images/team3.jpg" class="img-responsive center-block" alt="team img">
				<h4>Jenny Ko</h4>
				<h3>New Baker</h3>
			</div>
		</div>
	</div>
</section>--}}


<!-- contact section -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">



	
				@if(!Session::has('success') && !Session::has('error'))
				     <h1 class="heading">Enviar Pedido</h1>
    
				@endif
	


				@if(Session::has('success') && !Session::has('error'))
				     <h1 class="heading">Seu Pedido Foi Enviado Com Sucesso <br>
				     <small>Aguarde Nosso Contato</small></h1>
    
				@endif
	


					@if(!Session::has('success') && Session::has('error'))
				     <h1 class="heading">Ocorreu Um Erro Ao Fazer Seu Pedido <br><small>Digite Seus Dados Corretamente</small></h1>


    
				@endif	


	


				
				<hr>
			</div>



			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">



            

					{{ Form::open(['route'=>'pedido.registrar','class'=>'hotel-search-form','method'=>'POST']) }}
					<div class="col-md-6 col-sm-6">
						<input name="nome" type="text" class="form-control"   id="name" placeholder="Name:" required="true">
				    </div>
				    <div class="col-md-6 col-sm-6">
						<input name="telefone" type="tel" class="form-control"    id="telefone" placeholder="Telefone:" required="true">
				    </div>
				    <div class="col-md-6 col-sm-6">
						<input name="celular" type="tel" class="form-control"    id="celular" placeholder="Celular:">
				    </div>
					<div class="col-md-6 col-sm-6">
						<input name="email" type="email" class="form-control"   id="email" placeholder="Email:">
				    </div>
					<div class="col-md-12 col-sm-12">
						<textarea name="message" rows="8" class="form-control"    id="message" placeholder="Mensagem:"></textarea>
					</div>
					    <gs-select></gs-select>
			            <gs-lista></gs-lista>
         	         	<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="Enviar Pedido">
					</div>   
			
					{{ Form::close() }}
			</div>
			<div class="col-md-2 col-sm-1"></div>
		</div>
	</div>
</section>


<!-- footer section -->
<footer class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Entre Em Contato</h2>
				<div class="ph">
					<p><i class="fa fa-phone"></i> Telefone</p>
					<h4>(62) 3290 - 7699</h4>
					<h4>(62) 9 9172 - 3857</h4>

					
					
				</div>
				{{--<div class="address">
					<p><i class="fa fa-map-marker"></i> Nosso Endereç</p>
					<h4>120 Duis aute irure, California, USA</h4>
				</div>--}}
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Nossa Localização</h2>
					<p><i class="fa fa-map-marker"></i> Localização</p>
					<h4>Rua R I2 Qd 61 Lt 13 <br> Residencial Itaipu - Goiânia - GO</h4>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<h2 class="heading">Siga Nos Nas Redes Sociais</h2>
				<ul class="social-icon">
					<li><a href="https://www.facebook.com/anacarolina.jesuinomartinsdesouza?pnref=friends.search" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
					<li><a href="https://plus.google.com/u/2/discover" class="fa fa-google wow bounceIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>


	</div>
</footer>
 <div >
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.7882986107675!2d-49.361148485034526!3d-16.787204952626976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef80edaa91437%3A0x47104a17a4decab1!2sR.+Ri+2%2C+13+-+Residencial+Itaip%C3%BA%2C+Goi%C3%A2nia+-+GO%2C+74356-070!5e0!3m2!1spt-BR!2sbr!4v1512469467026" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>		

<!-- copyright section -->
<section id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>AMOSABOR BOMBONIERE</h3>
				<p>Copyright © Amosabor Bomboniere - Bolos e Doces <br>
				(62) 3290-7699  | (62) 9 9172-3857 | amosaborbomboniere@gmail.com<br> 
                
                 Design: <a  href="http://www.gessegoncalves.com.br" target="_parent">Gesse Gonçalves</a></p>
			</div>
		</div>
	</div>
</section>
</div>
<!-- JAVASCRIPT JS FILES -->	
<script src="site/js/jquery.js"></script>
<script src="site/js/bootstrap.min.js"></script>
<script src="site/js/jquery.parallax.js"></script>
<script src="site/js/smoothScroll.js"></script>
<script src="site/js/nivo-lightbox.min.js"></script>
<script src="site/js/wow.min.js"></script>
<script src="site/js/custom.js"></script>
<script type="text/javascript" src="js/site.js"></script>

</body>
</html>