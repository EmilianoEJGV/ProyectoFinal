<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
    require_once("C://xampp/htdocs/GYM/controladores/controladorecep.php");

    $obj = new controladorecep();
    $rows = $obj->index();
?>

<div class="container mt-4">
    <div class="mb-3">
      <!--  <a href="/GYM/vistas/Usuarios/createR.php" class="btn btn-primary">Agregar nuevo Recepcionista</a>-->
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID del Recepcionista</th>
                <th scope="col" class="text-center">Nombre</th>
                <th scope="col" class="text-center">Correo</th>
                <th scope="col" class="text-center">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php if ($rows): ?>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td class="text-center"><?=$row[0]?></td>
                        <td class="text-center"><?=$row[1]?></td>
                        <td class="text-center"><?=$row[3]?></td>
                        <td class="text-center">
                            <a href="showR.php?id=<?=$row[0]?>" class="btn btn-primary"><i class="fa-solid fa-key"></i></a>
                            <a href="editR.php?id=<?=$row[0]?>" class="btn btn-secondary"><i class="fa-solid fa-rotate-right"></i></a>

                            <!-- Button trigger modal -->
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$row[0]?>"><i class="fa-solid fa-trash"></i></a>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel<?=$row[0]?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel<?=$row[0]?>">¿Desea eliminar el registro del empleado?</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Una vez eliminado, ya no se podrá recuperar el registro
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                            <a href="deleteR.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">No hay registros</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>
