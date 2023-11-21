<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
?>

<style>
    /* Estilo del contenedor del formulario */
    #form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
        background-color: #f4f4f4;
        padding-top: 50px;
    }

    /* Estilos generales del formulario */
    form {
        max-width: 400px;
        width: 100%;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Estilos para los campos de entrada */
    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        margin-bottom: 15px;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }

    /* Estilos para el combobox */
    #status {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url('http://localhost/comboop.png');
        background-size: 12px;
        background-position: calc(100% - 20px) center;
        background-repeat: no-repeat;
    }

    /* Estilos para los botones */
    .btn {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: #ffffff;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #ffffff;
        margin-left: 10px;
    }
</style>

<div id="form-container">
    <form action="storeMAN.php" method="POST" autocomplete="off">
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje <i class="fa-solid fa-comment-dots"></i></label>
            <input type="text" name="Aviso" required class="form-control" id="mensaje" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status de la tarea  <i class="fa-solid fa-list-check"></i></label>
            <select name="status" required class="form-control" id="status">
                <option value="No iniciado">No iniciado</option>
                <option value="En proceso">En proceso</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Finalizado">Finalizado</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Horarios   <i class="fa-solid fa-clock"></i></label>
            <select name="Horario" required class="form-control" id="status">
                <option value="5am-6am">5am-6am</option>
                <option value="12pm-1pm">2pm-3pm</option>
                <option value="10pm-11pm">10pm-11pm</option>
                
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Sucursal  <i class="fa-solid fa-building-circle-arrow-right"></i></label>
            <select name="Sucursal" required class="form-control" id="status">
                <option value="Oriente">Oriente</option>
                <option value="Sur">Sur</option>
                <option value="Norte">Norte</option>
                <option value="Poniente">Poniente</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-danger" href="indexMAN.php">Cancelar</a>
    </form>
</div>

<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>
