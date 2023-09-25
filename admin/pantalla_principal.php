
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
    <script type="text/javascript" src="../assets/js/portada.js"></script>


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
				<li><a href="patronato.php" >Patronato</a></li>
				<li><a href="pantalla_principal.php" class="activa">Pantalla Principal</a></li>
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
            <li role="presentation" class="active"><a href="pantalla_principal.php">Pantalla Principal</a></li>
            <li role="presentation" ><a href="contacto.php">Contacto</a></li>


        </ul>

    </div>
    <h1 class="page-header">Pantalla Principal</h1 class="page-header">
    <h3>Fotos de portada</h3>
    <div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">

    <br>
    

</div>


    <br>
    <br>
<br>
<br>
<br>



<div class="opciones">
            <form method="GET" action="addimgportada.php">
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
            $query = "SELECT idpantalla, imagen FROM pantalla_principal";
            $result = mysqli_query($conn, $query);

            // Mostrar resultados
            while ($row = mysqli_fetch_assoc($result)) {
              $imagenURL = 'carpeta_destino/' . $row['imagen'];
                echo '<tr>
                        <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp; '. $row['idpantalla'] .'</font></td>
                        <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;'. $row['imagen'] .'</font></td>
                        
                        <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="'. $imagenURL .'" target="_blank">Ver Imagen</a></font></td>
                        <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modpantalla.php?id=' . $row['idpantalla'] . '">Editar</a></font></td>
                        <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="eliminar_pant.php?id=' . $row['idpantalla'] . ')">Eliminar</a></font></td>
                      </tr>';
            } 

            // Cerrar la conexión a la base de datos
            mysqli_close($conn);
            ?>
                </table>
            </div>
<br>

</div>

</body>

</html>


