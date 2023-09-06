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
    <script type="text/javascript" src="../assets/js/videos.js"></script>


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
    <div id="modalVideo" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h3>Modificar nombre del archivo</h3>
                </div>
                <div class="modal-body">
                    <form id="frmEditVideo">
                        <div class="form-group">
                            <label class="control-label" for="title">Nombre</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-file"></i>
                                </span>
                                <input class="form-control" id="nombre2" name="nombre"
                                       placeholder="Nombre del proyecto">
                                <input type="hidden" id="id_video" name="id_video">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" id="btnEditVideo">Guardar</button>
                </div>
            </div>
        </div>
    </div>


    <div id="modalChangeFile" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h3>Cambiar archivo de video</h3>
                </div>
                <div class="modal-body">
                    <form id="frmChangeFile" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="file2">Seleccione Archivo</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-picture"></i>
                                </span>
                                <input type="file" class="btn btn-effect-ripple btn-default" id="nombre_archivo" name="nombre_archivo">
                            </div>

                            <input type="hidden" id="id_video2" name="id_video">

                            <div id="progress-div-modal">
                                <div id="progress-bar-modal"></div>
                            </div>
                            <div id="targetLayer-modal"></div>
                        </div>
                        <button id="btnChangeFile2" type="submit" class="btn btn-sm btn-primary ">Guardar</button>
                    </form>
                </div>

                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- Fin de modal de cambiar foto-->


    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="infraestructura.php">Nuevo Proyecto</a></li>
            <li role="presentation"><a href="proyectos.php">Ver Proyectos</a></li>
            <li role="presentation"><a href="categorias.php">Categorías</a></li>
            <li role="presentation" class="active"><a href="videos.php">Videos</a></li>
            <li role="presentation" ><a href="portada.php">Foto de Portada</a> </li>

        </ul>

    </div>
    <h1>Videos</h1>

    <div class="col col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <h3 class="page-header">Nuevo Video</h3>

        <form id="frmVideo" enctype="multipart/form-data">

            <div class="form-group">
                <label>Nombre del archivo</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
                <br/>

                <h3>Seleccionar archivo</h3>
                <input type="file" id="archivo" name="archivo">
                <br>

                <div id="progress-div">
                    <div id="progress-bar"></div>
                </div>
                <div id="targetLayer"></div>


                <button type="submit" class="btn btn-primary" id="btnGuardar"><span
                            class="glyphicon glyphicon-floppy-disk"></span> Guardar
                </button>
            </div>
        </form>
    </div>



    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">.
            <h3 class="page-header">Videos</h3 class="page-header">

            <table id="tbVideos" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Archivo</th>
                    <th>Operaciones</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>


</div>


</body>

</html>
