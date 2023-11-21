<?php
require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
require_once("C://xampp/htdocs/GYM/controladores/controladormant.php");

$obj = new controladormant();
$date = $obj->show($_GET['id']);
?>

<div class="container mt-4">
    <h2 class="text-center">Detalles del mantenimiento</h2>
    <div class="pb-3">
        <a href="indexMAN.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left fa-beat"></i> Regresar</a>
        <a href="editMAN.php?id=<?=$date[0]?>" class="btn btn-success">Actualizar</a>
        <!-- Button trigger modal -->
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro del aviso a mantenimiento?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Una vez eliminado, ya no se podrá recuperar el registro
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="deleteMAN.php?id=<?=$date[0]?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="table container-fluid">
        <thead>
            <tr>
                <th scope="col">ID del aviso</th>
                <th scope="col">Mensaje</th>
                <th scope="col">Status</th>
                <th scope="col">Horario</th>
                <th scope="col">Sucrusal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col"><?=$date[0]?></td>
                <td scope="col"><?=$date[1]?></td>
                <td scope="col"><?=$date[2]?></td>
                <td scope="col"><?=$date[3]?></td>
                <td scope="col"><?=$date[4]?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>