<!-- insert_devolucion.php -->
<?php
include '../db.php';

$ID_Devolucion = $_POST['ID_Devolucion'];
$FechaDevolucion = $_POST['FechaDevolucion'];
$FK_Prestamo = $_POST['FK_Prestamo'];

$sql = "INSERT INTO DEVOLUCIONES (ID_Devolucion, FechaDevolucion, FK_Prestamo) VALUES ('$ID_Devolucion', '$FechaDevolucion', '$FK_Prestamo')";

if ($conn->query($sql) === TRUE) {
    echo "Nueva devolución creada exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
