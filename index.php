<?php
// Definir variables con tu información personal
$nombre = "Alan Azael Del Angel Rivera"; // Reemplaza con tu nombre
$nombreCuenta = "L-20660050"; // Reemplaza con tu nombre de cuenta
$materia = "Cloud computing"; // Reemplaza con el nombre de tu materia

// Obtener la hora actual para el saludo dinámico
$hora = date("H");
if ($hora < 12) {
    $saludo = "¡Buenos días";
} elseif ($hora < 18) {
    $saludo = "¡Buenas tardes";
} else {
    $saludo = "¡Buenas noches";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Personal de <?php echo $nombre; ?></title>

    <!-- Importar Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Estilos CSS -->
    <style>
        /* Estilos generales */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            color: #332;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Encabezado */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
            font-weight: 600;
        }

        /* Navegación */
        nav {
            margin-top: 60px; /* Espacio para el encabezado fijo */
            background-color: #4A90E2;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 16px;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 4px;
        }

        nav ul li a:hover {
            background-color: #fff;
            color: #4A90E2;
        }

        /* Contenedor principal */
        .container {
            flex: 1;
            padding: 100px 20px 60px; /* Espacio para el encabezado y pie de página */
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .container h2 {
            font-size: 2em;
            color: #4A90E2;
            margin-bottom: 20px;
        }

        .container p {
            font-size: 1.2em;
            line-height: 1.6;
        }

        /* Pie de página */
        footer {
            background-color: #333;
            color: #fff;
            padding: 15px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
            box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
        }

        footer p {
            margin: 0;
            font-size: 1em;
        }

        /* Estilos Responsivos */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin: 10px 0;
            }

            .container {
                padding: 120px 10px 80px;
            }
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <h1>Bienvenido, <?php echo $nombre; ?></h1>
    </header>

    <!-- Navegación -->
    <nav>
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#cuenta">Cuenta</a></li>
            <li><a href="#materia">Materia</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>

    <!-- Contenedor Principal -->
    <div class="container">
        <!-- Sección de Inicio -->
        <section id="inicio">
            <h2><?php echo $saludo; ?>, <?php echo $nombre; ?>!</h2>
            <p>Esta es tu página personal donde puedes compartir información sobre tu cuenta y la materia que estás estudiando.</p>
        </section>

        <!-- Sección de Cuenta -->
        <section id="cuenta">
            <h2>Nombre de la Cuenta</h2>
            <p>Tu nombre de cuenta es: <strong><?php echo $nombreCuenta; ?></strong></p>
        </section>

        <!-- Sección de Materia -->
        <section id="materia">
            <h2>Materia de Clase</h2>
            <p>Actualmente estás estudiando: <strong><?php echo $materia; ?></strong></p>
        </section>

        <!-- Sección de Contacto (Opcional) -->
        <section id="contacto">
            <h2>Contacto</h2>
            <p>Puedes contactarme a través de mi correo electrónico: <a href="mailto:tuemail@ejemplo.com">tuemail@ejemplo.com</a></p>
        </section>
    </div>

    <!-- Pie de Página -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $nombre; ?>. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
