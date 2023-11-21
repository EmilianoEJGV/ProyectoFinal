<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
    require_once("C://xampp/htdocs/GYM/controladores/controladorusuarios.php");

    $obj = new controladorusuarios();
    $rows = $obj->index();
?>

<div class="container mt-4">
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <a href="/GYM/vistas/Usuarios/createU.php" class="btn btn-primary"><i class="fa-sharp fa-solid fa-user">+</i></a>
          <a href="/GYM/vistas/fpdf/ReporteUsuarios.php" target="_blank" class="btn btn-success">Generar reporte  <i class="fa-solid fa-file-pdf"></i> </a>
       
    </a>
    </div>

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">ID Cliente</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Edad</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php if ($rows): ?>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?=$row[0]?></td>
                        <td><?=$row[1]?></td>
                        <td><?=$row[3]?></td>
                        <td><?=$row[4]?></td>
                        <td><?=$row[5]?></td>
                        <td class="align-middle">
                            <a href="showU.php?id=<?=$row[0]?>" class="btn btn-primary"><i class="fa-sharp fa-solid fa-user"></i></a>
                            <a href="editU.php?id=<?=$row[0]?>" class="btn btn-secondary"><i class="fa-solid fa-rotate-right"></i></a>
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$row[0]?>"><i class="fa-solid fa-trash"></i></a>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel<?=$row[0]?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel<?=$row[0]?>">¿Desea eliminar el registro del usuario?</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Una vez eliminado, ya no se podrá recuperar el registro
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                            <a href="deleteU.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No hay registros</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>
