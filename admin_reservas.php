<?php
session_start();
include 'conexion_be.php';

// Verificar si el usuario es un administrador
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'admin') {
    header("Location: index.html");
    exit;
}

try {
    $sql = "SELECT * FROM reservaciones";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();
    $reservas = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Reservas - Barbería PI</title>
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
        <h2>Administrar Reservas</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Mensaje</th>
                    <th>Horario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservas as $reserva): ?>
                <tr>
                    <td><?php echo $reserva['ID']; ?></td>
                    <td><?php echo $reserva['nombreapellido']; ?></td>
                    <td><?php echo $reserva['correoelectronico']; ?></td>
                    <td><?php echo $reserva['telefono']; ?></td>
                    <td><?php echo $reserva['mensaje']; ?></td>
                    <td><?php echo $reserva['horario']; ?></td>
                    <td>
                        <a href="editar_reserva.php?id=<?php echo $reserva['ID']; ?>">Editar</a>
                        <a href="eliminar_reserva.php?id=<?php echo $reserva['ID']; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar esta reserva?');">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <img src="imagenes/logo-blanco.png">
        <p class="copyright">Mira nuestras estadísticas aquí -> <a href="estadisticas.html">Estadísticas</a></p>
        <p>&copy Copyright Barbería PI - 2024</p>
    </footer>
</body>
</html>
