<?php
require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
require_once("C://xampp/htdocs/GYM/controladores/controladorusuarios.php");

$obj = new controladorusuarios();
$lista_tbl_planes = $obj->most();
?>

<script>
    function validarEspacios() {
        var primernombre = document.getElementById("exampleInputEmail1_primernombre").value;
        var segundonombre = document.getElementById("exampleInputEmail1_segundonombre").value;
        var primerapellido = document.getElementById("exampleInputEmail1_primerapellido").value;
        var segundoapellido = document.getElementById("exampleInputEmail1_segundoapellido").value;

        if (primernombre.indexOf(' ') !== -1 || segundonombre.indexOf(' ') !== -1 || primerapellido.indexOf(' ') !== -1 || segundoapellido.indexOf(' ') !== -1) {
            alert("No se permiten espacios en blanco en los campos de nombre y apellido.");
            return false;
        }

        return true;
    }
</script>

<form action="storeU.php" method="POST" autocomplete="off" onsubmit="return validarEspacios();">

    <div class="mb-3">
        <label for="exampleInputEmail1_primernombre" class="form-label">Primer Nombre</label>
        <input type="text" name="primernombre" required class="form-control" id="exampleInputEmail1_primernombre" aria-describedby="emailHelp">


        <label for="exampleInputEmail1_segundonombre" class="form-label">Segundo Nombre (Opcional)</label>
        <input type="text" name="segundonombre" class="form-control" id="exampleInputEmail1_segundonombre" aria-describedby="emailHelp">

        <label for="exampleInputEmail1_primerapellido" class="form-label">Apellido materno</label>
        <input type="text" name="primerapellido" required class="form-control" id="exampleInputEmail1_primerapellido" aria-describedby="emailHelp">

        <label for="exampleInputEmail1_segundoapellido" class="form-label">Apellido paterno (opcional)</label>
        <input type="text" name="segundoapellido" class="form-control" id="exampleInputEmail1_segundoapellido" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Edad</label>
        <input type="text" name="edad" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">correo</label>
        <input type="text" name="correo" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">celular</label>
        <input type="text" name="celular" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">contraseña</label>
        <input type="text" name="password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <div class="mb-3">
            <label for="id" class="form-label">Plan</label>
            <select class="form-select form-select-sm" name="id" id="id">
                <?php if ($lista_tbl_planes): ?>
                    <?php foreach ($lista_tbl_planes as $registro): ?>
                        <option value="<?php echo $registro['id']; ?>">
                            <?php echo $registro['id'] . ' - ' . $registro['nombredelplan']; ?>
                        </option>
                    <?php endforeach; ?>
                <?php else: ?>
                    <option value="">No hay planes disponibles</option>
                <?php endif; ?>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="indexU.php">Cancelar</a>
</form>

<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>
