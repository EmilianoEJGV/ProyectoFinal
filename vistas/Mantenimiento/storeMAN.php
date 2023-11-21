<?php

    require_once ("C:/xampp/htdocs/GYM/controladores/controladormant.php");

    $obj = new controladormant();

    $obj -> guardar ( $_POST['Aviso'],  $_POST['status'],$_POST['Horario'],  $_POST['Sucursal'] );

?>
