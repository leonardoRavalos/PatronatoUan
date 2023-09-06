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
        <br>
        <br>

                    <div align="center" class="tbl">
                <div class="opciones">
                    <form method="GET" action="addinteres.php">
                        <button type="submit" class="btn-admin2">AGREGAR INTERES</button>
                    </form>

                </div>
                <table border="1" width="60%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
                    <tr>

                        <td width="3%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">NO.</font></b>
                        </td>
                        <td width="20%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Imagen</font></b>
                        </td>
                        <td width="30%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Enlace</font></b>
                        </td>
                         <td width="10%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF"></font></b>
                        </td>
                        <td width="6%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF"></font></b>
                        </td>
                        <td width="5%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF"></font></b>
                        </td>


                    </tr>

                    
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;1</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;logoEstado.png</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;http://www.nayarit.gob.mx/</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="../imagenes/logoEstado.png"  target="_blank">Ver Imagen</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modinteres.php?id=1">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=BorraInteres&id=1" onclick="return confirm('¿Desea Eliminar Interés por Completo?')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;2</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Logotipo_UAN_Azul.png</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;http://www.uan.edu.mx/</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="../imagenes/Logotipo_UAN_Azul.png"  target="_blank">Ver Imagen</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modinteres.php?id=2">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=BorraInteres&id=2" onclick="return confirm('¿Desea Eliminar Interés por Completo?')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;3</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;litai.jpg</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;http://www.itainayarit.org/</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="../imagenes/litai.jpg"  target="_blank">Ver Imagen</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modinteres.php?id=3">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=BorraInteres&id=3" onclick="return confirm('¿Desea Eliminar Interés por Completo?')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;4</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;fuuan.jpg</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;https://www.facebook.com/pg/Fundaci%C3%B3n-UAN-2179834265407580/about/?ref=page_internal</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="../imagenes/fuuan.jpg"  target="_blank">Ver Imagen</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modinteres.php?id=4">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=BorraInteres&id=4" onclick="return confirm('¿Desea Eliminar Interés por Completo?')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;5</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;lspauan.png</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;http://www.spauan.org.mx/</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="../imagenes/lspauan.png"  target="_blank">Ver Imagen</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modinteres.php?id=5">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=BorraInteres&id=5" onclick="return confirm('¿Desea Eliminar Interés por Completo?')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;6</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;lsetuan.jpg</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;http://www.setuan.org.mx/</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="../imagenes/lsetuan.jpg"  target="_blank">Ver Imagen</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modinteres.php?id=6">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=BorraInteres&id=6" onclick="return confirm('¿Desea Eliminar Interés por Completo?')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;7</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;FEUAN.png</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;http://www.feuan.net/</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="../imagenes/FEUAN.png"  target="_blank">Ver Imagen</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modinteres.php?id=7">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=BorraInteres&id=7" onclick="return confirm('¿Desea Eliminar Interés por Completo?')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;8</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;infomelx.png</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;http://www.infomexnayarit.gob.mx/infomex/</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="../imagenes/infomelx.png"  target="_blank">Ver Imagen</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modinteres.php?id=8">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=BorraInteres&id=8" onclick="return confirm('¿Desea Eliminar Interés por Completo?')">Eliminar</a></font></td>
   

    </tr>
                </table>
            </div>

    </body>

    </html>
