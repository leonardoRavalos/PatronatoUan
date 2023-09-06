    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estiloAdmin.css">
        <link rel="stylesheet" href="normalize.css">

        <title>Documentos</title>

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
				<li><a href="intereses.php" >Interes</a></li>
				<li><a href="numerales.php" class="activa">Numerales</a></li>
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


        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <div id="espacio3"></div>
        <div align="center">
            <form action="movadmin.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
                <table border="2" width="50%" bordercolor="#000000" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td colspan="3">&nbsp;</td>
                                </tr>
                                <tr bgcolor="#1356A4" height="25">
                                    <td colspan="3" align="center">&nbsp;<b>
					                 	<font size="3" color="white" face="Arial">Marco Normativo</font></b></td>
                                </tr>
                                <tr>
                                    <td width="11%">&nbsp;</td>
                                    <td width="51%">&nbsp;</td>
                                    <td width="28%">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="20%" align="right">
                                        <font face="Arial">&nbsp;</font>
                                    </td>
                                    <td width="51%">
                                        <div class="container">
                                            <div class="panel panel-primary">
                                                <div class="panel-body">
                                                    <h4 class="text-center">SELECCIONE LOS ARCHIVOS</h4>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Archivos</label>
                                                        <div class="col-sm-8">
                                                            <input type="file" class="form-control" id="archivo" name="archivo">
                                                        </div>


                                                        <input type="hidden" name="movi" value="agreDocumento">
                                                        <input type="hidden" name="idnumeral" value="174">
                                                        <input type="hidden" name="titulo" value="Marco Normativo">
                                                        <input type="submit" name="guardar" value="Guardar" class="btn-admin">

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td width="28%">

                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                </table>
            </form>
        </div>


    </body>

    </html>
