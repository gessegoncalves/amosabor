<?php

namespace App\Listeners;

use App\Events\AddPedidoEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Eventos\Repositories\IClienteRepository     as cliente;
use App\Eventos\Repositories\IPedidoRepository      as pedido;
use App\Eventos\Repositories\IItensPedidoRepository as itens;

class AddPedidoEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    protected $cliente;
    protected $pedido;
    protected $itens; 

    public function __construct(cliente $cliente, pedido $pedido, itens $itens)
    {      
         $this->cliente = $cliente;
         $this->pedido  = $pedido;
         $this->itens   = $itens;  
    }

       
    /**
     * Handle the event.
     *
     * @param  AddPedidoEvent  $event
     * @return void
     */
    

    public function handle(AddPedidoEvent $event)
    {



        $pedido =  $event->getPedido();

        $pedido['cliente_id'] =  $this->cliente->store($pedido);

        if($pedido['cliente_id'] > 0){

           $pedido['pedido_id'] =  $this->pedido->store($pedido);

           if($pedido['pedido_id'] > 0){

                 $this->itens->store($pedido);
           }
        }
    }
}
