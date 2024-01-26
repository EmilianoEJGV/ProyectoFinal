<?php
require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
require_once("C://xampp/htdocs/GYM/controladores/controladorprofesional.php");

$obj = new controladorprofesional();
$user = $obj->show($_GET['id']);
?>

<script>
    function validarEspacios() {
        var primernombre = document.getElementById("primernombre").value;
        var segundonombre = document.getElementById("segundonombre").value;
        var primerapellido = document.getElementById("primerapellido").value;
        var segundoapellido = document.getElementById("segundoapellido").value;

        if (primernombre.indexOf(' ') !== -1 || segundonombre.indexOf(' ') !== -1 || primerapellido.indexOf(' ') !== -1 || segundoapellido.indexOf(' ') !== -1) {
            alert("No se permiten espacios en blanco en los campos de nombre y apellido.");
            return false;
        }

        return true;
    }
</script>

<div class="container mt-4">
    <form action="updatePR.php" method="post" autocomplete="off" onsubmit="return validarEspacios();">
        <h2 class="mb-4">Modificación de Registro</h2>

        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">ID del usuario</label>
            <div class="col-sm-10">
                <input type="text" name="id" readonly class="form-control-plaintext" value="<?=$user[0]?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Primer Nombre</label>
            <div class="col-sm-10">
                <input type="text" name="primernombre" class="form-control" value="<?=$user[1]?>" id="primernombre">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Segundo Nombre</label>
            <div class="col-sm-10">
                <input type="text" name="segundonombre" class="form-control" value="<?=$user[2]?>" id="segundonombre">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Primer Apellido</label>
            <div class="col-sm-10">
                <input type="text" name="primerapellido" class="form-control" value="<?=$user[3]?>" id="primerapellido">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Segundo Apellido</label>
            <div class="col-sm-10">
                <input type="text" name="segundoapellido" class="form-control" value="<?=$user[4]?>" id="segundoapellido">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Edad</label>
            <div class="col-sm-10">
                <input type="text" name="edad" class="form-control" value="<?=$user[5]?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Correo</label>
            <div class="col-sm-10">
                <input type="text" name="correo" class="form-control" value="<?=$user[6]?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Teléfono</label>
            <div class="col-sm-10">
                <input type="text" name="celular" class="form-control" value="<?=$user[7]?>">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
                <input type="submit" class="btn btn-success" value="Actualizar">
                <a class="btn btn-danger" href="showPR.php?id=<?=$user[0]?>">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>
