<?php
require_once('db_config.php');

// Conectarse a la base de datos (reemplaza con tus propios datos de conexión)
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$conn->set_charset("utf8");

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos de la tabla de numerales
$sql = "SELECT idnumeral, numero, titulo FROM numerales";
$result = $conn->query($sql);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <title>Numerales</title>
        <style>
        /* Estilos para la tabla */
        table {
            border: 1px solid #808080;
            width: 55%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #808080;
            padding: 5px;
            text-align: center;
            background-color: white;
            color: black;
        }

        th {
            width: 5%;
        }

        /* Estilos para las filas de datos */
        tr.data-row {
            background-color: #DEDEBE;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #1356A4;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0e4673;
        }
    </style>

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
 <h2>Agregar Nuevo Numeral</h2>
    <form action="procesar_agregar_numeral.php" method="POST">
        <label for="numero">Número de Numeral:</label>
        <input type="text" name="numero" required>
        <br><br>
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required>
        <br><br>
        <input type="submit" value="Agregar Numeral">
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

                        <?php
                        $conn->set_charset("utf8");
                          if ($result->num_rows > 0) {
                              while ($row = $result->fetch_assoc()) {
                                  $numero = $row["numero"];
                                  $titulo = $row["titulo"];
                                  echo '<tr class="data-row">';
                                  echo "    <td>$numero</td>";
                                  echo "    <td>$titulo</td>";
                                  echo '    <td><a href="editar_numeral.php?id=' . $row["idnumeral"] . '">Modificar</a></td>';
                                  echo '    <td><a href="agregar_docnum.php?id=' . $row["idnumeral"] . '">Agregar Documento</a></td>';
                                  echo '    <td><a href="eliminar_num.php?id=' . $row['idnumeral'] . '" onclick="return confirm("¿Estás seguro de que deseas eliminar este Numeral?")">Eliminar</a></td>';

                                  echo '</tr>';
                              }
                          }
                          ?>

                </table>
            </div>

    </body>

    </html>
