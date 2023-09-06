<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Secciones</title>

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
    <script type="text/javascript" src="../assets/js/seccion.js"></script>


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
				<li><a href="pantalla_principal.php" >Pantalla Principal</a></li>
                <li><a href="secciones.php" class="activa">Secciones</a></li>

				<li><a href="logout.php" >Salir</a></li>
			</ul>
		</nav>
</header>
    </div>
</div>

<div id="espacio3"></div>


<div class="container">
    <!-- Aquí inicia el modal de editar categoria-->


    <div id="modalSection" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h3>Modificar Sección</h3>
                </div>
                <div class="modal-body">
                    <form id="frmEditSection">
                        <div class="form-group">
                            <label class="control-label" for="nombreSeccion2">Sección</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th-list"></i>
                                </span>
                                <input class="form-control" id="nombreSeccion2" name="nombreSeccion2"
                                       placeholder="Nombre de la Seccion">
                                <input type="hidden" id="sectionid" name="sectionid">
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

        <h3>Secciones del sitio Web</h3>

        <br>

    </div>


    <!-- Aquí termina el formulario-->


    <!-- Aqui inicia datatable de categorias-->

    <div class="col-md-12 ">
        <div class="row">

            <table id="tbSecciones" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Módulo</th>
                    <th>Operaciones</th>
                </tr>
                </thead>
            </table>
        </div>


    </div>
</div>


</body>

</html>
