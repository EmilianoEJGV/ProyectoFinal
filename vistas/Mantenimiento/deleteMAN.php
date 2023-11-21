<?php

require_once("C://xampp/htdocs/GYM/controladores/controladormant.php");

$obj = new controladormant();
$obj->delete($_GET['id']);

require_once("C://xampp/htdocs/GYM/vistas/head/head.php");

?>