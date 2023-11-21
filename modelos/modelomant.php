<?php

require_once("C://xampp/htdocs/GYM/BD/ConexionBD.php");

class modelomant {

    private $conexion;

    public function __construct() {
         //Obtener una instancia única de la clase ConexionBD
        $this->conexion = ConexionBD::getInstance();
    }


    public function insertar($Aviso,$status, $Horario, $Sucursal) {
        $query = "INSERT INTO mantenimiento
                  VALUES (null, :Aviso, :status, :Horario, :Sucursal)";
    
        $statement = $this->conexion->getConnection()->prepare($query);
    
        $statement->bindParam(":Aviso", $Aviso);
        $statement->bindParam(":status", $status);
        $statement->bindParam(":Horario", $Horario);
        $statement->bindParam(":Sucursal", $Sucursal);
        
        return ($statement->execute()) ? $this->conexion->getConnection()->lastInsertId() : false;
    }


    public function mostrar($id){

        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM mantenimiento WHERE id = :id");
        $statement->bindParam(":id", $id);

        return($statement->execute())? $statement->fetch(): false;
    }

    
    


    public function index(){
        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM mantenimiento");
        return ($statement->execute())? $statement->fetchAll(): false ;
    }


    public function update ($id,$Aviso, $status){

        $statement=$this->conexion->getConnection()->prepare("UPDATE mantenimiento SET Aviso=:Aviso, status=:status WHERE id=:id ");
        
        $statement->bindParam(":id", $id);
        $statement->bindParam(":Aviso", $Aviso);
        $statement->bindParam(":status", $status);
        $statement->bindParam(":Horario", $Horario);
        $statement->bindParam(":Sucursales", $Sucursales);
        ;

        return($statement->execute())? $id : false;

    }


    public function delete($id){
        $statement= $this->conexion->getConnection()->prepare("DELETE FROM mantenimiento WHERE id=:id");
        $statement->bindParam(":id", $id);
        return($statement->execute())?true:false;

    }


    
    
    }

?>
