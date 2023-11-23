<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
    require_once("C://xampp/htdocs/GYM/controladores/controladorusuarios.php");

    $obj = new controladorusuarios();
    $lista_tbl_planes = $obj->most();
?>


        <form action = "storeU.php" method= "POST" autocomplete= "off">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Primer Nombre</label>
            <input type="text" name="primernombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


            <label for="exampleInputEmail1" class="form-label">Segundo Nombre</label>
            <input type="text" name="segundonombre"  required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">Primer Apellido</label>
            <input type="text" name="primerapellido"  required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


            <label for="exampleInputEmail1" class="form-label">Segundo Apellido</label>
            <input type="text" name="segundoapellido" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">Edad</label>
            <input type="text" name="edad"  required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

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
                    <option value="<?php echo $registro['id']; ?>"><?php echo $registro['id']; ?></option>
                <?php endforeach; ?>
            <?php else: ?>
                <option value="">No hay planes disponibles</option>
            <?php endif; ?>
        </select>
    </div>



    </div>


        </div>
        
       
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a  class="btn btn-danger" href="indexU.php">Cancelar</a>
        </form>



<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>