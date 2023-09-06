    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <title>Numerales</title>

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="estiloAdmin.css">
        <link rel="stylesheet" href="normalize.css">
<script>
    
    function verificar(){
        var nom  = document.form1.titulo.value;
        var numerop=document.form1.numerop.value;
        var seccion = document.form1.seccion.value;

        if(numerop==""){
          alert("Introduzca un numero");
          document.form1.numerop.focus();
          return false;
        }
        if(nom==""){
            alert("Introduzca el titulo");
            document.form1.titulo.focus();
            return false;
       // }else{
         //  return true;
        }
        if(seccion=="Elija"){
          alert("Elija una seccion");
          return false;
        }
        
        return true;
        
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
<form action="numerales.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit=" return verificar();">
	<table border="2" width="37%" bordercolor="#000000" cellspacing="0" cellpadding="0">
				<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td colspan="3">&nbsp;</td>
				</tr>
				<tr  bgcolor="#1356A4" height="25" >
					<td colspan="3">
                        <p align="center"><b>
						<font size="4" color="white" face="Arial">AGREGAR NUMERAL</font></b></td>
				</tr>
				<tr>
					<td width="11%">&nbsp;</td>
					<td width="51%">&nbsp;</td>
					<td width="28%">&nbsp;</td>
				</tr>
				<tr>
					<td width="20%" align="right"><font face="Arial">&nbsp; Numero:</font></td>
					<td width="51%" colspan="2">&nbsp;
					<input type="text" size="10" name="numerop" id="numerop" autocomplete="off" autofocus>
				    </td>
				</tr>
				<tr>
					<td width="20%" align="right"><font face="Arial">&nbsp; Titulo:</font></td>
					<td width="51%" colspan="2">&nbsp;
					   <input type="text" name="titulo" id="titulo" size="46" autocomplete="off">
				    </td>
				</tr>
        <tr>
          <td width="20%" align="right"><font face="Arial">&nbsp; Seccion:</font></td>
          <td width="51%" colspan="2">&nbsp;
              <select size="1" name="seccion">
                <option selected >Elija</option>
                <option>Anterior</option>
                <option>Actual</option>
                </select>
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
<br>           
<br>           
           
            <div align="center">
            <center>Ley actual</center>
                <table border="1" width="55%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
                    <tr>

                        <td width="5%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">No.</font></b>
                        </td>
                        <td width="45%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Titulo</font></b>
                        </td>

                        <td width="5%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF"></font></b>
                        </td>
                        <td width="5%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Doctos.</font></b>
                        </td>
                                                <td width="5%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Eliminar.</font></b>
                        </td>

                    </tr>

                    
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;I.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Marco Normativo</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=174">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=174">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=174" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;II.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Estructura Organica</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=175">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=175">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=175" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;III.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Facultades de cada área</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=176">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=176">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=176" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;IV.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Metas y objetivos</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=177">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=177">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=177" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;V.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Indicadores de interés público</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=178">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=178">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=178" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;VI.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Indicadores de objetivos y resultados</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=179">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=179">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=179" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;VII.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Directorio de servidores públicos</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=180">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=180">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=180" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;VIII.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Remuneración bruta y neta de servidores públicos</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=181">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=181">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=181" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;IX.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Gastos de representación y viáticos</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=182">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=182">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=182" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;X.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Número de plazas del personal de base y confianza</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=184">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=184">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=184" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XI.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Contratación de servicios profesionales</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=186">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=186">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=186" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XII.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Versión pública de las declaraciones patrimoniales</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=187">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=187">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=187" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XIII.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Nombre y domicilio de la Unidad de Transparencia</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=188">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=188">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=188" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XIV.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Convocatorias a concursos para ocupar cargos públicos</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=190">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=190">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=190" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XV.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Información de programas de subsidios</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=192">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=192">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=192" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XVI.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Condiciones generales de trabajo</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=196">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=196">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=196" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XVII. </font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Información curricular</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=198">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=198">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=198" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XVIII.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Servidores públicos con sanciones administrativas</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=199">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=199">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=199" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XIX.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Servicios que ofrecen y programas que administra</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=200">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=200">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=200" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XX.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Trámites, requisitos y formatos que ofrecen</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=203">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=203">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=203" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXI.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Información financiera</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=204">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=204">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=204" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXII.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Instrumentos jurídicos relativos al financiamiento</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=208">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=208">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=208" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXIII.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Montos relativos a comunicación social y publicidad</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=211">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=211">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=211" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXIV.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Informes de resultados de auditorías</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=214">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=214">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=214" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXV.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Resultados dictaminación de estudios financieros</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=215">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=215">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=215" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXVI.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Personas físicas o morales que usen recursos públicos</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=216">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=216">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=216" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXVII.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Concesiones, contrato, convenios, permisos</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=217">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=217">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=217" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXVIII.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Resultados de adjudicación directa</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=218">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=218">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=218" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXIX.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Informes que por disposición legal generen los sujetos obligados</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=220">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=220">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=220" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXX.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Estadísticas que generen en cumplimiento de sus facultades</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=221">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=221">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=221" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXXI.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Informes programáticos presupuestales</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=222">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=222">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=222" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXXII.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Padrón de proveedores y contratistas</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=223">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=223">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=223" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXXIII. </font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Convenios</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=224">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=224">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=224" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXXIV.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Inventario de bienes muebles e inmuebles</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=225">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=225">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=225" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXXV.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Recomendaciones emitidas órganos públicos</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=248">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=248">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=248" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXXVI.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Resoluciones y laudos</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=251">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=251">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=251" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXXVII.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Mecanismos de participación ciudadana</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=252">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=252">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=252" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXXVIII.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Programas que ofrecen</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=253">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=253">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=253" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXXIX.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Actas y resoluciones del comité de transparencia</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=255">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=255">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=255" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XL.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Evaluaciones y encuestas</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=259">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=259">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=259" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XLI.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Estudios financiados con recursos públicos</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=261">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=261">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=261" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XLII.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Jubilados y pensionados y monto que reciben</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=265">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=265">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=265" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XLIII.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Ingresos recibidos por cualquier concepto</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=266">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=266">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=266" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XLIV.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Donaciones a terceros en dinero o en especie</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=267">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=267">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=267" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XLV.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Catálogo de disposición y archivo documental</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=269">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=269">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=269" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XLVI.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Actas de sesiones ordinarias y extraordinarias</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=270">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=270">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=270" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XLVII.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Solicitudes a empresas concesionarias</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=271">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=271">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=271" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XLVIII.</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Obligaciones de responsabilidad hacendaria</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=277">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=277">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=277" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XLIX.</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Otra información de utilidad</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=278">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=278">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=278" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;L</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Rubros aplicables a la página de internet (último párrafo)</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=289">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=289">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=289" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;Artículo</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;35</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=290">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=290">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=290" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
                </table>
            </div>

<br><br>


              <div align="center">
            <center>Ley Anterior</center>
                <table border="1" width="55%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
                    <tr>

                        <td width="5%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">No.</font></b>
                        </td>
                        <td width="45%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Titulo</font></b>
                        </td>

                        <td width="5%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF"></font></b>
                        </td>
                        <td width="5%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Doctos.</font></b>
                        </td>
                                                <td width="5%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Eliminar.</font></b>
                        </td>

                    </tr>

                    
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;I</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Estructura Orgánica</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=56">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=56">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=56" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;II</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Directorio de Servidores Públicos Y Curriculums</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=57">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=57">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=57" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;III</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Remuneración Mensual</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=58">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=58">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=58" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;IV</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Gastos Mensuales del  Servidor Público</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=59">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=59">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=59" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;V</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Perfil de Puestos</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=60">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=60">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=60" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;VI</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Planes y Programas de Desarrollo</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=61">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=61">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=61" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;VII</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Información Sobre Presupuestos</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=62">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=62">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=62" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;VIII</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Procedimientos de Licitación </font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=63">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=63">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=63" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;IX</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Concesiones y Permisos</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=64">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=64">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=64" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;X</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Resultado de Auditorias</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=65">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=65">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=65" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XI</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Programas de Subsidio y Aportaciones</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=66">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=66">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=66" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XII</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Calendarización de Reuniones Públicas</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=67">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=67">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=67" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XIII</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Enlace de Transparencia</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=68">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=68">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=68" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XIV</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Catálogos  Documentales</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=69">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=69">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=69" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XV</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Padrón de Proveedores</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=70">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=70">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=70" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XVI</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Bienes Patrimoniales</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=71">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=71">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=71" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XVII</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Contratos con  Proveedores</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=72">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=72">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=72" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XVIII</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Licencias y Permisos Otorgados </font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=73">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=73">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=73" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XIX</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Informes de Entidades Públicas</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=74">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=74">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=74" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XX</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Informes de Resultados en Giras</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=75">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=75">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=75" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXI</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Servicios al Público </font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=76">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=76">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=76" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXII</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Procuración de Justicia</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=77">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=77">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=77" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXIII</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Expropiaciones</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=78">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=78">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=78" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXIV</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Agenda Legislativa Oficial</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=79">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=79">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=79" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXV</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Estadísticas Órganos Jurisdiccionales y Administrativos</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=80">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=80">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=80" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXVI</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Cuotas y Tarifas Municipales</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=81">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=81">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=81" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXVII</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Marco Normativo</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=82">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=82">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=82" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXVIII</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Convenios</font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=83">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=83">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=83" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXIX</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Contratos, Convenios y Condiciones de Trabajo</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=84">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=84">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=84" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXX</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Bis.- Información sobre Sindicatos </font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=85">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=85">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=85" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXXI</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Estudios Factibilidad Ecológica</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=86">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=86">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=86" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXXII</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Informes Partidos Políticos </font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=87">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=87">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=87" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;XXXIII</font></td>
      <td height="5" bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Cuenta Pública y Avance de Gestión Financiera</font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=88">Modificar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=88">Agregar</a></font></td>
      <td height="5" bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=88" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
      <tr>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;XXXIV</font></td>
      <td height="5" bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Información Relevante </font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="modnumeral.php?id=89">Modificar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="documentos.php?id=89">Agregar</a></font></td>
      <td height="5" bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="movadmin.php?movi=elinumeral&idnumeral=89" onclick="return confirm('Se eliminarán los documentos que contiene el numeral')">Eliminar</a></font></td>
   

    </tr>
                </table>
            </div>

    </body>

    </html>
