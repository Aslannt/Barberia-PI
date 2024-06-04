<?php
session_start();
include 'conexion_be.php';

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'admin') {
    header("Location: index.html");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $sql = "SELECT * FROM reservaciones WHERE ID = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([$id]);
        $reserva = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nombreApellido = $_POST['nombreapellido'];
    $correoElectronico = $_POST['correoelectronico'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $horario = $_POST['horario'];

    try {
        $sql = "UPDATE reservaciones SET nombreapellido = ?, correoelectronico = ?, telefono = ?, mensaje = ?, horario = ? WHERE ID = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([$nombreApellido, $correoElectronico, $telefono, $mensaje, $horario, $id]);
        header("Location: admin_reservas.php");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Reserva - Barbería PI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="caja">
            <h1><img src="imagenes/logo.png"></h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="productos.html">Servicios</a></li>
                    <li><a href="contacto.html">Reserva</a></li>
                    <li><a href="ventas.html">Productos</a></li>
                    <li><a href="logout.php">Cerrar Sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <h2>Editar Reserva</h2>
        <?php if ($reserva): ?>
        <form action="editar_reserva.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $reserva['ID']; ?>">
            <input type="text" name="nombreapellido" value="<?php echo $reserva['nombreapellido']; ?>" required>
            <input type="email" name="correoelectronico" value="<?php echo $reserva['correoelectronico']; ?>" required>
            <input type="tel" name="telefono" value="<?php echo $reserva['telefono']; ?>" required>
            <textarea name="mensaje" required><?php echo $reserva['mensaje']; ?></textarea>
            <select name="horario" required>
                <option value="Mañana" <?php echo $reserva['horario'] == 'Mañana' ? 'selected' : ''; ?>>Mañana</option>
                <option value="Tarde" <?php echo $reserva['horario'] == 'Tarde' ? 'selected' : ''; ?>>Tarde</option>
                <option value="Noche" <?php echo $reserva['horario'] == 'Noche' ? 'selected' : ''; ?>>Noche</option>
            </select>
            <button type="submit">Guardar Cambios</button>
        </form>
        <?php else: ?>
        <p>Reserva no encontrada.</p>
        <?php endif; ?>
    </main>

    <footer>
        <img src="imagenes/logo-blanco.png">
        <p class="copyright">Mira nuestras estadísticas aquí -> <a href="estadisticas.html">Estadísticas</a></p>
        <p>&copy Copyright Barbería PI - 2024</p>
    </footer>
</body>
</html>
