<?php
require_once('db_config.php');

if (isset($_GET['id'])) {
    $idformato = $_GET['id'];

    // Consulta SQL para obtener los datos del formato seleccionado
    $sqlFormato = "SELECT idformato, archivo, titulo FROM formatos WHERE idformato = $idformato";
    $resultFormato = $conn->query($sqlFormato);

    if ($resultFormato->num_rows == 1) {
        $row = $resultFormato->fetch_assoc();
        $archivo = $row['archivo'];
        $titulo = $row['titulo'];
    } else {
        echo "Formato no encontrado.";
        exit();
    }
} else {
    echo "ID de formato no proporcionado.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar'])) {
    // Obtener los datos enviados por el formulario
    $nuevoArchivo = $_FILES['nuevo_archivo']['name'];
    $nuevoTitulo = $_POST['nuevo_titulo'];

    // Validar y procesar la nueva imagen si se ha cargado
    if (!empty($nuevoArchivo)) {
        $targetDirectory = "carpeta_destino/"; // Ruta donde se guardarán los archivos
        $targetFile = $targetDirectory . basename($nuevoArchivo);
        // Mover el archivo cargado a la carpeta de destino
        move_uploaded_file($_FILES['nuevo_archivo']['tmp_name'], $targetFile);
    } else {
        $targetFile = $archivo; // Mantener el archivo existente si no se cargó uno nuevo
    }

    // Actualizar el formato en la base de datos
    $sql = "UPDATE formatos SET archivo = '$targetFile', titulo = '$nuevoTitulo' WHERE idformato = $idformato";
    
    if ($conn->query($sql) === TRUE) {
        // Formato actualizado con éxito
        // Puedes redirigir o mostrar un mensaje de éxito
        header("Location: formatos.php"); // Reemplaza 'tu_pagina.php' con la página a la que deseas redirigir
        exit();
    } else {
        echo "Error al actualizar el formato: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar Formato</title>
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

        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
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
    <h1>Modificar Formato</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="idformato" value="<?php echo $idformato; ?>">
        
        <label for="nuevo_archivo">Nuevo Archivo:</label>
        <input type="file" id="nuevo_archivo" name="nuevo_archivo"><br><br>
        
        <label for="nuevo_titulo">Nuevo Título:</label>
        <input type="text" id="nuevo_titulo" name="nuevo_titulo" value="<?php echo $titulo; ?>"><br><br>
        
        <input type="submit" name="guardar" value="Guardar Cambios">
    </form>
</body>
</html>
