<?php

require_once("C://xampp/htdocs/GYM/controladores/controladorusuarios.php");
$obj= new controladorusuarios();
$obj->update($_POST['id'],$_POST['primernombre'],$_POST['segundonombre'],
    $_POST['primerapellido'],$_POST['segundoapellido'],$_POST['edad'],$_POST['correo'],$_POST['celular']);




?>