<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor_id = $_POST['autor_id'];
    $editorial_id = $_POST['editorial_id'];
    $categoria_id = $_POST['categoria_id'];
    $lugar_id = $_POST['lugar_id'];
    $año_publicacion = $_POST['año_publicacion'];
    $isbn = $_POST['isbn'];
    $numero_paginas = $_POST['numero_paginas'];

    $sql = "INSERT INTO Libros (Titulo, AutorID, EditorialID, CategoriaID, LugarID, AñoPublicacion, ISBN, NumeroPaginas)
            VALUES ('$titulo', '$autor_id', '$editorial_id', '$categoria_id', '$lugar_id', '$año_publicacion', '$isbn', '$numero_paginas')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo libro agregado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
