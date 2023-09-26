<?php
require_once('db_config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se proporcionó un ID de numeral válido
    if (isset($_POST['idnumeral']) && is_numeric($_POST['idnumeral'])) {
        $idnumeral = $_POST['idnumeral'];
    } else {
        echo "ID de numeral no válido";
        exit;
    }

    // Verificar si se seleccionó un archivo
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        // Nombre y ubicación del archivo
        $archivoNombre = $_FILES['archivo']['name'];
        $archivoTempName = $_FILES['archivo']['tmp_name'];
        $carpetaDestino = 'carpeta_destino/';

        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($archivoTempName, $carpetaDestino . $archivoNombre)) {
            // Conectar a la base de datos (reemplaza con tus propios datos de conexión)
            $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Error de conexión a la base de datos: " . $conn->connect_error);
            }

            // Insertar el registro en la tabla doctos_numeral
            $sql = "INSERT INTO doctos_numeral (numerales, archivo) VALUES ($idnumeral, '$archivoNombre')";

            if ($conn->query($sql) === TRUE) {
                // Redirigir de vuelta a la página de agregar_docnum.php
                header("Location: agregar_docnum.php?id=$idnumeral");
                exit;
            } else {
                echo "Error al insertar el registro en la base de datos: " . $conn->error;
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
        } else {
            echo "Error al cargar el archivo.";
        }
    } else {
        echo "Por favor, selecciona un archivo válido.";
    }
}
?>