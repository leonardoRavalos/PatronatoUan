<?php
require_once('db_config.php');

if(isset($_POST['submit'])){
    $descripcion = $_POST['descripcion'];
    $carpeta_destino = 'carpeta_destino/';

    // Subir el archivo PDF
    $archivo_nombre = $_FILES['archivo']['name'];
    $archivo_temp = $_FILES['archivo']['tmp_name'];
    $archivo_destino = $carpeta_destino . $archivo_nombre;

    if(move_uploaded_file($archivo_temp, $archivo_destino)){
        // Insertar en la tabla marco_legal
        $sql_marco_legal = "INSERT INTO marco_legal (descripcion) VALUES ('$descripcion')";
        if(mysqli_query($conn, $sql_marco_legal)){
            $idmarco_legal = mysqli_insert_id($conn);

            // Insertar en la tabla archivos_marco_legal
            $sql_archivos = "INSERT INTO archivos_marco_legal (marco_legal, documento) VALUES ($idmarco_legal, '$archivo_nombre')";
            if(mysqli_query($conn, $sql_archivos)){
                echo "Datos subidos exitosamente.";
            } else {
                echo "Error al insertar en archivos_marco_legal: " . mysqli_error($conn);
            }
        } else {
            echo "Error al insertar en marco_legal: " . mysqli_error($conn);
        }
    } else {
        echo "Error al subir el archivo.";
    }
}

mysqli_close($conn);
?>
