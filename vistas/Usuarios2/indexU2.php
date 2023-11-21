<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head2.php");
    require_once("C://xampp/htdocs/GYM/controladores/controladorusuarios2.php");

    $obj = new controladorusuarios2();
    $row = $obj->indexSesion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tu Título</title>
    <style>
        
        <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
        }
    </style>
    </style>
</head>
<body>

<div class="container mt-4 d-flex justify-content-center align-items-center">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
              
            </thead>
            <tbody>
                <?php if ($row): ?>
                    <tr class="table-success">
                        <td>ID Cliente:</td>
                        <td><?= isset($row['id']) ? $row['id'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Primer Nombre:</td>
                        <td><?= isset($row['primernombre']) ? $row['primernombre'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Segundo Nombre:</td>
                        <td><?= isset($row['segundonombre']) ? $row['segundonombre'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Apellido paterno:</td>
                        <td><?= isset($row['primerapellido']) ? $row['primerapellido'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Apellido materno:</td>
                        <td><?= isset($row['segundoapellido']) ? $row['segundoapellido'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Edad:</td>
                        <td><?= isset($row['edad']) ? $row['edad'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Correo:</td>
                        <td><?= isset($row['correo']) ? $row['correo'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Celular:</td>
                        <td><?= isset($row['celular']) ? $row['celular'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Password:</td>
                        <td><?= isset($row['password']) ? $row['password'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Acciones:</td>
                        <td class="text-center align-middle">
                           
                        
                        <a href="http://localhost/GYM/indexusuarios.php" class="btn btn-primary">Regresar</a>
                    
                        </td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td colspan="2" class="text-center table-danger">No hay registros</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>



<?php require_once("C://xampp/htdocs/GYM/vistas/head/footer.php"); ?>

