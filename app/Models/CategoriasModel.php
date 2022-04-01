<?php 
namespace App\Models;
use CodeIgniter\Model;

class CategoriasModel extends Model{
	 protected $table      = 'gastos';
    


    protected $allowedFields = ['id', 'categoria', 'monto', 'fecha', 'descripcion'];


    public function getCategorias(){
    	return $this->findAll();
    }

    public function add($dato){
    	return $this->save($dato);
    }


}
