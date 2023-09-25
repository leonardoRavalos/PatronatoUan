<?php
session_start();
require_once('db_config.php'); // Include your database configuration

// Insert User Data
if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $user = $_POST['user'];
    $clave = $_POST['clave'];

    // Perform input validation and sanitation here

    $sql = "INSERT INTO usuarios (nombre, user, passwd) VALUES ('$nombre', '$user', '$clave')";
    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        // You may want to redirect or display a success message
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Display User Data
$query = "SELECT * FROM usuarios";
$result = $conn->query($query);
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estiloAdmin.css">
        <link rel="stylesheet" href="normalize.css">

        <title>Bienvenida</title>
		<style>
    /* Add styles for form container */
form {
    margin: 20px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

/* Style form labels */
label {
    font-weight: bold;
    display: block;
    margin-bottom: 10px;
}

/* Style form input fields */
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    outline: none;
}

/* Style the submit button */
input[type="submit"] {
    background-color: #1356A4;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0f457f;
}

/* Style the table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 8px;
    text-align: left;
}

/* Add styles for the table header */
th {
    background-color: #1356A4;
    color: #fff;
}
</style>

		

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
           <br>
		   <form action="" method="post">
				<label for="nombre">Nombre:</label><br>
				<input type="text" id="nombre" name="nombre"><br>
				<label for="user">Usuario:</label><br>
				<input type="text" id="user" name="user"><br>
				<label for="clave">Contraseña:</label><br>
				<input type="password" id="clave" name="clave"><br>
				<input type="submit" name="guardar" value="Guardar">
			</form>
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
                    <font face="Arial" size="2" color="#FFFFFF">Acciones</font></b>
                </td>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['user'] . "</td>";
                    echo "<td>" . $row['passwd'] . "</td>";
                    echo '<td><a href="editar.php?id=' . $row['idusuario'] . '">Editar</a> | <a href="eliminar.php?id=' . $row['idusuario'] . ' onclick="return confirm("¿Estás seguro de que deseas eliminar este usuario?")">Eliminar</a></td>';
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay registros.</td></tr>";
            }
            ?>
        </table>
    </div>


    </body>

    </html>
