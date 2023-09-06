                                              
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="estiloAdmin.css">
<link rel="stylesheet" href="normalize.css">
          <script src="nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
   
    <title>Modificar Imagen</title>

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
				<li><a href="noticias.php" class="activa">Noticias</a></li>
				<li><a href="formatos.php" >Formatos</a></li>
				<li><a href="recaudacion.php" >Recaudación</a></li>
				<li><a href="intereses.php" >Interes</a></li>
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
<form action="movadmin.php" method="post" name="form1" id="form1" enctype="multipart/form-data" >
	<table border="2" width="50%" bordercolor="#000000" cellspacing="0" cellpadding="0"  bgcolor="white">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td colspan="3">&nbsp;</td>
				</tr>
				<tr  bgcolor="#2B388F" height="25" >
					<td colspan="3">
                        <p align="center"><b>
						<font size="4" color="white" face="Arial">Modificar Imagen</font></b></td>
				</tr>
				<tr>
					<td width="11%">&nbsp;</td>
					<td width="51%">&nbsp;</td>
					<td width="28%">&nbsp;</td>
				</tr>
				<tr>
					<td width="20%" align="right"><font face="Arial">&nbsp; 
					Imagen Pantalla:</font></td>
					<td width="51%"><font facSe="Arial">&nbsp;&nbsp;</font><font size="3" face="Arial"><input type="file" name="imagen" id="imagen"></font></td>
					<td width="28%"><font face="Arial"><b>MÁXIMA DIMENSIÓN POR IMAGEN<br>(ancho: 425, alto: 284)</b></font></td>
				</tr>
				
				<tr>
					<td width="11%">&nbsp;</td>
					<td width="51%"><font face="Arial">&nbsp; Actual:
                       NOTA1.jpg</font></td>
					<td width="28%">&nbsp;</td>
				</tr>
				 	<tr>
					<td width="20%">&nbsp;</td>
					<td width="51%"></td>
					<td width="28%">&nbsp;</td>
				</tr>
        
                <tr>
					<td width="20%" align="right"><font face="Arial">&nbsp; 
					TITULO:</font></td>
					<td colspan="2">
					   &nbsp; <input type="text" name="titulo" id="titulo" size="50" autocomplete="off" value="Nombran a nuevo Presidente del Patronato UAN">
					</td>
				</tr>
                  	<tr>
					<td width="20%">&nbsp;</td>
					<td width="51%"></td>
					<td width="28%">&nbsp;</td>
				</tr>
               <tr>
					<td width="20%" align="right"><font face="Arial">&nbsp; 
					Texto:</font></td>
					<td colspan="2">
					   &nbsp; <textarea rows="10" cols="56" id="descri" name="descri" class="areax"><div>Por unanimidad, la Trigésima Segunda Legislatura del Congreso del Estado de Nayarit, que preside Leopoldo Domínguez González, avaló la designación del nuevo Presidente del Patronato para la Administración del Impuesto Especial Destinado a la Universidad Autónoma de Nayarit (Patronato UAN).</div><div><br></div><div>El pasado 5 de diciembre del 2017, Domínguez González tomó protesta al C. Juan Francisco García Menchaca como nuevo Presidente del Patronato UAN, la cual se llevó como cuarto punto de la orden del día en la sesión pública No. 37, con fundamento en lo dispuesto por el artículo 121 del reglamento. Así también se eligió como suplente a la profesionista Brenda Liliana Vega Peña como suplente.</div><div><br></div><div>Para el cumplimiento con la orden del día, la Presidencia diseñó la Comisión de Protocolo que acompañó al estrado a García Menchaca, para la última entrega del presidente Presidente del Patronato UAN para la administración 2017-2021.</div></textarea>
					</td>
				</tr>
                
                
             	<tr>
					<td width="20%">&nbsp;</td>
					<td width="51%"></td>
					<td width="28%">&nbsp;</td>
				</tr>
        

				<tr>
					<td width="20%">&nbsp;</td>
					<td width="51%"><font face="Arial">&nbsp;</font><font size="3" face="Arial">
					
					<input type="hidden" name="movi" value="modimg">
					<input type="hidden" name="idimg" value="17">
				    <input type="submit" name="guardar" value="Guardar" class="btn-admin">
					
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