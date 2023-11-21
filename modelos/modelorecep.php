<?php

require_once("C://xampp/htdocs/GYM/BD/ConexionBD.php");

class modelorecep {

    private $conexion;

    public function __construct() {
         //Obtener una instancia única de la clase ConexionBD
        $this->conexion = ConexionBD::getInstance();
    }

    
   // Definición de la consulta SQL para la inserción de un nuevo empleado
    public function insertar( $recepcionista, $password, $correo) {
        $query = "INSERT INTO tbl_recepcionistas 
                  VALUES (null,:recepcionista,:password,:correo)";
    
        $statement = $this->conexion->getConnection()->prepare($query);
    
        $statement->bindParam(":recepcionista", $recepcionista);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":correo", $correo);
    
    
        return ($statement->execute()) ? $this->conexion->getConnection()->lastInsertId() : false;
    }

// Preparación de la consulta SQL para seleccionar un empleado por su ID
    public function mostrar($id){

        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM tbl_recepcionistas WHERE id= :id");
        $statement->bindParam(":id", $id);

        return($statement->execute())? $statement->fetch(): false;
    }


    public function index(){
        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM tbl_recepcionistas");
        return ($statement->execute())? $statement->fetchAll(): false ;
    }

  // Preparación de la consulta SQL para seleccionar a todos los empleados dentro de la bd 
    public function update ($id,$recepcionista, $password, $correo){

        $statement=$this->conexion->getConnection()->prepare("UPDATE tbl_recepcionistas SET recepcionista=:recepcionista, password=:password, correo=:correo WHERE id=:id");

        
        $statement->bindParam(":id", $id);
        $statement->bindParam(":recepcionista", $recepcionista);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":correo", $correo);
        
        return($statement->execute())? $id : false;

    }

//Preparación de la consulta SQL para hacer una actualización de cualquiera de los datos del usuario
    public function delete($id){
        $statement= $this->conexion->getConnection()->prepare("DELETE FROM tbl_recepcionistas WHERE id=:id");
        $statement->bindParam(":id", $id);
        return($statement->execute())?true:false;

    }


    
    
    }

?>
