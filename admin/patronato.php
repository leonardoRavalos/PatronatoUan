<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Patronato</title>

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estiloAdmin.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <link rel="stylesheet" href="normalize.css">

    <script type="text/javascript" src="../assets/js/plugins/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/jquery.validate.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/additional-methods.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript" src="../assets/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="../assets/js/patronato.js"></script>


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


<div class="container">

    

    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="patronato.php">¿Qué es?</a></li>
            <li role="presentation"><a href="quehace.php">¿Qué hace?</a></li>
            <li role="presentation"><a href="integrantes.php">¿Quiénes lo intengran?</a></li>
            <li role="presentation"><a href="historia.php">Historia</a></li>
            <li role="presentation"><a href="marco_legal.php">Marco Legal</a></li>
            <li role="presentation"><a href="organigrama.php">Organigrama</a></li>


        </ul>

    </div>
    <?php
require_once('db_config.php');

$contenido = "";
$foto_que = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["contenido"])) {
        $nuevoContenido = $_POST["contenido"];

        // Actualiza el contenido en la base de datos
        $query = "UPDATE patronato SET que = '$nuevoContenido' "; // Ajusta el ID o condición según tus necesidades

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Contenido guardado exitosamente.";
        } else {
            echo "Error al guardar el contenido.";
        }
    }

    // Procesa la carga de la imagen
    if (isset($_FILES["imagen"]["name"])) {
        $nombreArchivo = $_FILES["imagen"]["name"];
        $rutaTemporal = $_FILES["imagen"]["tmp_name"];
        $carpetaDestino = "carpeta_destino/";

        // Mueve el archivo cargado a la carpeta de destino
        if (move_uploaded_file($rutaTemporal, $carpetaDestino . $nombreArchivo)) {
            // Actualiza la columna 'foto_que' en la base de datos con la nueva ruta de la imagen
            $nuevaRutaImagen = $carpetaDestino . $nombreArchivo;
            $query = "UPDATE patronato SET foto_que = '$nuevaRutaImagen' "; // Ajusta el ID o condición según tus necesidades

            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "Imagen cambiada y guardada exitosamente.";
            } else {
                echo "Error al guardar la imagen.";
            }
        } else {
            echo "Error al mover el archivo a la carpeta de destino.";
        }
    }
}

// Consulta la información de la base de datos
$query = "SELECT que, foto_que FROM patronato "; // Ajusta el ID o condición según tus necesidades

$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $contenido = $row['que'];
    $foto_que = $row['foto_que'];
}
?>
    <h1>Patronato</h1>
    <h3 class="page-header">¿Qué es?</h3>

    <div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <br>
        <form method="POST" enctype="multipart/form-data">
            <textarea name="contenido" id="contenido"><?php echo $contenido; ?></textarea>
            <br/>
            <br/>

            <!-- Campo de carga de archivos para la imagen -->
            <input type="file" name="imagen" id="imagen" accept="image/*">
            <br/>
            <br/>

            <button id="btnGuardar" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
            &nbsp;
            &nbsp;
            <button class="btn btn-primary" id="btnChangeImage"><span class="glyphicon glyphicon-picture"></span> Cambiar Imagen</button>
        </form>
    </div>

    <div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <label>Imagen:</label>
        <img id="imgPat" src="<?php echo $foto_que; ?>" class="img-responsive">
    </div>




</div>

</body>

</html>
