
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inicio</title>
       
        
</head>

 <body>
                       <?
    require_once("conectar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrador</title>
    
              
    
<link rel="stylesheet" href="estiloAdmin.css">
<link rel="stylesheet" href="normalize.css">
<script>      
var nuevo;
function cambiaApass(caja) {
   caja.value="";
   caja.type="password";
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


</body>
</html>









<div id='principal'><BR><font face='Arial' Size='5'><b>&nbsp;&nbsp;Bienvenido! ADMINISTRACION</b></b><p>&nbsp;</p>&nbsp;&nbsp;Tu sesion ha iniciado con exito...</font><br><br></div>