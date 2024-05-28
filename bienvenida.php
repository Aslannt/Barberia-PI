<?php

    session_start();

    if (!isset($_SESSION ['usuario'])){
        echo '
            <script>
                alert("Debe iniciar sesion");
                window.location = "loginRegister.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <a href="cerrar_sesion.php"> Cerrar sesion</a>
</body>
</html>