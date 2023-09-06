                                             
                                              
     
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Galeria</title>
    
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="estiloAdmin.css">
<link rel="stylesheet" href="../css/normalize.css">


<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="../js/FancyZoom.js" type="text/javascript"></script>
<script src="../js/FancyZoomHTML.js" type="text/javascript"></script>

<script src="../js/jquery.min.js"></script>

<script src="../jquery-latest.js"></script>
<script src="../mainb.js"></script>


<script>
    
    function verificar(){
        
        var nom  = document.form1.nombre.value;
        var user = document.form1.user.value;
        var clav = document.form1.clave.value;
        
        if(nom=="" || user=="" || clav==""){
            alert("EXISTEN CAMPOS VACIOS");   
        }else{
            $("#form1").submit();
        }
        
        
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
				<li><a href="usuarios.php" class="activa">Usuarios</a></li>
				<li><a href="noticias.php" >Noticias</a></li>
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
<form action="usuarios.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
						<font size="4" color="white" face="Arial">Nuevo Usuario</font></b></td>
				</tr>
				<tr>
					<td width="11%">&nbsp;</td>
					<td width="51%">&nbsp;</td>
					<td width="28%">&nbsp;</td>
				</tr>
				<tr>
					<td width="20%" align="right"><font face="Arial">&nbsp; 
					Nombre:</font></td>
					<td width="51%"><font face="Arial">&nbsp;&nbsp;</font><font size="3" face="Arial"><input type="text" name="nombre" id="nombre" size="40" autocomplete="off" autofocus></font></td>
					<td width="28%"><font face="Arial">&nbsp;</font></td>
				</tr>
				
				<tr>
					<td width="20%" align="right"><font face="Arial">&nbsp; 
					Usuario:</font></td>
					<td width="51%"><font face="Arial">&nbsp;&nbsp;</font><font size="3" face="Arial"><input type="text" name="user" id="user" size="40" autocomplete="off"></font></td>
					<td width="28%"><font face="Arial">&nbsp;</font></td>
				</tr>
       
       		
				<tr>
					<td width="20%" align="right"><font face="Arial">&nbsp; 
					Contraseña:</font></td>
					<td width="51%"><font face="Arial">&nbsp;&nbsp;</font><font size="3" face="Arial"><input type="text" name="clave" id="clave" size="40" autocomplete="off"></font></td>
					<td width="28%"><font face="Arial">&nbsp;</font></td>
				</tr>
					<tr>
					<td width="11%">&nbsp;</td>
					<td width="51%">&nbsp;</td>
					<td width="28%">&nbsp;</td>
				</tr>
				<tr>
					<td width="20%">&nbsp;</td>
					<td width="51%"><font face="Arial">&nbsp;</font><font size="3" face="Arial">
					
					<input type="button" name="guardar" class="btn-admin" value="Guardar" onclick="verificar();">
					
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
    <div align="center" class="tbl">

                <table border="1" width="800" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
                    <tr>
                        <td width="20%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Nombre</font></b>
                        </td>
                         <td width="20%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Usuario</font></b>
                        </td>
                        <td width="20%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Contraseña</font></b>
                        </td>
                         <td width="20%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF"></font></b>
                        </td>
       

                    </tr>

                    
      <tr>
      <td bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;ADMINISTRACION</font></td>
      <td bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;patronatouan</font></td>
      <td bgcolor="#DEDEBE"><font face="Arial" size="2">&nbsp;Adminpatr0nat0UAN17</font></td>
      <td bgcolor="#DEDEBE" align="center"><font face="Arial" size="2">&nbsp;<a href="moduser.php?id=1">Modificar</a></font></td>

    </tr>
      <tr>
      <td bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Comunicación Social</font></td>
      <td bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;Comunicacionpatronatouan</font></td>
      <td bgcolor="#F0F0F0"><font face="Arial" size="2">&nbsp;C0municaPatr0n1721</font></td>
      <td bgcolor="#F0F0F0" align="center"><font face="Arial" size="2">&nbsp;<a href="moduser.php?id=2">Modificar</a></font></td>

    </tr>
                </table>
            </div>
       
</body>
</html>  
    
      
        
          
            
              
                
                  
                    
                      
                        
                          
                            
                              
                                
                                  
                                    
  
    

    
