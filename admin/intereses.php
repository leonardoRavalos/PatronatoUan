    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <title>Intereses</title>

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="estiloAdmin.css">
        <link rel="stylesheet" href="normalize.css">



    </head>

    <body style="background:#d9d9d9;">

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
				<li><a href="intereses.php" class="activa">Interes</a></li>
				<li><a href="numerales.php" >Numerales</a></li>
				<li><a href="privacidad.php" >Aviso de privacidad</a></li>
				<li><a href="infraestructura.php" >Infraestructura</a></li>
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
    <div align="center" class="tbl">
        <div class="opciones">
            <form method="GET" action="addinteres.php">
                <button type="submit" class="btn-admin2">AGREGAR INTERES</button>
            </form>
        </div>
        <table border="1" width="60%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
            <tr>
                <td width="3%" align="center" bgcolor="#1356A4"><b><font face="Arial" size="2" color="#FFFFFF">NO.</font></b></td>
                <td width="20%" align="center" bgcolor="#1356A4"><b><font face="Arial" size="2" color="#FFFFFF">Imagen</font></b></td>
                <td width="30%" align="center" bgcolor="#1356A4"><b><font face="Arial" size="2" color="#FFFFFF">Enlace</font></b></td>
                <td width="10%" align="center" bgcolor="#1356A4"><b><font face="Arial" size="2" color="#FFFFFF"></font></b></td>
                <td width="6%" align="center" bgcolor="#1356A4"><b><font face="Arial" size="2" color="#FFFFFF"></font></b></td>
                <td width="5%" align="center" bgcolor="#1356A4"><b><font face="Arial" size="2" color="#FFFFFF"></font></b></td>
            </tr>
            <?php
            // Conectar a la base de datos
            require_once('db_config.php');

            // Consultar intereses
            $query = "SELECT idinteres, enlace, imagen FROM intereses";
            $result = mysqli_query($conn, $query);

            // Mostrar resultados
            while ($row = mysqli_fetch_assoc($result)) {
              $imagenURL = 'carpeta_destino/' . $row['imagen'];
                echo '<tr>
                        <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp; '. $row['idinteres'] .'</font></td>
                        <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;'. $row['imagen'] .'</font></td>
                        <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;'. $row['enlace'] .'</font></td>
                        
                        <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="'. $imagenURL .'" target="_blank">Ver Imagen</a></font></td>
                        <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modinteres.php?id=' . $row['idinteres'] . '">Editar</a></font></td>
                        <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="eliminar_int.php?id=' . $row['idinteres'] . ')">Eliminar</a></font></td>
                      </tr>';
            }

            // Cerrar la conexión a la base de datos
            mysqli_close($conn);
            ?>
                </table>
            </div>
            

    </body>

    </html>
