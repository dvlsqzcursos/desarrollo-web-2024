<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Categoría</title>
</head>
<body>
    <h2>Agregar Categoría</h2>
    <form action="insert_categoria.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion"></textarea><br>
        <label for="fecha_creacion">Fecha de Creación:</label><br>
        <input type="date" id="fecha_creacion" name="fecha_creacion"><br>
        <label for="estado">Estado:</label><br>
        <input type="text" id="estado" name="estado"><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
