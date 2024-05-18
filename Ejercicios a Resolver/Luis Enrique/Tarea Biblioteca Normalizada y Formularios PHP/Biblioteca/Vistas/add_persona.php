<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Persona</title>
</head>
<body>
    <h2>Agregar Persona</h2>
    <form action="../Inserciones/insert_persona.php" method="post">
        <label for="primerNombre">Primer Nombre:</label>
        <input type="text" id="primerNombre" name="primerNombre" required><br><br>
        
        <label for="segundoNombre">Segundo Nombre:</label>
        <input type="text" id="segundoNombre" name="segundoNombre"><br><br>
        
        <label for="primerApellido">Primer Apellido:</label>
        <input type="text" id="primerApellido" name="primerApellido" required><br><br>
        
        <label for="segundoApellido">Segundo Apellido:</label>
        <input type="text" id="segundoApellido" name="segundoApellido"><br><br>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>
        
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br><br>
        
        <label for="fkDireccion">ID Dirección:</label>
        <input type="text" id="fkDireccion" name="fkDireccion" required><br><br>
        
        <label for="fkGenero">ID Género:</label>
        <input type="text" id="fkGenero" name="fkGenero" required><br><br>
        
        <input type="submit" value="Agregar Persona">
    </form>
</body>
</html>
