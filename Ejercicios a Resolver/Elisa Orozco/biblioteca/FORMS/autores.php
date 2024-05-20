<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Autor</title>
</head>
<body>
    <h2>Agregar Autor</h2>
    <form action="insert_autor.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label><br>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"><br>
        <label for="nacionalidad">Nacionalidad:</label><br>
        <input type="text" id="nacionalidad" name="nacionalidad"><br>
        <label for="biografia">Biografía:</label><br>
        <textarea id="biografia" name="biografia"></textarea><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
