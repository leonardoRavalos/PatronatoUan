<?php
require_once('db_config.php'); // Incluye el archivo con las definiciones de las constantes y la configuración de la base de datos

// Obtener información actual del trimestre
try {
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
    mysqli_set_charset($conn, "utf8mb4");

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    if (isset($_GET['idtrimestre'])) {
        $idtrimestre = $_GET['idtrimestre'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['modificar'])) {
                $nuevo_nombre = $_POST['nuevo_nombre'];
                $nuevo_anio = $_POST['nuevo_anio'];
                $nuevo_tipo = $_POST['nuevo_tipo'];
                $nuevo_trimestre = $_POST['nuevo_trimestre'];

                // Realiza la actualización en la base de datos usando SQL UPDATE
                $query = "UPDATE trimestres SET nombre=?, anio=?, tipo=?, tipo_trimestre=? WHERE idtrimestre=?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("sssii", $nuevo_nombre, $nuevo_anio, $nuevo_tipo, $nuevo_trimestre, $idtrimestre);

                if ($stmt->execute()) {
                    echo "Trimestre modificado correctamente. <a href='recaudacion.php'>Volver a la lista de trimestres</a>";
                } else {
                    echo "Error al modificar el trimestre: " . $stmt->error;
                }

                $stmt->close();
            }
        }

        // Obtener información actual del trimestre
        $query = "SELECT nombre, anio, tipo, tipo_trimestre FROM trimestres WHERE idtrimestre=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $idtrimestre);
        $stmt->execute();
        $stmt->bind_result($nombre, $anio, $tipo, $trimestre);
        $stmt->fetch();

        $stmt->close();
    } else {
        echo '<p>ID de trimestre no válido.</p>';
    }

    // Obtener los tipos de la tabla "tipo" para la lista desplegable
    $tipos_query = "SELECT idtipo, tipo FROM tipo";
    $tipos_result = $conn->query($tipos_query);

    $tipos = array();
    while ($row = $tipos_result->fetch_assoc()) {
        $tipos[] = $row;
    }

    // Obtener los trimestres de la tabla "tipo_trimestre" para la lista desplegable
    $trimestres_query = "SELECT idtipo_trimestre, tipo FROM tipo_trimestre";
    $trimestres_result = $conn->query($trimestres_query);

    $trimestres = array();
    while ($row = $trimestres_result->fetch_assoc()) {
        $trimestres[] = $row;
    }

    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modificar Trimestre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Modificar Trimestre</h2>
        <?php
        if (isset($idtrimestre)) {
            echo '<form method="post" action="">
                      <input type="hidden" name="idtrimestre" value="' . $idtrimestre . '">
                      <label for="nuevo_nombre">Nuevo Nombre:</label>
                      <input type="text" name="nuevo_nombre" value="' . $nombre . '"><br>
                      <label for="nuevo_anio">Nuevo Año:</label>
                      <input type="text" name="nuevo_anio" value="' . $anio . '"><br>
                      <label for="nuevo_tipo">Nuevo Tipo:</label>
                      <select name="nuevo_tipo">';
            foreach ($tipos as $tipo_option) {
                echo '<option value="' . $tipo_option['idtipo'] . '" ' . ($tipo_option['idtipo'] == $tipo ? 'selected' : '') . '>' . $tipo_option['tipo'] . '</option>';
            }
            echo '</select><br>
                      <label for="nuevo_trimestre">Nuevo Trimestre:</label>
                      <select name="nuevo_trimestre">';
            foreach ($trimestres as $trimestre_option) {
                echo '<option value="' . $trimestre_option['idtipo_trimestre'] . '" ' . ($trimestre_option['idtipo_trimestre'] == $trimestre ? 'selected' : '') . '>' . $trimestre_option['tipo'] . '</option>';
            }
            echo '</select><br>
                      <input type="submit" name="modificar" value="Modificar">
                      <a href="recaudacion.php">Cancelar</a>
                  </form>';
        } else {
            echo '<p>ID de trimestre no válido.</p>';
        }
        ?>
    </div>
</body>
</html>
