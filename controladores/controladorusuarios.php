<?php


class controladorusuarios {

    private $model;
  

    public function __construct(){

        // Incluye el archivo modelos/modelousuarios.php
        require_once("C://xampp/htdocs/GYM/modelos/modelousuarios.php");

         // Crea una nueva instancia de la clase modelousuarios
        $this->model = new modelousuarios();

         // Crea una instancia del observador y vincúlalo al modelo
        
        
    }


    public function guardar($primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular, $password, $idplan){

        // Llama al método insertar de la clase modelousuarios para guardar la información del usuario
        $id=$this->model->insertar($primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular, $password,$idplan);
        // Verifica si la inserción fue exitosa y la manda a las vistas
        return($id!=false) ? header("Location:showU.php?id=".$id): header("Location:createU.php");
    
    }

    

    public function show($id){

        return($this->model->mostrar($id) != false)? $this->model->mostrar($id): header("Location:indexU.php") ;

    }

    public function index(){
        return($this->model->index()) ? $this->model->index(): false ;
    }


    public function update($id, $primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular,$idplan){
        return($this->model->update($id, $primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular,$idplan) 
        != false) ? header("Location:showU.php?id=".$id) : header("Location.indexU.php");
    }

    /*public function delete($id){

        return($this->model->delete($id)) ? header("Location:indexU.php") :header("Location:showU.php?id=".$id);
    }*/
    public function delete($id){
        return ($this->model->delete($id)) ? header("Location:indexU.php") : header("Location:showU.php?id=".$id);
    }

    public function most(){
        return $this->model->planes();
    }

    public function mostU(){
        return $this->model->planesU();
    }
   


    public function getUltimoResultado() {
        return $this->ultimoResultado;
    }

    public function setUltimoResultado($resultado) {
        $this->ultimoResultado = $resultado;
    }

    

}
?>