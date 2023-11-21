<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head2.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profesionales de Nutrición y Entrenadores Certificados</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        /* Estilo para el encabezado */
        .custom-header {
            background-color: #007bff; /* Color de fondo */
            color: #fff; /* Color del texto */
            padding: 20px; /* Espaciado interno */
            text-align: center; /* Centrar el texto horizontalmente */
        }

        /* Estilo para el texto con efecto 3D y fondo */
        .card-title {
            text-transform: uppercase; /* Convertir el texto a mayúsculas */
            color: #fff; /* Color del texto */
            background-color: #007bff; /* Color de fondo */
            padding: 10px; /* Espaciado interno */
            margin-top: -10px; /* Ajuste de margen superior para el efecto 3D */
        }

        /* Establecer una altura fija para las imágenes */
        .card-img-top {
            height: 460px; /* Ajustar la altura según sea necesario */
            object-fit: cover; /* Ajustar el tamaño de la imagen sin distorsionar */
        }
    </style>
</head>
<body>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <!-- Encabezado estilizado -->
        <div class="custom-header">
            <h2 class="display-4">Profesionales de Nutrición y Entrenadores Certificados</h2>
            <p class="lead">¡Tu camino hacia la salud y la forma física!</p>
        </div>

        <!-- Sección de nutricionistas y entrenadores -->
        <div class="row">

            <!-- Nutricionistas -->
            <div class="col-md-6 text-center">
                <h3>Nutriólogos</h3>

                <!-- Primer nutricionista -->
                <div class="card mb-3">
                    <img src="http://localhost/nutri1.jpeg" alt="Nutricionista 1" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title text-center">Carolina Saludable</h5>
                        <p class="card-text">Especialista en nutrición deportiva </p>
                        <p class="card-text">Datos de contacto:</p>
                        <p class="card-text">Correo Electrónico: caro.saludable@gmail.com</p>
                        <p class="card-text">Teléfono: 555-123-4567</p>
                        
                    </div>
                </div>

                
                <!-- Segundo nutricionista -->
                <div class="card mb-3">
                    <img src="http://localhost/nutri3.jpg" alt="Nutricionista 1" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title text-center">Pablo NutriVidal</h5>
                        <p class="card-text">Especialista en nutrición vegetariana o vegana </p>
                        <p class="card-text">Datos de contacto:</p>
                        <p class="card-text">Correo Electrónico: pablo.nutrivida@hotmail.com</p>
                        <p class="card-text">Teléfono: 555-234-5678</p>
                        
                    </div>
                </div>

                 <!-- tercer nutricionista -->
                 <div class="card mb-3">
                    <img src="http://localhost/nutri2.jpg" alt="Nutricionista 1" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title text-center">Andrea Bienestar</h5>
                        <p class="card-text">Especialista en nutrición deportiva </p>
                        <p class="card-text">Datos de contacto:</p>
                        <p class="card-text">Correo Electrónico: andrea.bienestar@yahoo.com</p>
                        <p class="card-text">Teléfono: 555-345-6789</p>
                        
                    </div>
                </div>


                    <!-- cuarto nutricionista -->
                    <div class="card mb-3">
                    <img src="http://localhost/nutri4.jpeg" alt="Nutricionista 1" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title text-center">Martín NutriFit</h5>
                        <p class="card-text">Especialista en nutrición deportiva </p>
                        <p class="card-text">Datos de contacto:</p>
                        <p class="card-text">Correo Electrónico: martin.nutrifit@gmail.com</p>
                        <p class="card-text">Teléfono: 555-456-7890</p>
                        
                    </div>
                </div>
                <!-- Repite este bloque para cada nutricionista -->

            </div>

            <!-- Entrenadores -->
            <div class="col-md-6 text-center">
                <h3>Entrenadores Certificados</h3>

                <!-- Primer entrenador -->
                <div class="card mb-3">
                    <img src="http://localhost/venegas.jpeg" alt="Entrenador 1" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sebastían Venegas</h5>
                        <p class="card-text">Especialista en entrenamiento de cardio</p>
                        <p class="card-text">Datos de contacto:</p>
                        <p class="card-text">Correo Electrónico: venegod@gmail.com</p>
                        <p class="card-text">Teléfono: 558-023-9139</p>
                        
                    </div>
                </div>

                <!-- segundo entrenador -->
                <div class="card mb-3">
                    <img src="http://localhost/emiliano.jpeg" alt="Entrenador 1" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title text-center">Emiliano García</h5>
                        <p class="card-text">Especialista en Calistenia</p>
                        <p class="card-text">Datos de contacto:</p>
                        <p class="card-text">Correo Electrónico: emilianogarcia@musclehealth.com</p>
                        <p class="card-text">Teléfono: 56347-17379</p>
                        
                    </div>
                </div>

                <!-- Tercer entrenador -->
                <div class="card mb-3">
                    <img src="http://localhost/profesional.jpeg" alt="Entrenador 1" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gabriel Ramírez</h5>
                        <p class="card-text">Especialista en Entrenamiento de fuerza</p>
                        <p class="card-text">Datos de contacto:</p>
                        <p class="card-text">Correo Electrónico: gaboramirez@musclehealth.com</p>
                        <p class="card-text">Teléfono: 55145-22615</p>
                        
                    </div>
                </div>

                  <!-- cuarto entrenador -->
                  <div class="card mb-3">
                    <img src="http://localhost/rivera.jpeg" alt="Entrenador 1" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title text-center">Alejandro Villanueva</h5>
                        <p class="card-text">Especialista en Entrenamiento Deportivo específico</p>
                        <p class="card-text">Datos de contacto:</p>
                        <p class="card-text">Correo Electrónico: gaboramirez@musclehealth.com</p>
                        <p class="card-text">Teléfono: 55145-22615</p>
                        
                    </div>
                </div>

                <!-- Repite este bloque para cada entrenador -->

            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="bg-dark text-light text-center p-3">
        <p>Derechos de autor © 2023 GYM</p>
    </footer>

    <!-- Enlace a Bootstrap JS y jQuery (necesarios para ciertas funcionalidades de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>



<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>
