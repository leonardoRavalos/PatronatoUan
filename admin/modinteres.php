<?php
session_start();
require_once('db_config.php'); // Include your database configuration

// Verificar si se ha enviado el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar'])) {
    $idinteres = $_POST['id_interes'];
    $nuevoEnlace = $_POST['nuevo_enlace'];
    $nuevaImagen = $_FILES['nueva_imagen']['name']; // Nombre del archivo de la nueva imagen

    // Validar y procesar la nueva imagen si se ha cargado
    if (!empty($nuevaImagen)) {
        $targetDirectory = "carpeta_destino/"; // Ruta donde se guardarán las imágenes
        $targetFile = $targetDirectory . basename($nuevaImagen);
        // Mover la imagen cargada a la carpeta de destino
        move_uploaded_file($_FILES['nueva_imagen']['tmp_name'], $targetFile);
    }

    // Actualizar la noticia en la base de datos
    $sql = "UPDATE intereses SET enlace = '$nuevoEnlace', imagen = '$nuevaImagen'WHERE idinteres = $idinteres";
    if ($conn->query($sql) === TRUE) {
        // Noticia actualizada con éxito
        // Puedes redirigir o mostrar un mensaje de éxito
        header("Location: intereses.php");
        exit();
    } else {
        echo "Error al cargar el interes: " . $conn->error;
    }
}

// Obtener el ID de interes desde la URL
if (isset($_GET['id'])) {
    $idinteres = $_GET['id'];

    // Obtener los detalles de interes la base de datos
    $query = "SELECT idinteres, enlace, imagen FROM intereses WHERE idinteres = $idinteres";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $interesActual = $row['enlace'];
        $imagenActual = $row['imagen'];
    } else {
        echo "interes no encontrada.";
        exit();
    }
} else {
    echo "ID de interes no proporcionado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Noticia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #1356A4;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="file"] {
            margin-top: 10px;
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
    <h1>Editar interes</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_interes" value="<?php echo $idinteres; ?>">
        
        <label for="nuevo_enlace">Nuevo enlace:</label>
        <input type="text" id="nuevo_enlace" name="nuevo_enlace" value="<?php echo $interesActual; ?>"><br><br>
        
        <label for="nueva_imagen">Nueva Imagen:</label>
        <input type="file" id="nueva_imagen" name="nueva_imagen"><br><br>
        
        <input type="submit" name="guardar" value="Guardar Cambios">
    </form>
</body>
</html>
