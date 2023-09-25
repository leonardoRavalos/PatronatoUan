<?php
require_once('db_config.php');

if (isset($_GET['id'])) {
    $idmarco_legal = $_GET['id'];

    // Consulta SQL para obtener los datos del marco legal seleccionado y su archivo relacionado
    $sqlMarcoLegal = "SELECT m.idmarco_legal, m.descripcion, a.documento
                      FROM marco_legal m
                      LEFT JOIN archivos_marco_legal a ON m.idmarco_legal = a.marco_legal
                      WHERE m.idmarco_legal = $idmarco_legal";
                      
    $resultMarcoLegal = $conn->query($sqlMarcoLegal);

    if ($resultMarcoLegal->num_rows == 1) {
        $row = $resultMarcoLegal->fetch_assoc();
        $descripcion = $row['descripcion'];
        $archivo = $row['documento']; // Aquí utilizamos 'documento' de la tabla 'archivos_marco_legal'
    } else {
        echo "Marco Legal no encontrado.";
        exit();
    }
} else {
    echo "ID de Marco Legal no proporcionado.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar'])) {
    // Obtener los datos enviados por el formulario
    $nuevaDescripcion = $_POST['nueva_descripcion'];
    $nuevoArchivo = $_FILES['nuevo_archivo']['name'];

    // Validar y procesar el nuevo archivo si se ha cargado
    if (!empty($nuevoArchivo)) {
        $targetDirectory = "carpeta_destino/"; // Ruta donde se guardarán los archivos
        $targetFile = $targetDirectory . basename($nuevoArchivo);
        // Mover el archivo cargado a la carpeta de destino
        move_uploaded_file($_FILES['nuevo_archivo']['tmp_name'], $targetFile);
    } else {
        $targetFile = $archivo; // Mantener el archivo existente si no se cargó uno nuevo
    }

    // Actualizar el marco legal y su archivo en la base de datos
    $sql = "UPDATE marco_legal m
            LEFT JOIN archivos_marco_legal a ON m.idmarco_legal = a.marco_legal
            SET m.descripcion = '$nuevaDescripcion', a.documento = '$targetFile'
            WHERE m.idmarco_legal = $idmarco_legal";
    
    if ($conn->query($sql) === TRUE) {
        // Marco Legal actualizado con éxito
        // Puedes redirigir o mostrar un mensaje de éxito
        header("Location: marco_legal.php"); // Reemplaza 'marco_legal.php' con la página a la que deseas redirigir
        exit();
    } else {
        echo "Error al actualizar el Marco Legal: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar Marco Legal</title>
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
    <h1>Modificar Marco Legal</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="idmarco_legal" value="<?php echo $idmarco_legal; ?>">
        
        <label for="nuevo_archivo">Nuevo Archivo:</label>
        <input type="file" id="nuevo_archivo" name="nuevo_archivo"><br><br>
        
        <label for="nueva_descripcion">Nueva Descripción:</label>
        <textarea id="nueva_descripcion" name="nueva_descripcion"><?php echo $descripcion; ?></textarea><br><br>
        
        <input type="submit" name="guardar" value="Guardar Cambios">
    </form>
</body>
</html>
