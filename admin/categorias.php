<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Categorías</title>
    <style>
        table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

/* Estilos para el botón Agregar y el modal */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
}

.modal-content {
    background-color: #fff;
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    position: relative;
}

.modal h2 {
    margin-top: 0;
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}
    </style>

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
        </ul>
    </div>


    <h1>Lista de Categorías</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('db_config.php');

            // Consulta SQL para obtener todas las categorías
            $sql_categorias = "SELECT * FROM categorias";
            $result_categorias = $conn->query($sql_categorias);

            if ($result_categorias->num_rows > 0) {
                while ($row_categoria = $result_categorias->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row_categoria['idcategoria'] . '</td>';
                    echo '<td>' . $row_categoria['categoria'] . '</td>';
                    echo '<td>
                    <a href="editarcat.php?id=' . $row_categoria['idcategoria'] . '">Editar</a>
                            <a href="eliminarcat.php?id=' . $row_categoria['idcategoria'] . '">Eliminar</a>
                          </td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="3">No hay categorías disponibles.</td></tr>';
            }
            ?>
        </tbody>
    </table>

    <button id="btnAgregar">Agregar Nueva Categoría</button>

    <!-- Modal para agregar categoría -->
    <div class="modal" id="modalAgregar">
        <div class="modal-content">
            <span class="close" id="closeAgregar">&times;</span>
            <h2>Agregar Nueva Categoría</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombreCategoria'])) {
                // Procesar el formulario de inserción de categoría
                $nombreCategoria = $_POST['nombreCategoria'];

                // Realizar la inserción en la base de datos (reemplaza con tu código de inserción)
                require_once('db_config.php');
                $sql_insert = "INSERT INTO categorias (categoria) VALUES ('$nombreCategoria')";

                if ($conn->query($sql_insert) === TRUE) {
                    echo "<p>Categoría agregada correctamente.</p>";
                } else {
                    echo "<p>Error al agregar la categoría: " . $conn->error . "</p>";
                }
            }
            ?>
            <form id="formAgregarCategoria" method="post">
                <label for="nombreCategoria">Nombre de la Categoría:</label>
                <input type="text" name="nombreCategoria" required>
                <button type="submit">Guardar</button>
            </form>
        </div>
    </div>

    
    <script>
        document.getElementById("btnAgregar").addEventListener("click", function() {
            document.getElementById("modalAgregar").style.display = "block";
        });

        document.getElementById("closeAgregar").addEventListener("click", function() {
            document.getElementById("modalAgregar").style.display = "none";
        });

    </script>
</body>

</html>
