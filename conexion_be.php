<?php
//conexion_be.php
$host = "localhost";
$dbname = "login_register_barberiapi";
$username = "root";
$password = "Prueba123";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
