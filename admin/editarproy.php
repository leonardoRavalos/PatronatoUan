<?php
require_once('db_config.php');

$mensaje = '';
$error = '';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idproyecto = $_POST['idproyecto'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];

    // Procesar la imagen si se cargó una nueva
    if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $imagen_tmp = $_FILES['imagen']['tmp_name'];
        $nombre_imagen = $_FILES['imagen']['name'];
        $carpeta_destino = 'carpeta_destino/' . $nombre_imagen;

        if (move_uploaded_file($imagen_tmp, $carpeta_destino)) {
            // Imagen cargada con éxito, ahora actualiza la base de datos
            $sql_actualizar = "UPDATE proyectos SET nombre = '$nombre', descripcion = '$descripcion', categoria = '$categoria', imagen = '$carpeta_destino' WHERE idproyecto = $idproyecto";

            if ($conn->query($sql_actualizar) === TRUE) {
                $mensaje = "Proyecto actualizado correctamente.";
            } else {
                $error = "Error al actualizar el proyecto: " . $conn->error;
            }
        } else {
            $error = "Error al cargar la imagen.";
        }
    } else {
        // No se cargó una nueva imagen, actualiza la información sin cambiar la imagen
        $sql_actualizar = "UPDATE proyectos SET nombre = '$nombre', descripcion = '$descripcion', categoria = '$categoria' WHERE idproyecto = $idproyecto";

        if ($conn->query($sql_actualizar) === TRUE) {
            $mensaje = "Proyecto actualizado correctamente.";
        } else {
            $error = "Error al actualizar el proyecto: " . $conn->error;
        }
    }
}

if (isset($_GET['id'])) {
    $idproyecto = $_GET['id'];
    
    // Consulta SQL para obtener los datos del proyecto
    $sql_proyecto = "SELECT * FROM proyectos WHERE idproyecto = $idproyecto";
    $result_proyecto = $conn->query($sql_proyecto);

    if ($result_proyecto->num_rows == 1) {
        $row_proyecto = $result_proyecto->fetch_assoc();
    } else {
        $error = "Proyecto no encontrado.";
    }
} else {
    $error = "ID de proyecto no especificado.";
}

// Consulta SQL para obtener las categorías disponibles
$sql_categorias = "SELECT * FROM categorias";
$result_categorias = $conn->query($sql_categorias);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Proyecto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p.error {
            color: #f00;
        }

        p.success {
            color: #0c0;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            margin-top: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Editar Proyecto</h1>
    
    <?php
    if (!empty($error)) {
        echo "<p>Error: $error</p>";
    }

    if (!empty($mensaje)) {
        echo "<p>$mensaje</p>";
    }
    
    if (isset($row_proyecto)) {
    ?>
    <form method="POST" action="editarproy.php" enctype="multipart/form-data">
        <!-- Mostrar los datos actuales del proyecto -->
        <label for="nombre">Nombre del Proyecto:</label>
        <input type="text" name="nombre" value="<?php echo $row_proyecto['nombre']; ?>"><br>
        
        <label for="descripcion">Descripción del Proyecto:</label>
        <textarea name="descripcion"><?php echo $row_proyecto['descripcion']; ?></textarea><br>

        <label for="categoria">Categoría:</label>
        <select name="categoria">
            <?php
            while ($row_categoria = $result_categorias->fetch_assoc()) {
                $selected = ($row_proyecto['categoria'] == $row_categoria['idcategoria']) ? 'selected' : '';
                echo "<option value='{$row_categoria['idcategoria']}' $selected>{$row_categoria['categoria']}</option>";
            }
            ?>
        </select><br>

        <label for="imagen">Cambiar Imagen:</label>
        <input type="file" name="imagen"><br>
        
        <!-- Campo oculto para pasar el id del proyecto -->
        <input type="hidden" name="idproyecto" value="<?php echo $idproyecto; ?>">

        <input type="submit" value="Guardar Cambios">
    </form>
    <?php
    }
    ?>

    <a href="proyectos.php">Volver a la lista de proyectos</a>
</body>
</html>
