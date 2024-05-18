<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77c0c7 3px solid;
        }
        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        header .highlight, header .current a {
            color: #77c0c7;
            font-weight: bold;
        }
        .content {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
        }
        .content h2 {
            color: #333;
        }
        .content ul {
            list-style: none;
            padding: 0;
        }
        .content li {
            background: #f4f4f4;
            margin-bottom: 10px;
            padding: 20px;
            border: 1px #ddd solid;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Sistema de Gestión de Biblioteca</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.php">Inicio</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="content">
            <h2>Bienvenido al Sistema de Gestión de Biblioteca</h2>
            <p>Seleccione una opción para gestionar la base de datos:</p>
            <ul>
                <li><a href="./Vistas/add_persona.php">Agregar Persona</a></li>
                <li><a href="./Vistas/add_libro.php">Agregar Libro</a></li>
                <li><a href="./Vistas/add_prestamo.php">Agregar Préstamo</a></li>
                <li><a href="./Vistas/add_devolucion.php">Agregar Devolución</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
