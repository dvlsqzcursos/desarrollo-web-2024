<!--index.html-->
<html>
    <body>
        <form action="formpost.php" method="post">
            Nombre: <input type="text" name="nombre"><br>
            Email: <input type="text" name="email"><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>




<!--frompost.php-->
<html>
    <body>
        Hola <?php echo $_POST["nombre"]; ?><br>
        Tu email es: <?php echo $_POST["email"]; ?>
    </body>
</html>










<!-- ejemplo conexion base de datos -->
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?> 

<?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 

<!--
    Métodos de petición HTTP

HTTP define un conjunto de métodos de petición para indicar la acción que se desea realizar para un recurso determinado. Aunque estos también pueden ser sustantivos, estos métodos de solicitud a veces son llamados HTTP verbs.

GET

    El método GET solicita una representación de un recurso específico. Las peticiones que usan el método GET sólo deben recuperar datos.
HEAD (en-US)

    El método HEAD pide una respuesta idéntica a la de una petición GET, pero sin el cuerpo de la respuesta.
POST

    El método POST se utiliza para enviar una entidad a un recurso en específico, causando a menudo un cambio en el estado o efectos secundarios en el servidor.
PUT

    El modo PUT reemplaza todas las representaciones actuales del recurso de destino con la carga útil de la petición.
DELETE

    El método DELETE borra un recurso en específico.
CONNECT

    El método CONNECT establece un túnel hacia el servidor identificado por el recurso.
OPTIONS (en-US)

    El método OPTIONS es utilizado para describir las opciones de comunicación para el recurso de destino.
TRACE

    El método TRACE realiza una prueba de bucle de retorno de mensaje a lo largo de la ruta al recurso de destino.
PATCH

    El método PATCH es utilizado para aplicar modificaciones parciales a un recurso.


-->