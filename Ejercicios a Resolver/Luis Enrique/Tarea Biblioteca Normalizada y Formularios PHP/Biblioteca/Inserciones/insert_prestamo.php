<!-- insert_prestamo.php -->
<?php
include '../db.php';

$ID_Prestamo = $_POST['ID_Prestamo'];
$FechaPrestamo = $_POST['FechaPrestamo'];
$FK_Persona = $_POST['FK_Persona'];
$FK_Libro = $_POST['FK_Libro'];

$sql = "INSERT INTO PRESTAMOS (ID_Prestamo, FechaPrestamo, FK_Persona, FK_Libro) VALUES ('$ID_Prestamo', '$FechaPrestamo', '$FK_Persona', '$FK_Libro')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo préstamo creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
