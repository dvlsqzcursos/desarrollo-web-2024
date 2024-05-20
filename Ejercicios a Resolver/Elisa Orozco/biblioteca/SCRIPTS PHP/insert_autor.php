<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $nacionalidad = $_POST['nacionalidad'];
    $biografia = $_POST['biografia'];

    $sql = "INSERT INTO Autores (NombreAutor, FechaNacimiento, Nacionalidad, Biografia)
            VALUES ('$nombre', '$fecha_nacimiento', '$nacionalidad', '$biografia')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo autor agregado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
