<?php
session_start();
require_once('db_config.php'); // Include your database configuration

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform validation and sanitation for the ID if needed

    // Retrieve user details from the database
    $sql = "SELECT * FROM usuarios WHERE idusuario = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "Usuario no encontrado.";
        exit();
    }

    // Handle form submission for editing
    if (isset($_POST['guardar'])) {
        $nombre = $_POST['nombre'];
        $user = $_POST['user'];
        $clave = $_POST['clave'];

        // Perform input validation and sanitation here

        // Update user data in the database
        $sql = "UPDATE usuarios SET nombre = '$nombre', user = '$user', passwd = '$clave' WHERE idusuario = '$id'";
        if ($conn->query($sql) === TRUE) {
            // Data updated successfully
            // Redirect back to usuarios.php
            header("Location: usuarios.php");
            exit();
        } else {
            echo "Error updating user: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .edit-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            outline: none;
        }

        input[type="submit"] {
            background-color: #1356A4;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0f457f;
        }
    </style>
</head>
<body>
    <div class="edit-form">
        <h1>Editar Usuario</h1>
        <form method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $user['nombre']; ?>"><br>
            <label for="user">Usuario:</label>
            <input type="text" id="user" name="user" value="<?php echo $user['user']; ?>"><br>
            <label for="clave">Contraseña:</label>
            <input type="password" id="clave" name="clave" value="<?php echo $user['passwd']; ?>"><br>
            <input type="submit" name="guardar" value="Guardar Cambios">
        </form>
    </div>
</body>
</html>

