<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Editorial</title>
</head>
<body>
    <h2>Agregar Editorial</h2>
    <form action="insert_editorial.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="pais">País:</label><br>
        <input type="text" id="pais" name="pais"><br>
        <label for="año_fundacion">Año de Fundación:</label><br>
        <input type="number" id="año_fundacion" name="año_fundacion"><br>
        <label for="sitio_web">Sitio Web:</label><br>
        <input type="text" id="sitio_web" name="sitio_web"><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
