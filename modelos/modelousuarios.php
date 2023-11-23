<?php

require_once("C://xampp/htdocs/GYM/BD/ConexionBD.php");


class modelousuarios  {

    private $conexion;

    

    public function __construct() {
         //Obtener una instancia única de la clase ConexionBD
        $this->conexion = ConexionBD::getInstance();
    }


   // Definición de la consulta SQL para la inserción de un nuevo usuario
    public function insertar($primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular, $password,$idplan) {
        $query = "INSERT INTO tbl_usuarios 
        VALUES (null, :primernombre, :segundonombre, :primerapellido, :segundoapellido, :edad, :correo, :celular, :password, :idplan)";
    
    //Se prepara la consulta SQL utilizando el objeto de conexión PDO almacenado en la propiedad $this->conexion.
        $statement = $this->conexion->getConnection()->prepare($query);
    
        $statement->bindParam(":primernombre", $primernombre);
        $statement->bindParam(":segundonombre", $segundonombre);
        $statement->bindParam(":primerapellido", $primerapellido);
        $statement->bindParam(":segundoapellido", $segundoapellido);
        $statement->bindParam(":edad", $edad);
        $statement->bindParam(":correo", $correo);
        $statement->bindParam(":celular", $celular);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":idplan", $idplan);



    // Ejecución de la consulta y retorno del resultado esperado
        return ($statement->execute()) ? $this->conexion->getConnection()->lastInsertId() : false;
    }

  


    // Preparación de la consulta SQL para seleccionar un usuario por su ID
    public function mostrar($id){

        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM tbl_usuarios WHERE id= :id");
         // Asociación del parámetro :id con el valor proporcionado
        $statement->bindParam(":id", $id);

        return($statement->execute())? $statement->fetch(): false;
    }


      // Preparación de la consulta SQL para seleccionar a todos los usuarios dentro de la bd 
    public function index(){
        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM tbl_usuarios");
        return ($statement->execute())? $statement->fetchAll(): false ;
    }



    //Preparación de la consulta SQL para hacer una actualización de cualquiera de los datos del usuario
    public function update ($id,$primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular,$idplan){

        $statement=$this->conexion->getConnection()->prepare("UPDATE tbl_usuarios SET primernombre=:primernombre, segundonombre=:segundonombre, primerapellido=:primerapellido,
        segundoapellido= :segundoapellido, edad=:edad, correo=:correo, celular=:celular , idplan=:idplan WHERE id=:id ");
        
        $statement->bindParam(":id", $id);
        $statement->bindParam(":primernombre", $primernombre);
        $statement->bindParam(":segundonombre", $segundonombre);
        $statement->bindParam(":primerapellido", $primerapellido);
        $statement->bindParam(":segundoapellido", $segundoapellido);
        $statement->bindParam(":edad", $edad);
        $statement->bindParam(":correo", $correo);
        $statement->bindParam(":celular", $celular);
        $statement->bindParam(":idplan", $idplan);
        
        //$statement->bindParam(":Descp", $Descp);
        //$statement->bindParam("password", $password);

        return($statement->execute())? $id : false;

    }


//Preparación de la consulta SQL para hacer un borrado de un registro
    public function delete($id){
        $statement= $this->conexion->getConnection()->prepare("DELETE FROM tbl_usuarios WHERE id=:id");
        $statement->bindParam(":id", $id);
        return($statement->execute())?true:false;

    }

    public function planes(){
        $statement = $this->conexion->getConnection()->prepare("SELECT id FROM tbl_planes");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }

   /* public function planesU(){
        $statement = $this->conexion->getConnection()->prepare("SELECT idplan FROM tbl_usuarios");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }*/

    public function planesU(){
        $statement = $this->conexion->getConnection()->prepare("SELECT DISTINCT idplan FROM tbl_usuarios");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }
    


   

    }

?>
