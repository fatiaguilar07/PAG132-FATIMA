<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$email = $_POST['email'];

$sql = "INSERT INTO proveedores 
(nombre, direccion, telefono, celular, email)
VALUES 
('$nombre', '$direccion', '$telefono', '$celular', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>