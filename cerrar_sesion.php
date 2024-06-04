<?php
session_start();
unset($_SESSION['usuario']);
session_destroy();
header("Location: loginRegister.php"); // Redirige al usuario a la página de inicio de sesión
exit;
?>
