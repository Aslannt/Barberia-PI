<?php
session_start();
include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena'");

if (mysqli_num_rows($validar_login) > 0){
    $row = mysqli_fetch_assoc($validar_login);
    $_SESSION['usuario'] = $row['nombre_completo'];  // Guarda el nombre completo del usuario en la sesión
    header("location: bienvenida.php");
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
?>
