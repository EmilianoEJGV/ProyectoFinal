<?php

require_once("C://xampp/htdocs/GYM/BD/ConexionBD.php");

class modeloplan2 {

    private $conexion;

    public function __construct() {
         //Obtener una instancia única de la clase ConexionBD
        $this->conexion = ConexionBD::getInstance();
    }


  
    public function mostrar($id){

        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM tbl_planes WHERE id = :id");
        $statement->bindParam(":id", $id);

        return($statement->execute())? $statement->fetch(): false;
    }

    
    

    public function index(){
        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM tbl_planes");
        return ($statement->execute())? $statement->fetchAll(): false ;
    }


   


    
    
    }

?>
