<?php
require_once("C://xampp/htdocs/GYM/vistas/head/head2.php");
require_once("C://xampp/htdocs/GYM/controladores/controladorplan.php");

$obj = new controladorplan();
$date = $obj->show($_GET['id']);
?>

<div class="container mt-4">
    <h2 class="text-center">Detalles de los planes</h2>
    <div class="pb-3">
        <a href="indexP2.php" class="btn btn-primary">Regresar</a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID del plan</th>
                    <th scope="col">Nombre del plan</th>
                    <th scope="col">Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col"><?=$date[0]?></td>
                    <td scope="col"><?=$date[1]?></td>
                    <td scope="col"><?=$date[2]?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>
