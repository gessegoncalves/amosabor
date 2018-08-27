<?php

namespace App\Listeners;

use App\Events\AddFotosEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Eventos\Repositories\IFotosBrinquedoRepository as repository;

class AddFotosEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    protected $repository; 

    public function __construct(repository $repository)
    {
         $this->repository = $repository;
    }

    /**
     * Handle the event.
     *
     * @param  AddFotosEvent  $event
     * @return void
     */
    public function handle(AddFotosEvent $event)
    {
        $this->repository->store($event->getItem());
    }
}
