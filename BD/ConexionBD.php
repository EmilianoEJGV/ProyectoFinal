<?php
class ConexionBD {
    private static $instance;
    private $connection;

    //Creamos constructor con la infromación de nuestra base de datos
    private function __construct() {
        $servidor = "localhost";
        $baseDeDatos = "musclehealth";
        $usuario = "root";
        $contrasenia = "";

        try {
            $this->connection = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contrasenia);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            } 

         catch (Exception $ex) {
            echo $ex->getMessage();
         }
    }

    //: Esta función se utiliza para obtener una instancia única de la clase
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    //Devuelve el objeto de conexión PDO almacenado en la variable de instancia 
    public function getConnection() {
        return $this->connection;
    }

    public function closeConnection() {
        $this->connection = null; // Cierra la conexión estableciéndola a null
    } 
}
?>