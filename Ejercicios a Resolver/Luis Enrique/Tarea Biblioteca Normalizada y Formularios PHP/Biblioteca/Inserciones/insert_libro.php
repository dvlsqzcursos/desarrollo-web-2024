<!-- insert_libro.php -->
<?php
include '../db.php';

$ID_Libro = $_POST['ID_Libro'];
$Titulo = $_POST['Titulo'];
$FK_Autor = $_POST['FK_Autor'];
$FK_Editorial = $_POST['FK_Editorial'];

$sql = "INSERT INTO LIBRO (ID_Libro, Titulo, FK_Autor, FK_Editorial) VALUES ('$ID_Libro', '$Titulo', '$FK_Autor', '$FK_Editorial')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo libro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
