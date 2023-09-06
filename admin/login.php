<?php
require_once('db_config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $sql = "SELECT * FROM Usuarios WHERE user = '$username' AND passwd = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // Inicio de sesión exitoso, redirige al dashboard
        header('Location: dashboard.php');
        exit;
    } else {
        echo 'Error: Usuario o contraseña incorrectos';
    }
}
?>
