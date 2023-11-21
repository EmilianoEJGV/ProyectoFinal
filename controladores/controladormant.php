<?php

class controladormant{

    private $model;

    public function __construct(){
        require_once("C://xampp/htdocs/GYM/modelos/modelomant.php");
        $this->model = new modelomant();
    }


    public function guardar($Aviso, $status, $Horario,$Sucursal){
        $id=$this->model->insertar($Aviso, $status,$Horario,$Sucursal);
        return($id!=false) ? header("Location:showMAN.php?id=".$id): header("Location:createMAN.php");
    
    }

    public function show($id){
        return($this->model->mostrar($id) != false)? $this->model->mostrar($id): header("Location:indexMAN.php") ;
    }

    public function index(){
        return($this->model->index()) ? $this->model->index(): false ;
    }


    public function update($id, $Aviso, $status,$Horario,$Sucursal){
        return($this->model->update($id, $Aviso, $status,$Horario,$Sucursal) 
        != false) ? header("Location:showMAN.php?id=".$id) : header("Location.indexMAN.php");
    }

    public function delete($id){
        return($this->model->delete($id)) ? header("Location:indexMAN.php") :header("Location:showMAN.php?id=".$id);
    }

}
?>