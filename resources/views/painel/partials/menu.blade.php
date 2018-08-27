<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/painel">PAINEL DE CONTROLE</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="" target="_blank">Painel de Controle</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li>                
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">INICIO<b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="/painel">Inicio</a></li>
                        <li><a href="/login">Sair</a></li>                       
                    </ul>
                </li>
                
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">GERENCIAR DADOS<b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="{{route('brinquedos.lista')}}">Brinquedo</a></li>
                        <li><a href="{{route('clientes.lista')}}">Cliente</a></li>
                        <li><a href="{{route('pedidos.lista')}}">Pedidos</a></li>
                        <li><a href="{{route('clientes.lista')}}">Eventos</a></li>
                        <li class="divider"></li>                       
                        <li><a href="">Usuarios</a></li>
                    </ul>
                </li>
                  <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">GERENCIAR APARENCIA<b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="{{route('logo')}}">Logo</a></li>
                        <li><a href="{{route('brinquedos.lista')}}">Cabeçalho</a></li>
                        <li><a href="{{route('brinquedos.lista')}}">Marketing</a></li>
                        <li><a href="{{route('brinquedos.lista')}}">Contato</a></li>                                                
                        <li><a href="{{route('brinquedos.lista')}}">Rodape</a></li>                        
                    </ul>
                </li>
              
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>