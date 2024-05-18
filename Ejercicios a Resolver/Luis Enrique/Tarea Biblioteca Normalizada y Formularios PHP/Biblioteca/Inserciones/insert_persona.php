<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $primerNombre = $_POST['primerNombre'];
    $segundoNombre = $_POST['segundoNombre'];
    $primerApellido = $_POST['primerApellido'];
    $segundoApellido = $_POST['segundoApellido'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $fkDireccion = $_POST['fkDireccion'];
    $fkGenero = $_POST['fkGenero'];

    $sql = "INSERT INTO PERSONA (ID_Persona, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Edad, Correo, FK_Direccion, FK_Genero)
            VALUES (UUID(), '$primerNombre', '$segundoNombre', '$primerApellido', '$segundoApellido', $edad, '$correo', '$fkDireccion', '$fkGenero')";

    if ($conn->query($sql) === TRUE) {
        echo "Nueva persona agregada exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>