    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <title>Documentos</title>

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="estiloAdmin.css">
        <link rel="stylesheet" href="normalize.css">

        <script>
            function enviar() {
                $("#form2").submit();
            }

        </script>

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
            <div class="opciones">

                <form method="post" action="addocto.php?id=174">
                    <button type="submit" class="btn-admin2">AGREGAR DOCTOS</button>
                </form>

            </div>

            <table border="1" width="55%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
                <tr>

                    <td width="30%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Numeral</font></b>
                    </td>
                    <td width="20%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Archivo</font></b>
                    </td>

                    <td width="5%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF"></font></b>
                    </td>
                    <td width="5%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF"></font></b>
                    </td>
                    <td width="5%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Descargable</font></b>
                    </td>

                </tr>
                <form method="post" action="movadmin.php" name="form2" id="form2">
                    <input type="hidden" name="movi" value="descargarxx">
                    <input type="hidden" name="idnumeral" value="174"> 
                    <input type="submit" class="btn-admin2" value="Actualizar Descargables" onclick="enviar();">
                    
      <tr>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Marco Normativo</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;1_I_NORMATIVIDAD_APLICABLE.xlsx</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modocu.php?id=711">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=eliDocumento&iddoc=711&idnumeral=174" onclick="return confirm('Desea Borrar el Documento?')"> Borrar </a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<input type="checkbox" name="descargar1" id="descargar1" class="descargar" checked>
      <input type="hidden" name="iddoc1" value="711">  
      </font></td></tr><input type="hidden" name="filas" id="filas" value="1">  </form>
            </table>
          
        </div>

    </body>

    </html>
