<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Infraestructura</title>

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estiloAdmin.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <link rel="stylesheet" href="normalize.css">

    <script type="text/javascript" src="../assets/js/plugins/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/jquery.validate.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/additional-methods.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript" src="../assets/tinymce/tinymce.min.js"></script>
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


<div class="container">
    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="infraestructura.php">Nuevo Proyecto</a> </li>
            <li role="presentation" ><a href="proyectos.php">Ver Proyectos</a> </li>
            <li role="presentation" ><a href="categorias.php">Categorías</a> </li>
            <li role="presentation" ><a href="videos.php">Videos</a> </li>
            <li role="presentation" ><a href="portada.php">Foto de Portada</a> </li>
        </ul>
    </div>

    <h1 class="page-header">Nuevo proyecto</h1 class="page-header">
    <form id="frmProyecto" enctype="multipart/form-data">
        <div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Nombre del proyecto</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
                <br/>
                <label>Categoría</label>
                <select name="id_categoria" id="id_categoria" class="form-control"></select>
                <br/>

                <label>Descripción</label>
                <br>
                <textarea name="descripcion" id="descripcion"></textarea>
                <br/>

                <h3>Seleccionar imagen</h3>
                <input type="file" id="imagen" name="imagen">

                <br/>
                <br/>

                <button type="submit" class="btn btn-primary" id="btnGuardar"><span
                            class="glyphicon glyphicon-floppy-disk"></span> Guardar
                </button>
            </div>
        </div>

    </form>

</div>

</body>

</html>
