<?php
//registro_usuario_be.php
include 'conexion_be.php'; // Esto establece la conexión usando PDO

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Encriptamiento de contraseña
$contrasena = hash('sha512', $contrasena);

// Verificar que el correo no se repita en la BD
$query = "SELECT * FROM usuarios WHERE correo = :correo";
$stmt = $conexion->prepare($query);
$stmt->bindParam(':correo', $correo);
$stmt->execute();

if($stmt->rowCount() > 0){
    echo '
        <script>
            alert("Este usuario ya esta creado!");
            window.location = "loginRegister.php";
        </script>
    ';
    exit();
}

$query = "INSERT INTO usuarios (nombre_completo, correo, contrasena) VALUES (:nombre_completo, :correo, :contrasena)";
$stmt = $conexion->prepare($query);
$stmt->bindParam(':nombre_completo', $nombre_completo);
$stmt->bindParam(':correo', $correo);
$stmt->bindParam(':contrasena', $contrasena);
$stmt->execute();

if($stmt->rowCount()){
    echo '
        <script>
            alert("Su usuario fue creado!");
            window.location = "loginRegister.php";
        </script>
    ';
}else{
    echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado.");
            window.location = "loginRegister.php";
        </script>
    ';
}

$conexion = null; // Es buena práctica cerrar la conexión cuando ya no sea necesaria
