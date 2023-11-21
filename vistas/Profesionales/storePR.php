<?php

    require_once ("C:/xampp/htdocs/GYM/controladores/controladorprofesional.php");

   

    $obj = new controladorprofesional();


    $obj -> guardar 
    ( $_POST['primernombre'],
    $_POST['segundonombre'], 
    $_POST['primerapellido'], 
    $_POST['segundoapellido'], 
    $_POST['edad'],
    $_POST['correo'], 
    $_POST['celular'],
    $_POST['profesion']);
  

    ?>