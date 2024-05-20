<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $pais = $_POST['pais'];
    $ciudad = $_POST['ciudad'];
    $codigo_postal = $_POST['codigo_postal'];

    $sql = "INSERT INTO LugaresPublicacion (NombreLugar, Pais, Ciudad, CodigoPostal)
            VALUES ('$nombre', '$pais', '$ciudad', '$codigo_postal')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo lugar de publicación agregado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
