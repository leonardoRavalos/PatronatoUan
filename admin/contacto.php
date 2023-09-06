
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
    <script type="text/javascript" src="../assets/js/contacto.js"></script>


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
            <li role="presentation"><a href="pantalla_principal.php">Pantalla Principal</a></li>
            <li role="presentation" class="active"><a href="contacto.php.php">Contacto</a></li>


        </ul>

    </div>
    <h2 class="page-header"> Modificar Contacto</h2>
    <form id="frmAdminContact">
        <div class="form-group">
            <div class="col-lg-6">

                <!-- Datos Personales-->
                <label class="control-label">Dirección</label>
                <textarea id="adminAddress" name="adminAddress" rows="2" cols="100" class="form-control"></textarea>
                <div class="help-block"></div>

                <label class="control-label">Teléfono</label>
                <input type="text" class="form-control" id="adminPhone" name="adminPhone">
                <div class="help-block"></div>


                <label class="control-label">Correo Electrónico</label>
                <input type="text" class="form-control" id="adminEmail" name="adminEmail">
                <div class="help-block"></div>

                <label class="control-label">Código Postal</label>
                <input type="text" class="form-control" id="adminCP" name="adminCP">
                <div class="help-block"></div>


            </div> <!-- tamaño de pantalla-->

        </div> <!-- form group-->

        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>


    </form>

    <button id="btnGuardarContacto" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar
    </button>

    <br>
    <br>
    <br>
    <br>
</div>


</body>

</html>


