<?php
session_start();
require_once('db_config.php');

// Comprobar si el usuario ya está logueado
if (isset($_SESSION['username'])) {
    header("Location: index.php"); // Redireccionar al index.php
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta SQL para verificar las credenciales del usuario en la tabla sec_users
    $sql = "SELECT * FROM usuarios WHERE user = '$username' AND passwd = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Las credenciales son válidas
        $_SESSION['username'] = $username;
        header("Location: ingreso.php"); // Redireccionar al panel de control
        exit();
    } else {
        // Las credenciales son incorrectas
        echo "Usuario o contraseña incorrectos.";
    }
}

$conn->close();
?>
