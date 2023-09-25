<?php
require_once('db_config.php');

if (isset($_GET['id'])) {
    $categoria_id = $_GET['id'];

    // Consulta SQL para obtener la información de la categoría seleccionada
    $sql_categoria = "SELECT * FROM categorias WHERE idcategoria = $categoria_id";
    $result_categoria = $conn->query($sql_categoria);

    if ($result_categoria->num_rows > 0) {
        $row_categoria = $result_categoria->fetch_assoc();
    } else {
        // Redirige a la página de categorías si la categoría no existe
        header("Location: categorias.php");
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Procesar la actualización de la categoría aquí
        $nueva_categoria = $_POST['nueva_categoria'];

        $sql_actualizar_categoria = "UPDATE categorias SET categoria = '$nueva_categoria' WHERE idcategoria = $categoria_id";

        if ($conn->query($sql_actualizar_categoria) === TRUE) {
            // Redirige a la página de categorías después de editar
            header("Location: categorias.php");
            exit();
        } else {
            echo "Error al actualizar la categoría: " . $conn->error;
        }
    }
} else {
    // Redirige a la página de categorías si no se proporciona un ID válido
    header("Location: categorias.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
    <style>
        /* Agrega tus estilos CSS aquí */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Editar Categoría</h1>
    <form method="POST">
        <label for="nueva_categoria">Nueva Categoría:</label>
        <input type="text" id="nueva_categoria" name="nueva_categoria" value="<?php echo $row_categoria['categoria']; ?>" required>
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
