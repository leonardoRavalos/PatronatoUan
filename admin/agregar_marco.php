<?php
require_once('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['agregar'])) {
    // Obtener los datos enviados por el formulario
    $descripcion = $_POST['descripcion'];
    $archivoNombre = $_FILES['archivo']['name'];

    // Validar y procesar el nuevo archivo
    if (!empty($archivoNombre)) {
        $targetDirectory = "carpeta_destino/"; // Ruta donde se guardarán los archivos
        $targetFile = $targetDirectory . basename($archivoNombre);

        // Mover el archivo cargado a la carpeta de destino
        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $targetFile)) {
            // Insertar el nuevo marco legal en la tabla 'marco_legal'
            $sqlInsertMarcoLegal = "INSERT INTO marco_legal (descripcion) VALUES ('$descripcion')";
            
            if ($conn->query($sqlInsertMarcoLegal) === TRUE) {
                // Marco Legal agregado con éxito
                $idmarco_legal = $conn->insert_id; // Obtener el ID generado automáticamente
                
                // Insertar el archivo relacionado en la tabla 'archivos_marco_legal' con el 'marco_legal' correspondiente
                $sqlInsertArchivo = "INSERT INTO archivos_marco_legal (id_marco_legal, documento) VALUES ($idmarco_legal, '$targetFile')";
                
                if ($conn->query($sqlInsertArchivo) === TRUE) {
                    // Archivo asociado agregado con éxito
                    header("Location: marco_legal.php"); // Redirige de nuevo a la página de marcos legales
                    exit();
                } else {
                    echo "Error al agregar el archivo: " . $conn->error;
                }
            } else {
                echo "Error al agregar el Marco Legal: " . $conn->error;
            }
        } else {
            echo "Error al subir el archivo.";
        }
    } else {
        echo "Debe seleccionar un archivo.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar o Actualizar Marco Legal</title>
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

        input[type="text"], input[type="file"], textarea {
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
    <h1>Agregar o Actualizar Marco Legal</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="idmarco_legal" value="<?php echo $idmarco_legal; ?>">
        
        <label for="nueva_descripcion">Nueva Descripción:</label>
        <textarea id="nueva_descripcion" name="nueva_descripcion" required><?php echo $descripcion; ?></textarea><br><br>
        
        <label for="nuevo_archivo">Nuevo Archivo:</label>
        <input type="file" id="nuevo_archivo" name="nuevo_archivo"><br><br>
        
        <input type="submit" name="guardar" value="Guardar Cambios">
    </form>
</body>
</html>
