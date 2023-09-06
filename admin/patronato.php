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

    <div id="modalChangeImage" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h3>Cambiar Imagen</h3>
                </div>
                <div class="modal-body">
                    <form id="frmChangeImage" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="file2">Seleccione Fotografía</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-picture"></i>
                                </span>
                                <input type="file" class="btn btn-effect-ripple btn-default" id="imagen2" name="imagen">
                            </div>
                            <div align="center">
                                <div id="loader-icon" style="display:none;"><br><img
                                            src="../assets/images/LoaderIcon.gif"/></div>
                            </div>
                            <input type="hidden" id="id_patronato" name="id_patronato">
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button id="btnChangeImage2" type="button" class="btn btn-sm btn-primary ">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de modal de cambiar foto-->

    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="patronato.php">¿Qué es?</a></li>
            <li role="presentation"><a href="quehace.php">¿Qué hace?</a></li>
            <li role="presentation"><a href="integrantes.php">¿Quiénes lo intengran?</a></li>
            <li role="presentation"><a href="historia.php">Historia</a></li>
            <li role="presentation"><a href="marco_legal.php">Marco Legal</a></li>


        </ul>

    </div>
    <h1>Patronato</h1>
    <h3 class="page-header">¿Qué es?</h3>

    <div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">

        <br>
        <textarea name="contenido" id="contenido"></textarea>
        <br/>


        <br/>
        <br/>

        <button id="btnGuardar" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar
        </button>
        &nbsp;
        &nbsp;
        <button class="btn btn-primary" id="btnChangeImage"><span
                    class="glyphicon glyphicon-picture"></span> Cambiar Imagen
        </button>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <label>Imagen:</label>
        <img id="imgPat" src="" class="img-responsive">
    </div>





</div>

</body>

</html>
