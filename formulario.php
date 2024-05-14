<?php
// Conexión a la base de datos
$host = "localhost";
$dbname = "barberia pi";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if  ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreApellido = isset($_POST['nombreapellido'])? $_POST['nombreapellido'] : '';
        $correoElectronico = isset($_POST['correoelectronico'])? $_POST['correoelectronico'] : '';
        $telefono = isset($_POST['telefono'])? $_POST['telefono'] : '';
        $mensaje = isset($_POST['mensaje'])? $_POST['mensaje'] : '';
        $horario = isset($_POST['horario'])? $_POST['horario'] : ''; // Asegúrate de que este campo exista en tu formulario
        // Continúa con el resto de tu lógica para procesar los datos

        // Preparar y ejecutar la consulta SQL
        $sql = "INSERT INTO reservaciones (nombreapellido, correoelectronico, telefono, mensaje, horario) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nombreApellido, $correoElectronico, $telefono, $mensaje, $horario]);
        
        echo "Datos enviados correctamente.";
    }
} catch(PDOException $e) {
    echo "Error: ". $e->getMessage();
}

$conn = null;
?>
