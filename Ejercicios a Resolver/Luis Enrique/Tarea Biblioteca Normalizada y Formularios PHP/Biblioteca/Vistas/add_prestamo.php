<!-- form_prestamo.html -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Préstamo</title>
</head>
<body>
    <h1>Agregar Préstamo</h1>
    <form action="../Inserciones/insert_prestamo.php" method="post">
        <label for="ID_Prestamo">ID Préstamo:</label>
        <input type="text" id="ID_Prestamo" name="ID_Prestamo"><br><br>
        <label for="FechaPrestamo">Fecha de Préstamo:</label>
        <input type="date" id="FechaPrestamo" name="FechaPrestamo"><br><br>
        <label for="FK_Persona">ID Persona:</label>
        <input type="text" id="FK_Persona" name="FK_Persona"><br><br>
        <label for="FK_Libro">ID Libro:</label>
        <input type="text" id="FK_Libro" name="FK_Libro"><br><br>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>
