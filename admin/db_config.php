<?php
define('DB_HOST', 'ingresos.tecnogob.mx');
define('DB_USERNAME', 'leo');
define('DB_PASSWORD', 'leo123');
define('DB_DATABASE', 'patronatoUAN');
define('DB_PORT', 3306);

// Intenta conectar a la base de datos
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
mysqli_set_charset($conn, "utf8mb4");

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
