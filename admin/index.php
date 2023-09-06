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
            caja.value = "";
            caja.type = "password";
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
            <img src="../imagenes/logo.png" id="logovela">
        </div>
        <div class="divmenu">
        </div>
    </div>

    <div id="espacio3"></div>
    <br>
    <br>

    <div id="princi">
        <div id="login">
            <table border="0" width="100%" cellspacing="0" cellpadding="0" height="221">
                <tr>
                    <td>
                        <table border="0" width="100%" cellspacing="0" cellpadding="0" height="144">
                            <tr>
                                <td height="60" bgcolor="#1356A4">
                                    <p align="center"><b>
					<font face="Verdana" size="4" color="white">Login</font></b></td>
                            </tr>
                            <tr>
                                <td height="28" bgcolor="white">&nbsp;
                                    <div align="center">
                                        <table border="0" width="90%" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td>
                                                    <form action="login.php" method="post" name="formulario">
                                                        <b>
								<font face="Arial" size="2" color="#333333">Usuario:</font></b><br>
                                                        <input name="username" type="text" id="username" autocomplete="off" required size="25" autofocus>
                                                        <p><b>
									<font face="Arial" size="2" color="#333333">Contraseña:</font></b><br>

                                                            <input name="password" type="text" value="Password" autocomplete="off" required size="25" style="color:#666" onfocus="cambiaApass(this)">
                                                            <br><br>
                                                            <input type="submit" name="Submit" value=" :: Ingresar :: "></p>
                                                    </form>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <p>&nbsp;</td>
                            </tr>
                            <tr>
                                <td bgcolor="#1356A4" height="60">
                                    <center><b>
					<font face="Arial" size="1" color="#FFFFFF">PATRONATO UAN Administrador</font></b></center>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <!--login-->
    </div>
    <!--principal-->
</body>

</html>
