
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Noticias</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="estiloAdmin.css">
        <link rel="stylesheet" href="normalize.css">
    </head>
    <body style="background:#d9d9d9;">
        <div class="menufondo">
            <div class="enca-lenguajeb">
                <div align="center"></div>
            </div>
            <div class="logo">
                <img src="../imagenes/logo.png" width="250" height="35" id="logovela">
            </div>
            <div class="divmenu">
                <header>
                    <div class="menu_bar">
                        <a href="#" class="bt-menu">
                            <span class="icon-list"></span>
                            Menu
                        </a>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li>
                                <a href="bienvenida.php">Bienvenida</a>
                            </li>
                            <li>
                                <a href="usuarios.php">Usuarios</a>
                            </li>
                            <li>
                                <a href="noticias.php" class="activa">Noticias</a>
                            </li>
                            <li>
                                <a href="formatos.php">Formatos</a>
                            </li>
                            <li>
                                <a href="recaudacion.php">Recaudación</a>
                            </li>
                            <li>
                                <a href="intereses.php">Interes</a>
                            </li>
                            <li>
                                <a href="numerales.php">Numerales</a>
                            </li>
                            <li>
                                <a href="privacidad.php">Aviso de privacidad</a>
                            </li>
                            <li>
                                <a href="infraestructura.php">Infraestructura</a>
                            </li>
                            <li>
                                <a href="patronato.php">Patronato</a>
                            </li>
                            <li>
                                <a href="pantalla_principal.php">Pantalla Principal</a>
                            </li>
                            <li>
                                <a href="secciones.php">Secciones</a>
                            </li>
                            <li>
                                <a href="logout.php">Salir</a>
                            </li>
                        </ul>
                    </nav>
                </header>
            </div>
            </div>
        <div id="espacio3"></div>
        <br>
        <br>
        <div align="center" class="tbl">
            <div class="opciones">
                <form method="POST" action="addnoticia.php">
                    <button type="submit" class="btn-admin2">AGREGAR NOTICIA</button>
                </form>
            </div>
            <table border="1" width="60%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
                <tr>
                    <td width="40%" align="center" bgcolor="#1356A4">
                        <b>
                            <font face="Arial" size="2" color="#FFFFFF">Titulo</font>
                        </b>
                    </td>
                    <td width="10%" align="center" bgcolor="#1356A4">
                        <b>
                            <font face="Arial" size="2" color="#FFFFFF">Imagen</font>
                        </b>
                    </td>
                    <td width="10%" align="center" bgcolor="#1356A4">
                        <b>
                            <font face="Arial" size="2" color="#FFFFFF">Acciones</font>
                        </b>
                    </td>
                </tr>
                <!-- Aquí puedes agregar dinámicamente las filas con los datos de la base de datos -->
                <?php
// Conecta a la base de datos y obtén los datos de la tabla "noticias"
require_once('db_config.php');
$query = "SELECT idnoticia, titulo, imagen FROM noticias";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td height='5' bgcolor='#DEDEBE'><font face='Arial' size='2'>" . $row['titulo'] . "</font></td>";
    echo "<td height='5' bgcolor='#DEDEBE' align='center'>";
    
    // Construye la URL completa de la imagen utilizando la carpeta_destino y el nombre del archivo
    $imagenURL = 'carpeta_destino/' . $row['imagen'];
    
    // Muestra la imagen en la celda de la tabla
    echo '<img src="' . $imagenURL . '" alt="Descripción de la imagen" style="padding: 0; right: 0; bottom: 0; height: 200px;">';

    echo "</td>";
    echo '<td><a href="editar_noticia.php?id=' . $row['idnoticia'] . '">Editar</a> | <a href="eliminar_not.php?id=' . $row['idnoticia'] . ' onclick="return confirm("¿Estás seguro de que deseas eliminar este usuario?")">Eliminar</a></td>';
    echo "</font></td>";
    echo "</tr>";
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>



            </table>
        </div>
    </body>
</html>
