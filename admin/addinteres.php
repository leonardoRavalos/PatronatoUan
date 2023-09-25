<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estiloAdmin.css">
        <link rel="stylesheet" href="normalize.css">
        <script src="nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>



        <title>Agregar Noticias</title>

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
<div align="center">
<form method="post" name="form1" id="form1" enctype="multipart/form-data" >
	<table border="2" width="50%" bordercolor="#000000" cellspacing="0" cellpadding="0" bgcolor="white">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td colspan="3">&nbsp;</td>
				</tr>
				<tr  bgcolor="#1356A4" height="25" >
					<td colspan="3">
                        <p align="center"><b>
						<font size="4" color="white" face="Arial">Agregar liga de interes</font></b></td>
				</tr>
				<tr>
					<td width="11%">&nbsp;</td>
					<td width="51%">&nbsp;</td>
					<td width="28%">&nbsp;</td>
				</tr>
				<tr>
					<td width="20%" align="right"><font face="Arial">&nbsp; Imagen:</font></td>
					<td width="51%"><font face="Arial">&nbsp;&nbsp;</font><font size="3" face="Arial"><input type="file" name="imagen" id="imagen"></font></td>
				</tr>
				
				<tr>
					<td width="11%">&nbsp;</td>
					<td width="51%"><font face="Arial">&nbsp; </font></td>
					<td width="28%">&nbsp;</td>
				</tr>
				 	<tr>
					<td width="20%">&nbsp;</td>
					<td width="51%"></td>
					<td width="28%">&nbsp;</td>
				</tr>
        
                <tr>
						<td width="20%" align="right"><font face="Arial">&nbsp; enlace:</font></td>
						<td colspan="2">
							&nbsp; <input type="text" name="titulo" id="titulo" size="50" autocomplete="off">
						</td>
					</tr>
					
					<tr>
						<td width="20%">&nbsp;</td>
						<td width="51%">
							<font face="Arial">&nbsp;</font><font size="3" face="Arial">
							<input type="hidden" name="movi" value="addnoticia">
							<input type="submit" name="guardar" value="Guardar" class="btn-admin">
							</font>
						</td>
						<td width="28%">&nbsp;</td>
					</tr>
					<tr>
						<td width="20%">&nbsp;</td>
						<td width="51%"></td>
						<td width="28%">&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</form>
<?php
// Conecta a la base de datos usando tu archivo de configuración
require_once('db_config.php');

if (isset($_POST['guardar'])) {
    // Verifica si se ha enviado una imagen
    if ($_FILES['imagen']['name']) {
        $carpeta_destino = 'carpeta_destino/'; // Ruta completa de la carpeta destino

        // Verifica si la extensión del archivo es válida (puedes ajustar las extensiones permitidas)
        $extensiones_validas = array('jpg', 'jpeg', 'png', 'gif');
        $imagen_extension = strtolower(pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION));

        if (in_array($imagen_extension, $extensiones_validas)) {
            $imagen_nombre = $_FILES['imagen']['name'];
            $imagen_temp = $_FILES['imagen']['tmp_name'];
            $imagen_ruta = $carpeta_destino . basename($imagen_nombre);

            if (move_uploaded_file($imagen_temp, $imagen_ruta)) {
                // Inserta los datos en la base de datos usando una sentencia preparada
                $sql = "INSERT INTO intereses (imagen, enlace) VALUES (?, ?)";
                if ($stmt = $conn->prepare($sql)) {
                    $stmt->bind_param("ss", $imagen_nombre, $_POST['titulo']);
                    if ($stmt->execute()) {
                        // Éxito, la noticia se ha agregado
                        echo "Interés agregado correctamente.";
                    } else {
                        echo "Error al agregar el interés: " . $stmt->error;
                    }
                    $stmt->close();
                } else {
                    echo "Error en la preparación de la consulta: " . $conn->error;
                }
            } else {
                echo "Error al cargar la imagen.";
            }
        } else {
            echo "La extensión de la imagen no es válida. Las extensiones permitidas son: jpg, jpeg, png, gif.";
        }
    } else {
        echo "Por favor, seleccione una imagen.";
    }
}

// Cierra la conexión a la base de datos
$conn->close();
?>


</div> 
 
    </body>

    </html>
