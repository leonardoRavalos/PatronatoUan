<!DOCTYPE html>
<html>
<head>
    <title>Agregar Documento al Numeral</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #1356A4;
        }

        a {
            text-decoration: none;
            color: #1356A4;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
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

        input[type="file"] {
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
    <h2>Agregar Documento al Numeral</h2>

    <?php
    require_once('db_config.php');
    // Verificar si se proporcionó un ID de numeral válido
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $idnumeral = $_GET['id'];
    } else {
        echo "ID de numeral no válido";
        exit;
    }
    ?>

    <a href="numerales.php">Volver a la lista de numerales</a>

    <form action="procesar_agregar_documento.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="idnumeral" value="<?php echo $idnumeral; ?>">
        <label for="archivo">Seleccionar Archivo (Excel):</label>
        <input type="file" name="archivo" accept=".xlsx">
        <br><br>
        <input type="submit" value="Cargar Documento">
    </form>

    <h2>Documentos Asociados a este Numeral</h2>

    <?php
    // Conectar a la base de datos (reemplaza con tus propios datos de conexión)
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Consulta SQL para obtener los documentos asociados a este numeral
    $sql = "SELECT numerales, archivo FROM doctos_numeral WHERE numerales = $idnumeral";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '    <tr>';
        echo '        <th>Nombre del Archivo</th>';
        echo '        <th>Acciones</th>';
        echo '    </tr>';

        while ($row = $result->fetch_assoc()) {
            $iddocto_numeral = $row["numerales"];
            $archivoNombre = $row["archivo"];

            echo '    <tr>';
            echo "        <td>$archivoNombre</td>";
            echo '        <td>';
            echo "            <a href='editar_documento.php?id=$iddocto_numeral'>Editar</a> | ";
            echo "            <a href='eliminar_documento.php?id=$iddocto_numeral' >Eliminar</a>";
            echo '        </td>';
            echo '    </tr>';
        }

        echo '</table>';
    } else {
        echo "No hay documentos asociados a este numeral.";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>
</body>
</html>
