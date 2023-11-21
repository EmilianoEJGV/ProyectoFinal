<?php


require_once("C://xampp/htdocs/GYM/controladores/controladorprofesional.php");

$obj = new controladorprofesional();
$obj->delete($_GET['id']);
require_once("C://xampp/htdocs/GYM/vistas/head/head.php");

?>