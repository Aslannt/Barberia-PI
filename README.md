# Proyecto Barberia PI 
## Realizado para el proyecto integrador  
Es importante poner todos los archivos en el archivo Xampp/htdocs
- Abrir Xampp e iniciarlizar servicios.
- Abrir conexion.php para verificar la conexion a la base de datos

Usar la conexión en tu aplicación
Ahora, puedes incluir el archivo conexion.php en cualquier otro archivo de tu aplicación donde necesites interactuar con la base de datos. Por ejemplo:

<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Ahora puedes usar $pdo para interactuar con la base de datos
// Por ejemplo, seleccionar todos los registros de una tabla
$query = $pdo->query('SELECT * FROM tu_tabla');
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    echo $row['columna']. "<br>";
}
?>

### Deivid Vanegas
