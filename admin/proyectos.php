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
<div class="container">
    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li role="presentation" ><a href="infraestructura.php">Nuevo Proyecto</a> </li>
            <li role="presentation" class="active"><a href="proyectos.php">Ver Proyectos</a> </li>
            <li role="presentation" ><a href="categorias.php">Categorías</a> </li>
        </ul>
    </div>

<div class="container">
    <h1 class="page-header">Proyectos</h1>

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
                <tbody>
                <?php
                require_once('db_config.php');
                // Consulta SQL para obtener los proyectos y su información desde la base de datos
                $sql_proyectos = "SELECT proyectos.idproyecto, proyectos.nombre AS nombre_proyecto, proyectos.imagen AS imagen_proyecto, categorias.categoria AS nombre_categoria FROM proyectos
                                    LEFT JOIN categorias ON proyectos.categoria = categorias.idcategoria";

                $result_proyectos = $conn->query($sql_proyectos);

                if ($result_proyectos->num_rows > 0) {
                    while ($row_proyecto = $result_proyectos->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row_proyecto['idproyecto'] . '</td>';
                        echo '<td><img src="' . $row_proyecto['imagen_proyecto'] . '" alt="' . $row_proyecto['nombre_proyecto'] . '" width="100"></td>';
                        echo '<td>' . $row_proyecto['nombre_proyecto'] . '</td>';
                        echo '<td>' . $row_proyecto['nombre_categoria'] . '</td>';
                        echo '<td>';
                        echo '<a href="editarproy.php?id=' . $row_proyecto['idproyecto'] . '" class="btn btn-sm btn-info">Editar</a>';
                        echo '<a href="eliminarproy.php?id=' . $row_proyecto['idproyecto'] . '" class="btn btn-sm btn-warning">Eliminar</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>

</html>
