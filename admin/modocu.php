    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <title>Modificar Documento</title>

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

        <div id="espacio3"></div>
        <br>
        <br>
           <div align="center">
<form action="movadmin.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table border="2" width="50%" bordercolor="#000000" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td colspan="3">&nbsp;</td>
				</tr>
				<tr  bgcolor="#1356A4" height="25" >
					<td colspan="3">
                        <p align="center"><b>
						<font size="4" color="white" face="Arial">MODIFICAR DOCUMENTO</font></b></td>
				</tr>
				<tr>
					<td width="11%">&nbsp;</td>
					<td width="51%">&nbsp;</td>
					<td width="28%">&nbsp;</td>
				</tr>
				<tr>
					<td width="20%" align="right"><font face="Arial">&nbsp; Numeral:</font></td>
					<td width="51%">&nbsp; Marco Normativo</td>
					<td width="28%"><font face="Arial">&nbsp;</font></td>
				</tr>
            		<tr>
					<td width="20%" align="right"><font face="Arial">&nbsp; Nuevo Archivo:</font></td>
					<td width="51%">&nbsp;
					<input type="file" name="archivo" id="archivo" size="50" autocomplete="off"></td>
					<td width="28%"><font face="Arial"> </font></td>
				</tr>
                        
            		<tr>
					<td width="20%" align="right"><font face="Arial">&nbsp;Archivo Actual:</font></td>
					<td width="51%">&nbsp; 1_I_NORMATIVIDAD_APLICABLE.xlsx</td>
					<td width="28%"><font face="Arial">&nbsp;</font></td>
				</tr>
                        

	            <tr>
					<td width="20%">&nbsp;</td>
					<td width="51%"></td>
					<td width="28%">&nbsp;</td>
				</tr>
				<tr>
					<td width="20%">&nbsp;</td>
					<td width="51%"><font face="Arial">&nbsp;</font><font size="3" face="Arial">
					
					<input type="hidden" name="movi" value="modocumento">
					<input type="hidden" name="idnumeral" value="174">
					<input type="hidden" name="iddocumento" value="711">
					<input type="submit" name="guardar" class="btn-admin" value="Guardar">
					
					</font></td>
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
</div> 

    </body>

    </html>
