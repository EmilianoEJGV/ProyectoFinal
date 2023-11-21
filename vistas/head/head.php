<?php
    session_start();
    if(isset($_SESSION['username'])){
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Musclehealth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cb4afdf1af.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid bg-dark p-2 mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/GYM/index.php">Musclehealth Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuarios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/GYM/vistas/Usuarios/indexU.php">Usuarios (Información) <i class="fa-solid fa-user"></i></a></li>
                            <li><a class="dropdown-item" href="/GYM/vistas/Usuarios/createU.php">Agregar nuevo usuario <i class="fa-solid fa-user"></i>+</a></li>
                        </ul>
                    </li>

                    <!-- Second Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Planes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/GYM/vistas/Planes/indexP.php">Información planes <i class="fa-solid fa-book-open"></i></a></li>
                            <li><a class="dropdown-item" href="/GYM/vistas/Planes/createP.php">Agregar nuevo plan <i class="fa-solid fa-book-open"></i>+</a></li>
                        </ul>
                    </li>
                    <!-- Add more dropdowns as needed -->

                    <!-- Third Dropdown Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Empleados
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/GYM/vistas/Recepcionistas/indexR.php">Información Recepcionistas <i class="fa-regular fa-circle-user"></i></a></li>
                            <li><a class="dropdown-item" href="/GYM/vistas/Recepcionistas/createR.php">Agregar nuevo Empleado(Recepcionista)<i class="fa-regular fa-circle-user"></i>+</a></li>
                        </ul>
                    </li>
                    <!-- Add more dropdowns as needed -->

                     <!-- Third Dropdown Dropdown -->
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profesionales (Entrenadores y Nutriólogos)
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/GYM/vistas/Profesionales/indexPR.php">Información de Nutriólogos y Entrenadores <i class="fa-regular fa-user"></i></a></li>
                            <li><a class="dropdown-item" href="/GYM/vistas/Profesionales/createPR.php">Agregar nuevo Profesional(Nutriólogos y Entrenadores) <i class="fa-regular fa-user"></i>+</a></li>
                        </ul>
                    </li>
                    <!-- Add more dropdowns as needed -->

                      <!-- Third Dropdown Dropdown -->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mantenimiento
                        </a>
                        <ul class="dropdown-menu">
                           <!--  <li><a class="dropdown-item" href="/GYM/vistas/Profesionales/indexPR.php">Información de Nutriólogos y Entrenadores</a></li>-->
                            <li><a class="dropdown-item" href="/GYM/vistas/Mantenimiento/createMAN.php">Aviso a equipo de mantenimiento</a></li>
                        </ul>
                    </li>
                    <!-- Add more dropdowns as needed -->


                    
                    <!-- fourth Dropdown Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sesión
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/GYM/cerrar.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                    <!-- Add more dropdowns as needed -->

                    

                </ul>
            </div>
        </div>
    </nav>

    </div>
    <div class="container-fluid">




        