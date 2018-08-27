<?php  namespace App\Eventos\Repositories;

interface IFotosBrinquedoRepository{	      
    public function index($input);    
    public function store($input);
    public function show($id);    
    public function update($input, $id);
    public function destroy($id);
   
}