<?php

class controladorplan2{

    private $model;

    public function __construct(){
        require_once("C://xampp/htdocs/GYM/modelos/modeloplan2.php");
        $this->model = new modeloplan2();
    }


    public function show($id){
        return($this->model->mostrar($id) != false)? $this->model->mostrar($id): header("Location:indexP.php") ;
    }

    public function index(){
        return($this->model->index()) ? $this->model->index(): false ;
    }



    public function delete($id){
        return($this->model->delete($id)) ? header("Location:indexP.php") :header("Location:showP.php?id=".$id);
    }

}
?>