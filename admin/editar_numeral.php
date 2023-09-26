<?php
require_once('db_config.php');

// Conectarse a la base de datos (reemplaza con tus propios datos de conexión)
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener el ID del numeral a editar desde la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $idnumeral = $_GET['id'];
} else {
    // Manejar el caso en que no se proporciona un ID válido
    echo "ID de numeral no válido";
    exit;
}

// Consulta SQL para obtener los datos del numeral a editar
$sql = "SELECT numero, titulo FROM numerales WHERE idnumeral = $idnumeral";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $numero = $row["numero"];
    $titulo = $row["titulo"];
} else {
    // Manejar el caso en que no se encuentra el numeral
    echo "Numeral no encontrado";
    exit;
}

// Procesar el formulario de edición si se envió
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nuevoNumero = $_POST['nuevoNumero'];
    $nuevoTitulo = $_POST['nuevoTitulo'];

    // Actualizar el numeral en la base de datos
    $updateSql = "UPDATE numerales SET numero = '$nuevoNumero', titulo = '$nuevoTitulo' WHERE idnumeral = $idnumeral";

    if ($conn->query($updateSql) === TRUE) {
        // Redirigir al usuario a la página de numerales.php después de guardar los cambios
        header("Location: numerales.php");
        exit;
    } else {
        echo "Error al actualizar el numeral: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Numeral</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #1356A4;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #1356A4;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0e4673;
        }
    </style>
</head>
<body>
    <h2>Editar Numeral</h2>
    <form action="" method="POST">
        <label for="nuevoNumero">Nuevo Número de Numeral:</label>
        <input type="text" name="nuevoNumero" value="<?php echo $numero; ?>" required>
        <br><br>
        <label for="nuevoTitulo">Nuevo Título:</label>
        <input type="text" name="nuevoTitulo" value="<?php echo $titulo; ?>" required>
        <br><br>
        <input type="submit" value="Guardar Cambios">
    </form>
</body>
</html>
