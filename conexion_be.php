<?php
$conexion = mysqli_connect("localhost", "root", "Prueba123", "login_register_barberiapi");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
