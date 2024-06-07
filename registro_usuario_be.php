<?php
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Encriptamiento de contraseña
$contrasena = hash('sha512', $contrasena);

// Verificar que el correo no se repita en la BD
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

if (mysqli_num_rows($verificar_correo) > 0 ){
    echo '
    <script>
        alert("Este usuario ya está creado!");
        window.location = "loginRegister.php";
    </script>
    ';
    exit();
}

$query = "INSERT INTO usuarios (nombre_completo, correo, contrasena) VALUES('$nombre_completo', '$correo', '$contrasena')";
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("Su usuario fue creado!");
        window.location = "loginRegister.php";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Inténtelo de nuevo, usuario no almacenado.");
        window.location = "loginRegister.php";
    </script>
    ';
}

mysqli_close($conexion);
?>
