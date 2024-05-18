<!-- form_libro.html -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Libro</title>
</head>
<body>
    <h1>Agregar Libro</h1>
    <form action="../Inserciones/insert_libro.php" method="post">
        <label for="ID_Libro">ID Libro:</label>
        <input type="text" id="ID_Libro" name="ID_Libro"><br><br>
        <label for="Titulo">Título:</label>
        <input type="text" id="Titulo" name="Titulo"><br><br>
        <label for="FK_Autor">ID Autor:</label>
        <input type="text" id="FK_Autor" name="FK_Autor"><br><br>
        <label for="FK_Editorial">ID Editorial:</label>
        <input type="text" id="FK_Editorial" name="FK_Editorial"><br><br>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>
