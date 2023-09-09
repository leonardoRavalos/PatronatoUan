<?php
session_start();
require_once('db_config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta SQL para verificar las credenciales del usuario en la tabla sec_users
    $sql = "SELECT * FROM sec_users WHERE name = '$username' AND pswd = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Las credenciales son válidas
        $_SESSION['username'] = $username;
        header("Location: bienvenida.php"); // Redireccionar al panel de control
        exit();
    } else {
        // Las credenciales son incorrectas
        echo "Usuario o contraseña incorrectos.";
    }
}

$conn->close();
?>
