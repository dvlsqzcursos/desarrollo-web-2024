<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Libro</title>
</head>
<body>
    <h2>Agregar Libro</h2>
    <form action="insert_libro.php" method="post">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo"><br>
        <label for="autor_id">Autor ID:</label><br>
        <input type="number" id="autor_id" name="autor_id"><br>
        <label for="editorial_id">Editorial ID:</label><br>
        <input type="number" id="editorial_id" name="editorial_id"><br>
        <label for="categoria_id">Categoría ID:</label><br>
        <input type="number" id="categoria_id" name="categoria_id"><br>
        <label for="lugar_id">Lugar de Publicación ID:</label><br>
        <input type="number" id="lugar_id" name="lugar_id"><br>
        <label for="año_publicacion">Año de Publicación:</label><br>
        <input type="number" id="año_publicacion" name="año_publicacion"><br>
        <label for="isbn">ISBN:</label><br>
        <input type="text" id="isbn" name="isbn"><br>
        <label for="numero_paginas">Número de Páginas:</label><br>
        <input type="number" id="numero_paginas" name="numero_paginas"><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
