<?php
session_start();
require_once('db_config.php'); // Include your database configuration

// Verificar si se ha enviado el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar'])) {
    $idNoticia = $_POST['id_noticia'];
    $nuevoTitulo = $_POST['nuevo_titulo'];
    $nuevaImagen = $_FILES['nueva_imagen']['name']; // Nombre del archivo de la nueva imagen
    $notaLarga = strip_tags($_POST['NOTA_LARGA']);
    $nota = strip_tags($_POST['nota']);

    // Validar y procesar la nueva imagen si se ha cargado
    if (!empty($nuevaImagen)) {
        $targetDirectory = "carpeta_destino/"; // Ruta donde se guardarán las imágenes
        $targetFile = $targetDirectory . basename($nuevaImagen);
        // Mover la imagen cargada a la carpeta de destino
        move_uploaded_file($_FILES['nueva_imagen']['tmp_name'], $targetFile);
    }

    // Actualizar la noticia en la base de datos
    $sql = "UPDATE noticias SET titulo = '$nuevoTitulo', imagen = '$nuevaImagen', NOTA_LARGA = '$notaLarga', nota = '$nota' WHERE idnoticia = $idNoticia";
    if ($conn->query($sql) === TRUE) {
        // Noticia actualizada con éxito
        // Puedes redirigir o mostrar un mensaje de éxito
        header("Location: noticias.php");
        exit();
    } else {
        echo "Error al actualizar la noticia: " . $conn->error;
    }
}

// Obtener el ID de la noticia desde la URL
if (isset($_GET['id'])) {
    $idNoticia = $_GET['id'];

    // Obtener los detalles de la noticia de la base de datos
    $query = "SELECT idnoticia, titulo, imagen, NOTA_LARGA, nota FROM noticias WHERE idnoticia = $idNoticia";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $tituloActual = $row['titulo'];
        $imagenActual = $row['imagen'];
        $notaLargaActual = $row['NOTA_LARGA'];
        $notaActual = $row['nota'];
    } else {
        echo "Noticia no encontrada.";
        exit();
    }
} else {
    echo "ID de noticia no proporcionado.";
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
    <h1>Editar Noticia</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_noticia" value="<?php echo $idNoticia; ?>">
        
        <label for="nuevo_titulo">Nuevo Título:</label>
        <input type="text" id="nuevo_titulo" name="nuevo_titulo" value="<?php echo $tituloActual; ?>"><br><br>
        
        <label for="nueva_imagen">Nueva Imagen:</label>
        <input type="file" id="nueva_imagen" name="nueva_imagen"><br><br>

        <label for="nota">Nota:</label><br>
        <textarea id="nota" name="nota" rows="5" cols="40"><?php echo htmlspecialchars($notaActual); ?></textarea><br><br>
        
        <label for="NOTA_LARGA">Nota Larga:</label><br>
        <textarea id="NOTA_LARGA" name="NOTA_LARGA" rows="5" cols="40"><?php echo htmlspecialchars($notaLargaActual); ?></textarea><br><br>


        
        <input type="submit" name="guardar" value="Guardar Cambios">
    </form>
</body>
</html>
