<?php
session_start();
require_once('db_config.php'); // Include your database configuration

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform validation and sanitation for the ID if needed

    if (isset($_POST['confirm'])) {
        // The user has confirmed the deletion
        // Delete the user with the given ID
        $sql = "DELETE FROM usuarios WHERE idusuario = '$id'";
        if ($conn->query($sql) === TRUE) {
            // User deleted successfully
            // You may want to redirect or display a success message
        } else {
            echo "Error deleting user: " . $conn->error;
        }
        // Redirect back to the user list page
        header("Location: usuarios.php");
        exit();
    } elseif (isset($_POST['cancel'])) {
        // The user has canceled the deletion
        // Redirect back to the user list page
        header("Location: usuarios.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmación de Eliminación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .confirmation-container {
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

        p {
            color: #555;
        }

        form {
            margin-top: 20px;
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
    <div class="confirmation-container">
        <h1>Confirmar Eliminación</h1>
        <p>¿Estás seguro de que deseas eliminar este usuario?</p>
        <form method="post">
            <input type="submit" name="confirm" value="Confirmar">
            <input type="submit" name="cancel" value="Cancelar">
        </form>
    </div>
</body>
</html>

