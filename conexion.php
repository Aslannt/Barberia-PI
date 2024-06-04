<?php
//conexion.php
// Definir los detalles de conexión
$host = 'localhost';
$dbname = 'login_register_barberiapi';
$username = 'root';
$password = 'Prueba123';

try {
    // Crear una nueva instancia de PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Establecer el modo de error de PDO en excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Imprimir un mensaje de éxito
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    // Manejar el error de conexión
    die("Error de conexión: ". $e->getMessage());
}
?>
