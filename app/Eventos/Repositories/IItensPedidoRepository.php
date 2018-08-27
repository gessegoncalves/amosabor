<?php  namespace App\Eventos\Repositories;

interface IItensPedidoRepository{	      
    public function index($input);    
    public function store($input);
    public function show($id);    
    public function update($input);
    public function destroy($id);
   
}