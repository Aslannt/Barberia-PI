<?php
session_start(); // Asegúrate de llamar a session_start() antes de cualquier salida

if (isset($_SESSION['usuario'])) {
    echo '<span>Bienvenido, '. htmlspecialchars($_SESSION['usuario']). '</span>';
} else {
    echo '<span>No estás autenticado.</span>';
}
?>
