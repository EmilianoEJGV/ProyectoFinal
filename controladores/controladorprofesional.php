<?php


class controladorprofesional {
    
    private $model;

    public function __construct(){
        // Incluye el archivo modelos/modelousuarios.php
        require_once("C://xampp/htdocs/GYM/modelos/modeloprofesional.php");

         // Crea una nueva instancia de la clase modelousuarios
        $this->model = new modeloprofesional();
    }


    public function guardar($primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular, $profesion){
        // Llama al método insertar de la clase modelousuarios para guardar la información del usuario
        $id=$this->model->insertar($primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular, $profesion);
        // Verifica si la inserción fue exitosa y la manda a las vistas
        return($id!=false) ? header("Location:showPR.php?id=".$id): header("Location:createPR.php");
    }

    
    public function show($id){
    return($this->model->mostrar($id) != false)? $this->model->mostrar($id): header("Location:indexPR.php") ;
    }

    public function index(){
        return($this->model->index()) ? $this->model->index(): false ;
    }


    public function update($id, $primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular){
        return($this->model->update($id, $primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular) 
        != false) ? header("Location:showPR.php?id=".$id) : header("Location.indexPR.php");
    }

    public function delete($id){
        return($this->model->delete($id)) ? header("Location:indexPR.php"): header("Location:showPR.php?id=".$id);
    }


    public function getUltimoResultado() {
        return $this->ultimoResultado;
    }

    public function setUltimoResultado($resultado) {
        $this->ultimoResultado = $resultado;
    }
    

}
?>
