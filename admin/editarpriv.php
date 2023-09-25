<?php
// Conectar a la base de datos
require_once('db_config.php');

// Obtener el ID del aviso desde la URL
if (isset($_GET['id'])) {
    $idaviso = $_GET['id'];

    // Buscar el aviso en la base de datos
    $query = "SELECT nombre, archivo FROM aviso_privacidad WHERE idaviso = $idaviso";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nombreActual = $row['nombre'];
        $archivoActual = $row['archivo'];
    } else {
        // Aviso no encontrado, manejar el error apropiadamente
        echo "Aviso no encontrado.";
        exit;
    }
} else {
    // No se proporcionó un ID de aviso válido en la URL, manejar el error apropiadamente
    echo "ID de aviso no válido.";
    exit;
}

// Procesar el formulario de edición aquí, actualizar el nombre y el archivo en la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevoNombre = $_POST["nombre"];

    // Procesar el archivo PDF si se ha cargado uno nuevo
    if ($_FILES["archivo"]["error"] == 0) {
        $archivoNuevo = $_FILES["archivo"]["name"];
        $archivoTemp = $_FILES["archivo"]["tmp_name"];
        move_uploaded_file($archivoTemp, "carpeta_destino/$archivoNuevo");

        // Actualiza la información en la base de datos
        $query = "UPDATE aviso_privacidad SET nombre = '$nuevoNombre', archivo = '$archivoNuevo' WHERE idaviso = $idaviso";
    } else {
        // Actualiza solo el nombre en la base de datos
        $query = "UPDATE aviso_privacidad SET nombre = '$nuevoNombre' WHERE idaviso = $idaviso";
    }

    if (mysqli_query($conn, $query)) {
        // Redirige a la página de privacidad.php después de guardar
        header("Location: privacidad.php");
        exit;
    } else {
        echo "Error al actualizar el aviso: " . mysqli_error($conn);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Aviso de Privacidad</title>
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
    <div class="container">
        <h1>Editar Aviso de Privacidad</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idaviso" value="<?php echo $idaviso; ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $nombreActual; ?>">
            </div>
            <div class="form-group">
                <label for="archivo">Archivo PDF:</label>
                <input type="file" name="archivo">
            </div>
            <input type="submit" value="Guardar Cambios">
        </form>
    </div>
</body>
</html>
