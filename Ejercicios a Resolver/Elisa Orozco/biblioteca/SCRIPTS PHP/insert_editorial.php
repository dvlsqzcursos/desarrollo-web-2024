<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $pais = $_POST['pais'];
    $año_fundacion = $_POST['año_fundacion'];
    $sitio_web = $_POST['sitio_web'];

    $sql = "INSERT INTO Editoriales (NombreEditorial, Pais, AñoFundacion, SitioWeb)
            VALUES ('$nombre', '$pais', '$año_fundacion', '$sitio_web')";

    if ($conn->query($sql) === TRUE) {
        echo "Nueva editorial agregada correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
