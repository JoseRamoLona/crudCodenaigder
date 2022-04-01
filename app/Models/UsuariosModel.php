<?php 
namespace App\Models;
use CodeIgniter\Model;

class UsuariosModel extends Model{
	 protected $table      = 'usuarios';
    


    protected $allowedFields = ['id_usuario', 'nombre', 'apellidos', 'email', 'password'];


    public function getUsuarios(){
    	return $this->findAll();
    }

    public function add($dato){
    	return $this->save($dato);
    }


}
