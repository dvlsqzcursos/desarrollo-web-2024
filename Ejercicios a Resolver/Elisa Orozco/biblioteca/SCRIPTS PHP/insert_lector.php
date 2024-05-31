<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $sql = "INSERT INTO Lectores (NombreLector, Direccion, Telefono, Email)
            VALUES ('$nombre', '$direccion', '$telefono', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo lector agregado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
