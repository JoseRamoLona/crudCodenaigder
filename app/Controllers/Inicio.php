<?php

namespace App\Controllers;

use App\Models\UsuariosModel;
use App\Models\CategoriasModel;


class Inicio extends BaseController
{
    public function index()
    {
        $model= new CategoriasModel();
        $datos= $model->getCategorias();


        echo view ('/layout/header');
        echo view ('/categorias/listadoca',compact('datos'));
        echo view ('/layout/footer');
    }
    public function add(){
         echo view ('/layout/header');
        echo view ('/categorias/agregar');
        echo view ('/layout/footer');
    }

    public function store(){
    $validacion=$this->validate(['categoria'=>'required','monto'=>'required',
        'fecha'=>'required','descripcion'=>'required']);
        if ($_POST) {
            //print_r($_POST);exit;
            $datos=[
                'categoria'=> $_POST['categoria'],
                'monto'=> $_POST['monto'],
                'fecha'=> $_POST['fecha'],
                'descripcion'=> $_POST['descripcion']
            ];
            $model= new CategoriasModel();

            $data = $model->add($datos);

        
        }
    }

    /*----------------------------------------------------------------------*/
       public function add1(){
         echo view ('/layout/header');
        echo view ('/categorias/agregar');
        echo view ('/layout/footer');
    }

    public function store1(){
    $validacion=$this->validate(['categoria'=>'required','monto'=>'required',
        'fecha'=>'required','descripcion'=>'required']);

        if ($_POST) {
            //print_r($_POST);exit;
            $datos=[
                'categoria'=> $_POST['categoria'],
                'monto'=> $_POST['monto'],
                'fecha'=> $_POST['fecha'],
                'descripcion'=> $_POST['descripcion']
            ];
            $model= new CategoriasModel();

            $data = $model->add($datos);
        }
    }    
    


    
}
