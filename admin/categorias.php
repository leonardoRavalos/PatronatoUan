<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Categorías</title>

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
    <script type="text/javascript" src="../assets/js/categoria.js"></script>


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


<div class="container">
    <!-- Aquí inicia el modal de editar categoria-->
    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li role="presentation" ><a href="infraestructura.php">Nuevo Proyecto</a> </li>
            <li role="presentation" ><a href="proyectos.php">Ver Proyectos</a> </li>
            <li role="presentation" class="active"><a href="categorias.php">Categorías</a> </li>
            <li role="presentation" ><a href="videos.php">Videos</a> </li>
            <li role="presentation" ><a href="portada.php">Foto de Portada</a> </li>
        </ul>
    </div>

    <div id="modalCategory" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h3>Modificar Categoría</h3>
                </div>
                <div class="modal-body">
                    <form id="frmEditCategory">
                        <div class="form-group">
                            <label class="control-label" for="nombreCategoria2">Categoría</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-list"></i>
                                </span>
                                <input class="form-control" id="nombreCategoria2" name="nombreCategoria2"
                                       placeholder="Nombre de la Categoria">
                                <input type="hidden" id="categoryid" name="categoryid">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary btn-primary" id="btnModificar">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Aquí termina el modal de editar categoria-->

    <!-- Aqui inicia el formulario-->

    <div class="col-lg-6 ">

        <h3>Nueva Categoría</h3>
        <form id="frmCategoria">
            <label>Nombre</label>

            <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria"
                   placeholder="Nombre de la categoría">
            <div class="row">&nbsp;</div>
            <button type="submit" class="btn btn btn-primary"><span
                        class="glyphicon glyphicon-floppy-save"></span>
                Guardar
            </button>
        </form>
        <br>
        <br>

    </div>


    <!-- Aquí termina el formulario-->


    <!-- Aqui inicia datatable de categorias-->

    <div class="col-md-12 ">
        <div class="row">
            <h3>Ver Categorías</h3>
            <table id="tbCategoria" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Clave</th>
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
