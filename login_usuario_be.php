<?php
session_start();
include 'conexion_be.php'; // Esto establece la conexión usando PDO

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

// Validar login
$query = "SELECT * FROM usuarios WHERE correo = :correo AND contrasena = :contrasena";
$stmt = $conexion->prepare($query);
$stmt->bindParam(':correo', $correo);
$stmt->bindParam(':contrasena', $contrasena);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['usuario'] = $row['nombre_completo'];  // Guarda el nombre completo del usuario en la sesión
    header("Location: index.php");
    exit;
} else {
    echo '
    <script>
        alert("Usuario no existe");
        window.location = "loginRegister.php";
    </script>
    ';
    exit;
}

$conexion = null; // Es buena práctica cerrar la conexión cuando ya no sea necesaria
