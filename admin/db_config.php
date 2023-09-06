<?php
$host = 'ingresos.tecnogob.mx';
$username = 'Leo';
$password = 'leo123';
$database = 'patronatoUAN';
$port = 3306;

$conn = new mysqli($host, $username, $password, $database, $port);

if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}
?>
