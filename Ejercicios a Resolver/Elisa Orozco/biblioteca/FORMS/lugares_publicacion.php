<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Lugar de Publicación</title>
</head>
<body>
    <h2>Agregar Lugar de Publicación</h2>
    <form action="insert_lugar_publicacion.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="pais">País:</label><br>
        <input type="text" id="pais" name="pais"><br>
        <label for="ciudad">Ciudad:</label><br>
        <input type="text" id="ciudad" name="ciudad"><br>
        <label for="codigo_postal">Código Postal:</label><br>
        <input type="text" id="codigo_postal" name="codigo_postal"><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
