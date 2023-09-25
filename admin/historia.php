<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Patronato</title>

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estiloAdmin.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
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
    <script type="text/javascript" src="../assets/js/historia.js"></script>


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
            <li role="presentation"><a href="patronato.php">¿Qué es?</a></li>
            <li role="presentation"><a href="quehace.php">¿Qué hace?</a></li>
            <li role="presentation"><a href="integrantes.php">¿Quiénes lo intengran?</a></li>
            <li role="presentation" class="active"><a href="historia.php">Historia</a></li>
            <li role="presentation"><a href="marco_legal.php">Marco Legal</a></li>
            <li role="presentation"><a href="organigrama.php">Organigrama</a></li>


        </ul>

    </div>
    <?php
require_once('db_config.php');

$contenido = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["contenido"])) {
    $nuevoContenido = $_POST["contenido"];

    // Actualiza el contenido en la base de datos
    $query = "UPDATE historia SET historia = '$nuevoContenido' "; // Ajusta el ID o condición según tus necesidades

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Contenido guardado exitosamente.";
    } else {
        echo "Error al guardar el contenido.";
    }
}

// Consulta la información de la base de datos
$query = "SELECT historia FROM historia "; // Ajusta el ID o condición según tus necesidades

$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $contenido = $row['historia'];
}
?>

<h1>Patronato</h1>
<h3 class="page-header">Historia</h3>

<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">

    <br>
    <form method="POST" action="">
        <textarea name="contenido" id="contenido"><?php echo $contenido; ?></textarea>
        <br>
        <br>
        <button type="submit" id="btnGuardar" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
    </form>

</div>


    <br>
    <br>
<br>
<br>
<br>



<div class="opciones">
            <form method="GET" action="addimghistoria.php">
                <button type="submit" class="btn-admin2">AGREGAR IMAGEN</button>
            </form>
        </div>
    <table border="1" width="60%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
            <tr>
                <td width="3%" align="center" bgcolor="#1356A4"><b><font face="Arial" size="2" color="#FFFFFF">NO.</font></b></td>
                <td width="20%" align="center" bgcolor="#1356A4"><b><font face="Arial" size="2" color="#FFFFFF">Imagen</font></b></td>
                <td width="10%" align="center" bgcolor="#1356A4"><b><font face="Arial" size="2" color="#FFFFFF"></font></b></td>
                <td width="6%" align="center" bgcolor="#1356A4"><b><font face="Arial" size="2" color="#FFFFFF"></font></b></td>
                <td width="5%" align="center" bgcolor="#1356A4"><b><font face="Arial" size="2" color="#FFFFFF"></font></b></td>
            </tr>
            <?php
            // Conectar a la base de datos
            require_once('db_config.php');

            // Consultar intereses
            $query = "SELECT idfoto_historia, archivo FROM fotos_historia";
            $result = mysqli_query($conn, $query);

            // Mostrar resultados
            while ($row = mysqli_fetch_assoc($result)) {
              $imagenURL = 'carpeta_destino/' . $row['archivo'];
                echo '<tr>
                        <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp; '. $row['idfoto_historia'] .'</font></td>
                        <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;'. $row['archivo'] .'</font></td>
                        
                        <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="'. $imagenURL .'" target="_blank">Ver Imagen</a></font></td>
                        <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modhistoria.php?id=' . $row['idfoto_historia'] . '">Editar</a></font></td>
                        <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="eliminar_int.php?id=' . $row['idfoto_historia'] . ')">Eliminar</a></font></td>
                      </tr>';
            } 

            // Cerrar la conexión a la base de datos
            mysqli_close($conn);
            ?>
                </table>
            </div>
<br>
<br>
<br>
<br>


</div>



</body>

</html>
