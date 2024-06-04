<?php
session_start();
include 'conexion_be.php';

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'admin') {
    header("Location: index.html");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $sql = "DELETE FROM reservaciones WHERE ID = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([$id]);
        header("Location: admin_reservas.php");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
