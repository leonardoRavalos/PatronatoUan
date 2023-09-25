<?php
require_once('db_config.php'); // Incluye el archivo con las definiciones de las constantes y la configuración de la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['agregar'])) {
        $nombre = $_POST['nombre'];
        $anio = $_POST['anio'];
        $tipo = $_POST['tipo'];
        $trimestre = $_POST['trimestre'];

        try {
            $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
            mysqli_set_charset($conn, "utf8mb4");

            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Insertar un nuevo trimestre en la base de datos
            $query = "INSERT INTO trimestres (nombre, anio, tipo, tipo_trimestre) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssii", $nombre, $anio, $tipo, $trimestre);

            if ($stmt->execute()) {
                echo "Trimestre agregado correctamente. <a href='recaudacion.php'>Volver a la lista de trimestres</a>";
            } else {
                echo "Error al agregar el trimestre: " . $stmt->error;
            }

            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agregar Trimestre</title>
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
        <h2>Agregar Trimestre</h2>
        <form method="post" action="">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre"><br>
            <label for="anio">Año:</label>
            <input type="text" name="anio"><br>
            <label for="tipo">Tipo:</label>
            <select name="tipo">
                <?php
                try {
                    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
                    mysqli_set_charset($conn, "utf8mb4");

                    if ($conn->connect_error) {
                        die("Error de conexión: " . $conn->connect_error);
                    }

                    // Obtener los tipos de la tabla "tipo" para la lista desplegable
                    $tipos_query = "SELECT idtipo, tipo FROM tipo";
                    $tipos_result = $conn->query($tipos_query);

                    $tipos = array();
                    while ($row = $tipos_result->fetch_assoc()) {
                        echo '<option value="' . $row['idtipo'] . '">' . $row['tipo'] . '</option>';
                    }

                    $conn->close();
                } catch (Exception $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </select><br>
            <label for="trimestre">Trimestre:</label>
            <select name="trimestre">
                <?php
                try {
                    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
                    mysqli_set_charset($conn, "utf8mb4");

                    if ($conn->connect_error) {
                        die("Error de conexión: " . $conn->connect_error);
                    }

                    // Obtener los trimestres de la tabla "tipo_trimestre" para la lista desplegable
                    $trimestres_query = "SELECT idtipo_trimestre, tipo FROM tipo_trimestre";
                    $trimestres_result = $conn->query($trimestres_query);

                    $trimestres = array();
                    while ($row = $trimestres_result->fetch_assoc()) {
                        echo '<option value="' . $row['idtipo_trimestre'] . '">' . $row['tipo'] . '</option>';
                    }

                    $conn->close();
                } catch (Exception $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </select><br>
            <input type="submit" name="agregar" value="Agregar">
            <a href="recaudacion.php">Cancelar</a>
        </form>
    </div>
</body>
</html>
