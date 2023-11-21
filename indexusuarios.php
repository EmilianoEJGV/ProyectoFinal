<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head2.php");
?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MuscleHealth Users - Tu destino para un cuerpo saludable</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e6e6e6;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header img {
            max-width: 200px;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            margin-bottom: 10px;
        }

        header img:hover {
            transform: scale(1.1);
        }

        header h1 {
            margin: 10px 0 0;
            font-size: 2em;
        }

        header p {
            margin: 5px 0 0;
            font-size: 1.2em;
        }

        main {
            padding: 20px;
        }

        .section {
            margin-top: 40px;
        }

        .image-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .image-container div {
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            flex-grow: 1;
            max-width: calc(33% - 20px);
        }

        .image-container div:hover {
            transform: scale(1.05);
        }

        .image-container div:nth-child(1) {
            background-color: white;
        }

        .image-container div:nth-child(2) {
            background-color: black;
            color: white;
        }

        .image-container div:nth-child(3) {
            background-color: #808080;
        }

        main img {
            width: 100%;
            max-height: 400px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        main img:hover {
            transform: scale(1.1);
        }

        main p {
            text-align: center;
            font-weight: bold;
            font-size: 1.4em;
            color: #555;
        }

        .solid-banner,
        .vertical-banner,
        .different-shaped-banner {
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            text-align: center;
            max-width: calc(33% - 40px);
            transition: background-color 0.3s ease-in-out;
        }

        .solid-banner:hover,
        .vertical-banner:hover,
        .different-shaped-banner:hover {
            background-color: #2980b9;
        }

        .horizontal-image {
            width: 100%;
            height: auto;
            max-width: 800px;
            margin: 20px auto;
        }

        .separator {
            width: 100%;
            height: auto;
        }

        /* Agregué el estilo para el banner con forma de listón vertical */
        .ribbon-banner {
            position: relative;
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            text-align: center;
            max-width: calc(33% - 40px);
            transition: background-color 0.3s ease-in-out;
        }

        .ribbon-banner:before {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -20px; /* La mitad del ancho del triángulo */
            border-width: 20px;
            border-style: solid;
            border-color: transparent transparent #3498db transparent;
        }

        .ribbon-banner:hover {
            background-color: #27ae60;
        }
    </style>
</head>

<body>

    <!-- Encabezado de la página -->
    <header>
        <img src="http://localhost/muscle.jpeg" alt="MuscleHealth Logo">
        <h1>Bienvenido a MuscleHealth</h1>
        <p>Descubre el poder de un cuerpo saludable y fuerte</p>
    </header>

    <main>
        <!-- Sección 1: Tres banners -->
        <div class="section">
            <h2>Descubre Nuestros Servicios</h2>
            <div class="image-container">
                <div>
                    <img src="http://localhost/personal.jpg" alt="Banner 1">
                    <p>Consulta tu información personal</p>
                </div>

                <div>
                    <img src="http://localhost/infoplan.png" alt="Banner 2">
                    <p>Descubre nuestros planes</p>
                </div>

                <div>
                    <img src="http://localhost/entrenos.jpeg" alt="Banner 3">
                    <p>Conoce a nuestros especialistas</p>
                </div>
            </div>
        </div>

        <!-- Sección 2: Dos banners -->
        <div class="section">
            <h2>Entrenadores</h2>
            <div class="image-container">
                <div class="solid-banner">
                    <p>¡Consulta la información de los entrenadores!</p>
                </div>

                <div class="solid-banner">
                    <p>¡Descubre nuestras ofertas especiales!</p>
                </div>
            </div>
        </div>

        <!-- Separador de secciones -->
        <!--<img class="services_" src="http://localhost/hola.jpg" alt="Separador">-->

        <!-- Sección 3: Dos banners verticales -->
        <div class="section">
            <h2>Conoce cómo mejorar tu alimentación</h2>
            <div class="image-container">
                <div class="vertical-banner">
                    <p>Descubre un espacio diseñado para tu bienestar.</p>
                    <p> </p>
                </div>

                <div class="vertical-banner">
                    <p>¡Este es el lugar perfecto para alcanzar tus metas de fitness!</p>
                </div>
            </div>
        </div>

        <!-- Sección 4: Tres banners con forma diferente -->
        <div class="section">
            <h2>Explora nuestros planes</h2>
            <img class="separator" src="http://localhost/separador.jpg" alt="Separador">
            <div class="image-container">
                <div class="ribbon-banner">
                    <p>Plan Fit Me</p>
                    <p>Entrena cuando quieras en tu gimnasio de elección</p>
                    <p> *Desde $349.00*</p>
                </div>

                <div class="ribbon-banner">
                    <p>Plan Fit Me</p>
                    <p>Entrena cuando quieras en tu gimnasio de elección</p>
                    <p> *Desde $349.00*</p>
                </div>

                <div class="ribbon-banner">
                    <p>Plan Fit Me</p>
                    <p>Entrena cuando quieras en tu gimnasio de elección</p>
                    <p> *Desde $349.00*</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2023 MuscleHealth. Todos los derechos reservados.</p>
    </footer>

</body>

</html>


<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
