<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO Categorias (NombreCategoria, Descripcion, FechaCreacion, Estado)
            VALUES ('$nombre', '$descripcion', '$fecha_creacion', '$estado')";

    if ($conn->query($sql) === TRUE) {
        echo "Nueva categoría agregada correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
