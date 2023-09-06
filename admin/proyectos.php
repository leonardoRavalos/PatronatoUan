<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Infraestructura</title>

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
    <script type="text/javascript" src="../assets/js/proyectos.js"></script>


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
				<li><a href="infraestructura.php" class="activa">Infraestructura</a></li>
				<li><a href="patronato.php" >Patronato</a></li>
				<li><a href="pantalla_principal.php" >Pantalla Principal</a></li>
                <li><a href="secciones.php" >Secciones</a></li>

				<li><a href="logout.php" >Salir</a></li>
			</ul>
		</nav>
</header>
    </div>
</div>

<div id="espacio3"></div>

<div id="modalProyecto" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h3>Modificar datos del proyecto</h3>
            </div>
            <div class="modal-body">
                <form id="frmEditProyecto">
                    <div class="form-group">
                        <label class="control-label" for="title">Título</label>
                        <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-file"></i>
                                </span>
                            <input class="form-control" id="nombre2" name="nombre"
                                   placeholder="Nombre del proyecto">
                            <input type="hidden" id="id_proyecto" name="id_proyecto">
                        </div>
                        <br/>
                        <label class="control-label" for="categoria">Categoría</label>
                        <select name="id_categoria" id="id_categoria2" class="form-control"></select>
                        <br/>
                        <label class="control-label" for="description">Descripción</label>
                        <textarea name="descripcion" id="descripcion2" class="demoInputBox"></textarea>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" id="btnEditProyecto">Guardar</button>
            </div>
        </div>
    </div>
</div> <!-- EDITAR PUBLICACIÓN MULTIMEDIA -->


<div id="modalChangeFile" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h3>Cambiar Archivo</h3>
            </div>
            <div class="modal-body">
                <form id="frmChangeFile" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label" for="file">Seleccione Archivo Multimedia</label>
                        <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-expand"></i>
                                </span>
                            <input type="file" id="imagen2" name="imagen">
                        </div>

                        <input type="hidden" id="id_proyecto2" name="id_proyecto">

                        <div id="progress-div">
                            <div id="progress-bar"></div>
                        </div>
                        <div id="targetLayer"></div>

                        <div align="center">
                            <div id="loader-icon" style="display:none;"><img
                                        src="../assets/images/LoaderIcon.gif"/>
                            </div>
                        </div>
                    </div>
                    <button id="btnCambiarArchivoMultimedia" type="submit" class="btn btn-sm btn-warning ">
                        Guardar archivo
                    </button>
                </form>
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- Fin de modal de cambiar archivo-->


<div class="container">
    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="infraestructura.php">Nuevo Proyecto</a></li>
            <li role="presentation" class="active"><a href="proyectos.php">Ver Proyectos</a></li>
            <li role="presentation"><a href="categorias.php">Categorías</a></li>
            <li role="presentation"><a href="videos.php">Videos</a></li>
            <li role="presentation" ><a href="portada.php">Foto de Portada</a> </li>

        </ul>

    </div>
    <h1 class="page-header">Proyectos</h1 class="page-header">
    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table id="tbProyectos" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Clave</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Operaciones</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

</div>

</body>

</html>
