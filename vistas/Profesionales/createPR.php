<?php
require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
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

<form action="storePR.php" method="POST" autocomplete="off" onsubmit="return validarEspacios();">

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Primer Nombre</label>
        <input type="text" name="primernombre" required class="form-control" id="primernombre" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Segundo Nombre</label>
        <input type="text" name="segundonombre" class="form-control" id="segundonombre" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Primer Apellido</label>
        <input type="text" name="primerapellido" required class="form-control" id="primerapellido" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Segundo Apellido</label>
        <input type="text" name="segundoapellido" class="form-control" id="segundoapellido" aria-describedby="emailHelp">
    
    <label for="exampleInputEmail1" class="form-label">Edad</label>
        <input type="text" name="edad" required class="form-control" id="edad" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input type="text" name="correo" required class="form-control" id="correo" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Celular</label>
        <input type="text" name="celular" required class="form-control" id="celular" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Profesión</label>
        <input type="text" name="profesion" required class="form-control" id="profesion" aria-describedby="emailHelp">
    </div>
    

    <button type="submit" class="btn btn-primary mb-3">Guardar</button>
    <a class="btn btn-danger mb-3" href="indexPR.php">Cancelar</a>
</form>

<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>
