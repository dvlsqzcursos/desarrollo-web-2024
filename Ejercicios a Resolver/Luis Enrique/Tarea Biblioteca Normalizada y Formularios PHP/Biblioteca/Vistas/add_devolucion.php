<!-- form_devolucion.html -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Devolución</title>
</head>
<body>
    <h1>Agregar Devolución</h1>
    <form action="../Inserciones/insert_devolucion.php" method="post">
        <label for="ID_Devolucion">ID Devolución:</label>
        <input type="text" id="ID_Devolucion" name="ID_Devolucion"><br><br>
        <label for="FechaDevolucion">Fecha de Devolución:</label>
        <input type="date" id="FechaDevolucion" name="FechaDevolucion"><br><br>
        <label for="FK_Prestamo">ID Préstamo:</label>
        <input type="text" id="FK_Prestamo" name="FK_Prestamo"><br><br>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>
