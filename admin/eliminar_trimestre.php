<?php
require_once('db_config.php'); // Incluye el archivo con las definiciones de las constantes y la configuración de la base de datos

if (isset($_GET['idtrimestre'])) {
    $idtrimestre = $_GET['idtrimestre'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['confirmar'])) {
            try {
                $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
                mysqli_set_charset($conn, "utf8mb4");

                if ($conn->connect_error) {
                    die("Error de conexión: " . $conn->connect_error);
                }

                // Realiza la eliminación en la base de datos usando SQL DELETE
                $query = "DELETE FROM trimestres WHERE idtrimestre=?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("i", $idtrimestre);

                if ($stmt->execute()) {
                    echo "Trimestre eliminado correctamente. <a href='recaudacion.php'>Volver a la lista de trimestres</a>";
                } else {
                    echo "Error al eliminar el trimestre: " . $stmt->error;
                }

                $stmt->close();
                $conn->close();
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Trimestre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .confirmation-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        form {
            margin-top: 20px;
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
    <h2>Eliminar Trimestre</h2>
    <?php
    if (isset($idtrimestre)) {
        echo '<p>¿Seguro que quieres eliminar este registro?</p>';
        echo '<form method="post" action="">
                  <input type="hidden" name="idtrimestre" value="' . $idtrimestre . '">
                  <input type="submit" name="confirmar" value="Confirmar">
                  <a href="recaudacion.php">Cancelar</a>
              </form>';
    } else {
        echo '<p>ID de trimestre no válido.</p>';
    }
    ?>
</body>
</html>
