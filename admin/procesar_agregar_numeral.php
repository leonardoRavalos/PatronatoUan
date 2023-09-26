<?php
require_once('db_config.php');

// Conectarse a la base de datos (reemplaza con tus propios datos de conexión)
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario
$numero = $_POST['numero'];
$titulo = $_POST['titulo'];

// Verificar si el número de numeral ya existe en la base de datos
$verificar_sql = "SELECT * FROM numerales WHERE numero = '$numero'";
$verificar_result = $conn->query($verificar_sql);

if ($verificar_result->num_rows > 0) {
    // El número de numeral ya existe, mostrar un mensaje de error
    echo "El número de numeral ya existe. Introduce un número único.";
} else {
    // El número de numeral es único, insertarlo en la base de datos
    $insert_sql = "INSERT INTO numerales (numero, titulo) VALUES ('$numero', '$titulo')";
    
    if ($conn->query($insert_sql) === TRUE) {
        echo "Nuevo numeral agregado con éxito.";
    } else {
        echo "Error al agregar el numeral: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
