<?php
class Vehiculo{
    public function asignarVehiculo($edad){
        if ($edad >= 18){
            return ['vehiculo' => 'Automovil','licencia' => 'licencia estandar'];
        } elseif ($edad < 18 && $edad >= 16){
            return ['vehiculo' => 'Motocicleta','licencia' => 'licencia autorizada por tutor'];
        } else {
            return ['vehiculo' => 'Bicicleta', 'licencia' => 'No se requiere'];
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $vehiculo = new Vehiculo();
    $resultado = $vehiculo->asignarVehiculo($edad);
    echo "<script>alert('A $nombre se le puede asignar: $resultado[vehiculo] con $resultado[licencia]');</script>";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Nombre: <input type="text" name="nombre">
    Edad: <input type="text" name="edad">
    <input type="submit">
</form>

