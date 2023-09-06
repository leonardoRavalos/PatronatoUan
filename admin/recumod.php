<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modificar</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="estiloAdmin.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script>
        function GuardarX(){
            var nombre=document.form1.nombre.value;
            var id=document.form1.id.value;
            var anio=document.form1.anio.value;
            var trimestre=document.form1.trimestre.value;
            var tipo=document.form1.tipo.value;
        //alert("addTrimestre.php?type=1&id="+id+"&nombre="+nombre+"&anio="+anio+"&tipo="+tipo+"&trimestre="+trimestre);
            window.location = "addTrimestre.php?type=1&id="+id+"&nombre="+nombre+"&anio="+anio+"&tipo="+tipo+"&trimestre="+trimestre;
        }
    </script>
</head>
<body>
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
<br><br><br>
<div id="espacio3"></div>

   <div align="center">
   <table width="500px" border="0">
       <tr>
           <td>
               <form action="#" id="form1" name="form1">
                   <label>Nombre</label>
                   <input type="text" name="nombre" id="nombre" value="Convocatoria" class="form-control" autofocus autocomplete="off">
                   <br/>
                   <label>Año</label>
                   <input type="text" class="form-control" name="anio" id="anio" value="2023" > 
                   <br/>
                   <label>Tipo avgf</label>
                   <select id="tipo" name="tipo" class="form-control">
                        <option value="avgf"  selected="selected">Avance de Gestión Financiera</option>
                        <option value="cp"  >Cuenta Pública</option>
                        <option value="iaa" >Informe Anual de Actividades</option>
                        <option value="sevac" >SEVAC</option>
                        <option value="paa" >Programa Anual de Archivo</option>                    
                    </select>
                    <br/>
                    <label>Trimestre</label>
                    <select id="trimestre" name="trimestre" class="form-control">
                        <option value="0"  selected="selected">Anual</option>
                        <option value="1" >Primer Trimestre</option>
                        <option value="2" >Segundo Trimestre</option>
                        <option value="3" >Tercer Trimestre</option>
                        <option value="4" >Cuarto Trimestre</option>
                    </select>
                   <br/> <br/>
                   <input type="hidden" name="id" id="id" value="110" >
                   <input type="button" value="Guardar" class="btn btn-primary"  onclick="GuardarX()">
               </form>
           </td>
       </tr>
   </table></div>
    
</body>
</html>