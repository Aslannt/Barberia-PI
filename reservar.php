<?php
session_start();
include 'conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreApellido = $_POST['nombreapellido'];
    $correoElectronico = $_POST['correoelectronico'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $horario = $_POST['horario'];

    try {
        $conn = new PDO("mysql:host=localhost;dbname=login_register_barberiapi", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insertar datos en la base de datos
        $sql = "INSERT INTO reservaciones (nombreapellido, correoelectronico, telefono, mensaje, horario) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nombreApellido, $correoElectronico, $telefono, $mensaje, $horario]);

        // Enviar correo de confirmación
        $to = $correoElectronico;
        $subject = "Confirmación de Reserva - Barbería PI";
        $body = "Hola $nombreApellido,\n\nGracias por tu reserva. Aquí tienes los detalles:\n\nNombre: $nombreApellido\nCorreo: $correoElectronico\nTeléfono: $telefono\nMensaje: $mensaje\nHorario: $horario\n\nTe esperamos.\n\nSaludos,\nBarbería PI";
        $headers = "From: no-reply@barberiapr.com";

        if (mail($to, $subject, $body, $headers)) {
            echo "Reserva realizada y correo enviado.";
        } else {
            echo "Reserva realizada, pero fallo el envío del correo.";
        }

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $conn = null;
}
?>
