<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Patronato</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .edit-button, .delete-button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        margin-right: 5px;
    }

    .edit-button:hover, .delete-button:hover {
        background-color: #45a049;
    }
    .add-button {
            display: inline-block;
            background-color: #1356A4;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 3px;
            margin: 20px;
        }

        .add-button:hover {
            background-color: #0f457f;
        }
        .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
    }

    /* Estilos para el contenido del modal */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 600px;
    }

    /* Estilos para el botón de cierre del modal */
    .close {
        color: #888;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    /* Estilos para el botón de cierre del modal al pasar el mouse */
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estiloAdmin.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="normalize.css">

    <script type="text/javascript" src="../assets/js/plugins/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/jquery.form.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/jquery.validate.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript" src="../assets/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/additional-methods.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/documentos.js"></script>


</head>

<body>

<div class="menufondo">
    <div class="enca-lenguajeb">
       <div align="center">
        </div>
    </div>
    <div class="logo">
        <img src="../imagenes/logo.png" width="250" height="35" id="logovela">
    </div>
    <div class="divmenu">
        <header>
 <div class="menu_bar">
        <a href="#" class="bt-menu"><span class="icon-list"></span>Menu</a>
  </div>
		<nav class="menu">
			<ul>
                <li><a href="bienvenida.php" >Bienvenida</a></li>
				<li><a href="usuarios.php" >Usuarios</a></li>
				<li><a href="noticias.php" >Noticias</a></li>
				<li><a href="formatos.php" >Formatos</a></li>
				<li><a href="recaudacion.php" >Recaudación</a></li>
				<li><a href="intereses.php" >Interes</a></li>
				<li><a href="numerales.php" >Numerales</a></li>
				<li><a href="privacidad.php" >Aviso de privacidad</a></li>
				<li><a href="infraestructura.php" >Infraestructura</a></li>
				<li><a href="patronato.php" class="activa">Patronato</a></li>
				<li><a href="pantalla_principal.php" >Pantalla Principal</a></li>
                <li><a href="secciones.php" >Secciones</a></li>

				<li><a href="logout.php" >Salir</a></li>
			</ul>
		</nav>
</header>
    </div>
</div>

<div id="espacio3"></div>




    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="patronato.php">¿Qué es?</a></li>
            <li role="presentation"><a href="quehace.php">¿Qué hace?</a></li>
            <li role="presentation"><a href="integrantes.php">¿Quiénes lo intengran?</a></li>
            <li role="presentation"><a href="historia.php">Historia</a></li>
            <li role="presentation" class="active"><a href="marco_legal.php">Marco Legal</a></li>
            <li role="presentation"><a href="organigrama.php">Organigrama</a></li>


        </ul>
        

    </div>
    <h1>Patronato</h1>
    <br>
    <button class="btn btn-primary" id="agregarMarcoLegal">Agregar marco legal</button>


    <?php
require_once('db_config.php');

// Realiza una consulta SQL para obtener los datos que necesitas
$query = "SELECT marco_legal.idmarco_legal, marco_legal.descripcion, archivos_marco_legal.documento
          FROM marco_legal
          LEFT JOIN archivos_marco_legal ON marco_legal.idmarco_legal = archivos_marco_legal.marco_legal";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conn));
}

// Imprime la tabla de contenido
echo '<table>
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Archivo</th>
                <th>Funciones</th>
            </tr>
        </thead>
        <tbody>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['descripcion'] . '</td>';
    echo '<td>' . $row['documento'] . '</td>';
    echo '<td>
            <a class="edit-button" href="modmarco.php?id=' . $row['idmarco_legal'] . '">Modificar</a>
            <button class="delete-button" onclick="borrar(' . $row['idmarco_legal'] . ')">Borrar</button>
          </td>';
    echo '</tr>';
}

echo '</tbody></table>';

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>


<script>
    document.getElementById('agregarMarcoLegal').addEventListener('click', function() {
        document.getElementById('modal').style.display = 'block';
    });

    // Función para ocultar el modal
    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }

    // Cierra el modal si se hace clic fuera del contenido del modal
    window.onclick = function(event) {
        var modal = document.getElementById('modal');
        if (event.target == modal) {
            closeModal();
        }
    }
</script>
<div id="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" required><br><br>
        
        <label for="archivo">Archivo PDF:</label>
        <input type="file" name="archivo" id="archivo" accept=".pdf" required><br><br>
        
        <input type="submit" name="submit" value="Subir Datos">
    </form>
    </div>
</div>


    


</div>


</body>

</html>
