<?php

require_once("C://xampp/htdocs/GYM/BD/ConexionBD.php");


class modeloprofesional  {

    private $conexion;

    

    public function __construct() {
         //Obtener una instancia única de la clase ConexionBD
        $this->conexion = ConexionBD::getInstance();
    }


  

   // Definición de la consulta SQL para la inserción de un nuevo usuario
    public function insertar($primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular, $profesion) {
        $query = "INSERT INTO tbl_profesionales 
        VALUES (null, :primernombre, :segundonombre, :primerapellido, :segundoapellido, :edad, :correo, :celular, :profesion)";
    
    //Se prepara la consulta SQL utilizando el objeto de conexión PDO almacenado en la propiedad $this->conexion.
        $statement = $this->conexion->getConnection()->prepare($query);
    
        $statement->bindParam(":primernombre", $primernombre);
        $statement->bindParam(":segundonombre", $segundonombre);
        $statement->bindParam(":primerapellido", $primerapellido);
        $statement->bindParam(":segundoapellido", $segundoapellido);
        $statement->bindParam(":edad", $edad);
        $statement->bindParam(":correo", $correo);
        $statement->bindParam(":celular", $celular);
        $statement->bindParam(":profesion", $profesion);



    // Ejecución de la consulta y retorno del resultado esperado
        return ($statement->execute()) ? $this->conexion->getConnection()->lastInsertId() : false;
    }

  


    // Preparación de la consulta SQL para seleccionar un usuario por su ID
    public function mostrar($id){

        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM tbl_profesionales WHERE id= :id");
         // Asociación del parámetro :id con el valor proporcionado
        $statement->bindParam(":id", $id);

        return($statement->execute())? $statement->fetch(): false;
    }


      // Preparación de la consulta SQL para seleccionar a todos los usuarios dentro de la bd 
    public function index(){
        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM tbl_profesionales");
        return ($statement->execute())? $statement->fetchAll(): false ;
    }



    //Preparación de la consulta SQL para hacer una actualización de cualquiera de los datos del usuario
    public function update ($id,$primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular){

        $statement=$this->conexion->getConnection()->prepare("UPDATE tbl_profesionales SET primernombre=:primernombre, segundonombre=:segundonombre, primerapellido=:primerapellido,
        segundoapellido= :segundoapellido, edad=:edad, correo=:correo, celular=:celular WHERE id=:id ");
        
        $statement->bindParam(":id", $id);
        $statement->bindParam(":primernombre", $primernombre);
        $statement->bindParam(":segundonombre", $segundonombre);
        $statement->bindParam(":primerapellido", $primerapellido);
        $statement->bindParam(":segundoapellido", $segundoapellido);
        $statement->bindParam(":edad", $edad);
        $statement->bindParam(":correo", $correo);
        $statement->bindParam(":celular", $celular);
        

        return($statement->execute())? $id : false;

    }


//Preparación de la consulta SQL para hacer un borrado de un registro
    public function delete($id){
        $statement= $this->conexion->getConnection()->prepare("DELETE FROM tbl_profesionales WHERE id=:id");
        $statement->bindParam(":id", $id);
        return($statement->execute())?true:false;

    }


    
    
    }

?>