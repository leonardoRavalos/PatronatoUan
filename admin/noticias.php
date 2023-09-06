<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Noticias</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="estiloAdmin.css">
        <link rel="stylesheet" href="normalize.css">
    </head>
    <body style="background:#d9d9d9;">
        <div class="menufondo">
            <div class="enca-lenguajeb">
                <div align="center"></div>
            </div>
            <div class="logo">
                <img src="../imagenes/logo.png" width="250" height="35" id="logovela">
            </div>
            <div class="divmenu">
                <header>
                    <div class="menu_bar">
                        <a href="#" class="bt-menu">
                            <span class="icon-list"></span>
                            Menu
                        </a>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li>
                                <a href="bienvenida.php">Bienvenida</a>
                            </li>
                            <li>
                                <a href="usuarios.php">Usuarios</a>
                            </li>
                            <li>
                                <a href="noticias.php" class="activa">Noticias</a>
                            </li>
                            <li>
                                <a href="formatos.php">Formatos</a>
                            </li>
                            <li>
                                <a href="recaudacion.php">Recaudación</a>
                            </li>
                            <li>
                                <a href="intereses.php">Interes</a>
                            </li>
                            <li>
                                <a href="numerales.php">Numerales</a>
                            </li>
                            <li>
                                <a href="privacidad.php">Aviso de privacidad</a>
                            </li>
                            <li>
                                <a href="infraestructura.php">Infraestructura</a>
                            </li>
                            <li>
                                <a href="patronato.php">Patronato</a>
                            </li>
                            <li>
                                <a href="pantalla_principal.php">Pantalla Principal</a>
                            </li>
                            <li>
                                <a href="secciones.php">Secciones</a>
                            </li>
                            <li>
                                <a href="logout.php">Salir</a>
                            </li>
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
                <form method="POST" action="addnoticia.php">
                    <button type="submit" class="btn-admin2">AGREGAR NOTICIA</button>
                </form>
            </div>
            <table border="1" width="60%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
                <tr>
                    <td width="40%" align="center" bgcolor="#1356A4">
                        <b>
                            <font face="Arial" size="2" color="#FFFFFF">Titulo</font>
                        </b>
                    </td>
                    <td width="10%" align="center" bgcolor="#1356A4">
                        <b>
                            <font face="Arial" size="2" color="#FFFFFF">Imagen</font>
                        </b>
                    </td>
                    <td width="10%" align="center" bgcolor="#1356A4">
                        <b>
                            <font face="Arial" size="2" color="#FFFFFF">Portada</font>
                        </b>
                    </td>
                    <td width="10%" align="center" bgcolor="#1356A4">
                        <b>
                            <font face="Arial" size="2" color="#FFFFFF"></font>
                        </b>
                    </td>
                    <td width="10%" align="center" bgcolor="#1356A4">
                        <b>
                            <font face="Arial" size="2" color="#FFFFFF"></font>
                        </b>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Nombran a nuevo Presidente del Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;NOTA1.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/NOTA1.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=17">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=17">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN aprueba POA 2018</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;config.php</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/config.php" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=18">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=18">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN: Información a la mano de la ciudadanía</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;NOTA3.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/NOTA3.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=19">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=19">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN presente en Unidad Académica de Bahía de Banderas</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;NOTA4.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/NOTA4.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=20">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=20">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El Patronato estuvo presenten en el Segundo Informe del Estado General, Presupuestal y Financiero de la Universidad Autónoma de Nayarit</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;INFORME_2.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/INFORME_2.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=22">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=22">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Comienza la construcción de la segunda etapa del nuevo Edificio de Docencia e Investigación en la Unidad Académica de Medicina</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_7033.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_7033.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=23">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=23">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN estuvo presente en la entrega de becas del Programa Delfín</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_1589.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_1589.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=24">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=24">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;4to Encuentro de Estudiantes de Pueblos Originarios de la Universidad Autónoma de Nayarit</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PARA_NOTA_4_ENCUENTRO_DE_PUEBLOS_ORIGINARIOS.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PARA_NOTA_4_ENCUENTRO_DE_PUEBLOS_ORIGINARIOS.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=25">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=25">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Ciencia al alcance del Nivel Medio Superior</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;DISEÑO_FOTO_REPORTAJE_EXPLORA.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/DISEÑO_FOTO_REPORTAJE_EXPLORA.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=26">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=26">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;El Tesorero del Patronato estuvo presente en la entrega de becas del Programa Explora</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_1630.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_1630.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=27">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=27">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El Patronato fue testigo de la entrega de Becas Institucionales a estudiantes del nivel Medio Superior y Superior de la UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_1689.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_1689.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=28">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=28">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato de la UAN presente en la clausura del Programa Explora 2018</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_7468.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_7468.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=29">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=29">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Ayuntamientos con adeudo del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;CORRECTA2.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/CORRECTA2.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=30">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=30">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato de la UAN informa procedimiento para enterar el impuesto especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;CONFERENCIA1.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/CONFERENCIA1.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=31">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=31">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Se reúne el Patronato de la UAN con Diputados y la ASEN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_7913.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_7913.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=32">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=32">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Ayuntamientos con adeudo a la administración del Patronato de la UAN </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;final.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/final.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=34">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=34">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Ayuntamientos con adeudo del 12%</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;MESES_ADEUDO_OCTUBRE_2018.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/MESES_ADEUDO_OCTUBRE_2018.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=35">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=35">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Se inaugura el Congreso de Ciencia, Tecnología e Innovación Nayarit 2018</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_7508.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_7508.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=36">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=36">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Avances de Gestión Financiera Patronato UAN 2018</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;240_F_187195091_NvA0VlsMzIckUg1orfVzb87fhnhkGgDT.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/240_F_187195091_NvA0VlsMzIckUg1orfVzb87fhnhkGgDT.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=37">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=37">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Atento aviso</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;FORMATOS_OCTUBRE_(2).jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FORMATOS_OCTUBRE_(2).jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=39">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=39">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Entregan recursos para 53 proyectos de investigación de la UAN financiados con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_8435.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8435.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=40">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=40">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato de la UAN aprueba recursos para la reconstrucción y rehabilitación de la Preparatoria No. 5 de Tuxpan, Nayarit</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_7585.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_7585.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=41">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=41">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Atento aviso</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PLANTILLA_AVISOS.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLA_AVISOS.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=42">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=42">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Presidente del Patronato de la UAN rinde su Primer informe de Actividades</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;INFORME.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/INFORME.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=43">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=43">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Atento aviso</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Copia_de_PLANTILLA_AVISOS.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/Copia_de_PLANTILLA_AVISOS.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=44">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=44">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Cumplimiento del pago del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PLANTILLA_VERDE_Y_AZUL_(3).jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLA_VERDE_Y_AZUL_(3).jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=45">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=45">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN aprueba el Programa Operativo Anual 2019</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;SF1.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/SF1.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=46">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=46">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Se inaugura nuevo edificio de Docencia e Investigación en la Unidad Académica de Medicina</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;FINMED.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FINMED.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=48">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=48">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Se efectuó la décima octava Sesión Ordinaria del Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;2.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/2.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=51">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=51">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Rinde el Rector su Tercer Informe de Actividades</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;infrector.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/infrector.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=52">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=52">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Impulsan el fomento a la investigación con el Impuesto Especial </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;exploraydelfin.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/exploraydelfin.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=53">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=53">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Docentes universitarios son beneficiados por el Patronato UAN para asistir al  Congreso Universitario 2019</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;congreso.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/congreso.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=54">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=54">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Se efectuó la XIX Sesión Ordinaria del Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;SO1.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/SO1.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=55">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=55">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Entregan Beca Institucional 2019 a estudiantes de la  UAN</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_9788.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_9788.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=57">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=57">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Entrega Patronato UAN rehabilitación de dormitorios para estudiantes de la UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;6.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/6.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=60">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=60">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Se inaugura nuevo edificio en la Unidad Académica Preparatoria No. 12 de San Blas</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PREPA_12</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PREPA_12" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=61">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=61">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Inauguran nuevo edificio en la Preparatoria No. 5 de Tuxpan</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;TUXPAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/TUXPAN" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=62">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=62">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Rinde su segundo informe de actividades el Presidente del Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;nota.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/nota.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=64">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=64">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Recaudación histórica en el Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_IMAGENES_(13).png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_IMAGENES_(13).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=65">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=65">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Por el Fortalecimiento Universitario: Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;GRAFICOS_(3).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/GRAFICOS_(3).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=66">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=66">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Desarrollo científico en la UAN: el impacto del impuesto especial en los proyectos de investigación</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;2020_(43).png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/2020_(43).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=67">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=67">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN entrega rehabilitación del Edificio Administrativo</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;EDIFICIO.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/EDIFICIO.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=68">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=68">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Entregan Unidad Médica Móvil financiada con recurso del Impuesto Especial </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;UMM_WEB.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/UMM_WEB.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=69">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=69">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Aprueba la Junta de Gobierno el Programa Operativo Anual 2020</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;SOWEB.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/SOWEB.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=70">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=70">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN restringe horario de atención por contingencia del COVID-19</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PLANTILLA_VERDE_Y_AZUL.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLA_VERDE_Y_AZUL.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=71">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=71">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Comunicado Oficial ante contingencia por COVID-19</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PLANTILLA_VERDE_Y_AZUL.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLA_VERDE_Y_AZUL.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=72">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=72">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Fortalecimiento de la investigación científica en la UAN con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_IMAGENES_(5).jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_IMAGENES_(5).jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=73">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=73">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN coadyuva en el desarrollo académico de la comunidad universitaria</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;FOTOS_1920X1080_(3).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FOTOS_1920X1080_(3).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=74">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=74">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Desarrollo científico con apoyo del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;FOTOS_1920X1080_(2).png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FOTOS_1920X1080_(2).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=75">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=75">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Fortalecimiento del Bachillerato Universitario con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;FOTOS_1920X1080_(2).jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FOTOS_1920X1080_(2).jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=76">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=76">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Impulso a la Movilidad Académica con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;32.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/32.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=77">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=77">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN: en apoyo a la calidad educativa del nivel Media Superior</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;31.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/31.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=78">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=78">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Impulso al Fortalecimiento Institucional en UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;30.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/30.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=79">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=79">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Apoyo al Mantenimiento de la Infraestructura Universitaria con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_8588.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8588.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=80">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=80">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Educación de Calidad en la UAN con Apoyo del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;FOTOS_1920X1080.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FOTOS_1920X1080.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=81">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=81">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN fortalece en el desarrollo académico de la Universidad</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;FOTOS_1920X1080_(1).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FOTOS_1920X1080_(1).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=82">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=82">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN aprueba recurso para  Plan de Protección y Seguridad Universitaria ante el COVID 19</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;FOTOS_1920X1080_(2).png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FOTOS_1920X1080_(2).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=83">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=83">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Impulso al Desarrollo de la Innovación Educativa en la UAN con el Impuesto Especial </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;FOTOS_1920X1080_(3).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FOTOS_1920X1080_(3).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=84">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=84">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Impulso a la investigación educativa con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;FOTOS_1920X1080_(4).png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FOTOS_1920X1080_(4).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=85">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=85">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN coadyuva en la formación integral de la comunidad universitaria</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;4.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/4.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=86">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=86">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato refrenda su compromiso con la calidad educativa que se oferta en la UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;FOTOS_1920X1080_(1).jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FOTOS_1920X1080_(1).jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=87">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=87">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Fortalecimiento de la divulgación científica, tecnológica y cultural de la UAN con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;FOTOS_1920X1080.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FOTOS_1920X1080.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=88">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=88">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Impulso al desarrollo integral de la comunidad universitaria con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;FOTOS_1920X1080_(3).jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FOTOS_1920X1080_(3).jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=89">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=89">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN: fortaleciendo el desarrollo profesional de la comunidad universitaria </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;ACTACADEMIC.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/ACTACADEMIC.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=90">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=90">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Impulso a la conclusión de proyectos de investigación con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_8437.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8437.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=91">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=91">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;La UAN trabaja con responsabilidad social ante la contingencia sanitaria por COVID-19</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;FOTOS_1920X1080.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FOTOS_1920X1080.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=92">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=92">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN: Impulsando el Fortalecimiento Universitario</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_2020_(3).jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_2020_(3).jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=93">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=93">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PiiDA: Innovación Educativa en la UAN</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;CARATULA_VIDEO_2020_(1).jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/CARATULA_VIDEO_2020_(1).jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=94">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=94">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Atento aviso</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PLANTILLA_VERDE_Y_AZUL.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLA_VERDE_Y_AZUL.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=95">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=95">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN contribuye al impulso del Bachillerato Universitario</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;DIAPOSITIVAS.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/DIAPOSITIVAS.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=96">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=96">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Fortalecimiento de la Formación Integral con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;INTEGRAL.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/INTEGRAL.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=97">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=97">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Fortalecimiento de la calidad educativa en la UAN con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_2020_(6).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_2020_(6).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=98">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=98">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN contribuye al Impulso de la trayectoria Académica, Estudiantil y Docente de la comunidad Universitaria</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_2020_(8).png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_2020_(8).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=99">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=99">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Rehabilitación y Mejoramiento de la Infraestructura Universitaria  con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_2020_(9).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_2020_(9).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=100">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=100">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN Impulsa Acciones para el inicio del Ciclo escolar 2020-2021 en la UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Diseño_sin_título.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/Diseño_sin_título.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=101">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=101">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN da Inicio a la Construcción de un  Nuevo Edificio para la Unidad Académica del Norte</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Diseño_sin_título.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/Diseño_sin_título.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=102">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=102">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Mantenimiento Preventivo y Correctivo de la  Infraestructura Universitaria con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Diseño_sin_título_(5).png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/Diseño_sin_título_(5).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=103">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=103">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN Impulsa el Desarrollo Científico en la UAN</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_2020_(3).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_2020_(3).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=104">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=104">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Continua el Apoyo al Fortalecimiento de la Calidad Educativa con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;CALIDADED.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/CALIDADED.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=105">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=105">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Entrega Patronato UAN Recurso del Impuesto Especial para el Fortalecimiento del CENITT</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;CENITT.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/CENITT.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=106">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=106">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN Dota de Equipamiento al Edificio EPIIDA</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_2020_(13).jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_2020_(13).jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=108">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=108">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Fortalecimiento de los proceso administrativos de la UAN  con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_2020_(14).jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_2020_(14).jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=109">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=109">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;La UAN continúa impulsado la divulgación de la ciencia y la tecnología con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Captura_de_pantalla_2020-11-30_a_la(s)_10.38.11.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/Captura_de_pantalla_2020-11-30_a_la(s)_10.38.11.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=110">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=110">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Presidente del Patronato UAN rinde su Tercer Informe de Actividades</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Copia_de_CARATULA_VIDEO_2020.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/Copia_de_CARATULA_VIDEO_2020.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=111">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=111">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Continúa el fortalecimiento de la investigación con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_2021.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_2021.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=113">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=113">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Conectividad para la zona norte con apoyo del Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_2021_(4).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_2021_(4).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=114">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=114">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Apoyo al fortalecimiento de la calidad de los programas educativos de la UAN con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_2021_(7).png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_2021_(7).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=115">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=115">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Con apoyo del Patronato UAN se impulsa el fortalecimiento de la infraestructura de la Unidad Académica de Ahuacatlán</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_2021_(8).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_2021_(8).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=116">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=116">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN continúa impulsando el incremento del patrimonio universitario</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PLANTILLAS_2021_(10).png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLANTILLAS_2021_(10).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=117">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=117">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN: Impulsando la Formación Integral de la Comunidad Estudiantil</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;NOTAS_2021.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/NOTAS_2021.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=118">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=118">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN refrenda su compromiso con el fortalecimiento del patrimonio universitario</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;NOTAS_2021_(4).png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/NOTAS_2021_(4).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=119">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=119">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Fortalecimiento de la investigación científica en la UAN con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;NOTAS_2021_(7).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/NOTAS_2021_(7).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=120">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=120">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN aprueba recurso para el Programa de Atención a la Emergencia Sanitaria por COVID-19 2021</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;NOTAS_2021_(12).png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/NOTAS_2021_(12).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=121">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=121">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Fortalecimiento del Bachillerato Universitario con Apoyo del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;NOTAS_2021.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/NOTAS_2021.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=122">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=122">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;La UAN continúa fortaleciendo la infraestructura del Área de la Salud con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;UASI.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/UASI.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=123">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=123">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Fortalece la UAN la Infraestructura Educativa del Área de Ciencias Básicas e Ingenierías con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;UACBI.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/UACBI.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=124">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=124">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Impulso a la conclusión de proyectos de investigación con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;CEMIC2.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/CEMIC2.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=125">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=125">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;La UAN Impulsa la Formación Integral con Apoyo del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;FESTIVAL_GRAN_NAYAR_2021.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/FESTIVAL_GRAN_NAYAR_2021.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=126">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=126">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Fortalece la UAN la Infraestructura de la Unidad Académica de Bahía de Banderas</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;BAHIADEBANDERAS.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/BAHIADEBANDERAS.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=127">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=127">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN continúa impulsando el incremento del patrimonio universitario</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;ANERVOUAN.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/ANERVOUAN.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=128">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=128">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Fomento a la Investigación Educativa en la UAN con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;CIENCIACONV.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/CIENCIACONV.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=129">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=129">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Con apoyo del Impuesto Especial: inician los trabajos de Rehabilitación de Sanitarios del Edificio COMPLEX </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;COMPLEX.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/COMPLEX.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=130">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=130">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN inicia la construcción de Nuevo Edificio para la Unidad Académica Preparatoria # 9 de Villa Hidalgo</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PREPA9.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PREPA9.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=131">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=131">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN contribuye en el fortalecimiento del Bachillerato Universitario</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;BACHILLERATO.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/BACHILLERATO.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=132">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=132">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Se fortalece la infraestructura de la Unidad Académica de Odontología con el apoyo del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;ODONTOLOGIA.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/ODONTOLOGIA.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=133">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=133">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Con el Impuesto Especial la UAN fortalece su infraestructura para el desarrollo de productos audiovisuales</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;COMUNICACIONSOCIAL.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/COMUNICACIONSOCIAL.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=134">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=134">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Generación científica en la UAN con apoyo del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;CIENCIA.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/CIENCIA.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=135">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=135">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Autoridades del Patronato UAN supervisan avances de la nueva infraestructura universitaria en la zona norte de Nayarit</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;UA_NORTE.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/UA_NORTE.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=136">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=136">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Obra Pública del Patronato UAN continúa impulsando  el incremento del patrimonio universitario</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;CANCHA.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/CANCHA.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=137">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=137">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Autoridades de la UAN y del Patronato supervisan la nueva infraestructura universitaria apoyada con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;V6.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/V6.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=138">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=138">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Con apoyo del Impuesto Especia, la UAN impulsa la generación de vocaciones científicas en la entidad</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;GLADIS.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/GLADIS.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=139">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=139">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Fortalecimiento de la divulgación científica y cultural de la UAN con apoyo del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;EDITORIAL.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/EDITORIAL.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=140">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=140">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Fortalece la UAN la infraestructura de los laboratorios de la UACBI con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;UACBI_MECANICA.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/UACBI_MECANICA.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=141">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=141">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Nombran a Carlos Francisco García Jiménez como nuevo presidente del Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;P_1_PRESIDENTE_Y_PRESIDENTA_SUPLENTE.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/P_1_PRESIDENTE_Y_PRESIDENTA_SUPLENTE.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=142">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=142">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Toma protesta María de la Cruz Robles Villarreal como Tesorera del  Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Tesorera.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/Tesorera.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=143">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=143">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN continúa trabajando por el Fortalecimiento Universitario</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;CONTENIDO_2022.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/CONTENIDO_2022.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=144">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=144">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Se instala Junta de Gobierno 2022-2026 del Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;2.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/2.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=145">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=145">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Celebra Patronato UAN Primera Sesión de Ordinaria 2022</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;1.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/1.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=146">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=146">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Fortalece la UAN el Posgrado de Calidad y la Cultura Científica con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;3.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/3.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=147">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=147">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Autoridades del Patronato y la UAN supervisan avances de la infraestructura que se ejecuta con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;RECORRIDO_AUTORIDADES.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/RECORRIDO_AUTORIDADES.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=148">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=148">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato y UAN trabajan conjuntamente por impulsar la ciencia y la investigación </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_7218.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_7218.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=149">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=149">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN: Impulsando la Formación Integral  de la Comunidad Estudiantil</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;ESTUDIANTES_DEPORTES.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/ESTUDIANTES_DEPORTES.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=150">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=150">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato y UAN trabajan conjuntamente por impulsar la ciencia y la investigación </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;POSGRADOUAN.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/POSGRADOUAN.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=151">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=151">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Atiende Junta de Gobierno del Patronato UAN las necesidades más apremiantes de la institución educativa</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;JG_2022.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/JG_2022.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=152">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=152">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Implementa el Gobernador de Nayarit estrategia para el cumplimiento del entero del 15% del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_8584.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8584.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=153">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=153">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Presidente del Patronato UAN iniciará diálogo con las recaudadoras para el cumplimiento del entero del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;ENTREVISTA_PRESIDENTE_PATRONATO.jpeg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/ENTREVISTA_PRESIDENTE_PATRONATO.jpeg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=154">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=154">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato y UAN impulsan la calidad de los espacios educativos de la UACBI</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;UACBI_MAY22.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/UACBI_MAY22.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=155">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=155">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Entregan espacios deportivos rehabilitados con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;UASI_CANCHA.jpeg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/UASI_CANCHA.jpeg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=156">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=156">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN iniciará construcción de nuevo edificio en la Preparatoria #1 de la UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PREPA1.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PREPA1.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=157">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=157">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;UAN, Gobierno y Patronato: por el rescate universitario de las y los nayaritas</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;GOBERNADOR_NAYARIT.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/GOBERNADOR_NAYARIT.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=159">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=159">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato y UAN trabajan conjuntamente por impulsar la cultura científica en la comunidad estudiantil</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PROGRAMADELFIN2022.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PROGRAMADELFIN2022.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=160">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=160">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN inicia la obra del nuevo edificio para la Preparatoria 1</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;INICIO_OBRA_PREPA_1.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/INICIO_OBRA_PREPA_1.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=161">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=161">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El Impuesto Especial: pieza clave en el rescate de las finanzas de la UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IEUAN.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IEUAN.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=162">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=162">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Celebra Patronato UAN VII sesión ordinaria</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_0351.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_0351.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=163">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=163">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN contribuye al Fortalecimiento de Bachillerato Universitario de la UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;ESTPREPA1.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/ESTPREPA1.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=164">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=164">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN continúa impulsando el incremento del patrimonio universitario</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PREPARATORIA1_JUN.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PREPARATORIA1_JUN.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=165">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=165">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El recurso del Impuesto Especial beneficia a todas y todos los nayaritas</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;EXPLANADARECTORIA2.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/EXPLANADARECTORIA2.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=166">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=166">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Generación científica en la UAN con apoyo del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;2022INVESTIGACION.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/2022INVESTIGACION.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=167">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=167">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Celebra la Junta de Gobierno del Patronato UAN la VIII Sesión Ordinaria</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Captura_de_pantalla_2022-08-29_a_la(s)_12.23.42.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/Captura_de_pantalla_2022-08-29_a_la(s)_12.23.42.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=168">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=168">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;La UAN promueve la movilidad académica con apoyo del Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PLAN_3_FOTOS_LINEA_BLANCA_(1).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLAN_3_FOTOS_LINEA_BLANCA_(1).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=169">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=169">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;La UAN impulsa la calidad de la investigación científica con el apoyo del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_7944.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_7944.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=170">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=170">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;La UAN impulsa la difusión científica con el apoyo del Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_1441.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_1441.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=171">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=171">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Realiza Patronato UAN la IX Sesión Ordinaria de la Junta de Gobierno</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_8237.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8237.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=172">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=172">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN refrenda su compromiso con el fortalecimiento del patrimonio universitario</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_8202.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8202.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=173">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=173">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Con recurso del Impuesto Especial: la UAN fortalece las capacidades educativas de la comunidad docente universitaria  </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;BECAS_DOCENTES_2022.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/BECAS_DOCENTES_2022.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=174">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=174">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN contribuye al fortalecimiento del Bachillerato Universitario</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_8118.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8118.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=175">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=175">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN es pieza fundamental para Máxima Casa de Estudios de Nayarit</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;ANERVO_OCT22.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/ANERVO_OCT22.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=176">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=176">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN impulsa el mantenimiento de la infraestructura universitaria</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;EXPLANADA_UAN_OCTUBRE.jpeg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/EXPLANADA_UAN_OCTUBRE.jpeg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=177">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=177">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN celebra la X Sesión Ordinaria de la Junta de Gobierno</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;SO-O1_web.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/SO-O1_web.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=178">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=178">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Con apoyo del Patronato UAN la Universidad atenderá las zonas afectadas por el paso del huracán Roslyn</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;WhatsApp_Image_2022-10-31_at_9.39.18_AM.jpeg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/WhatsApp_Image_2022-10-31_at_9.39.18_AM.jpeg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=179">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=179">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Impulsa la UAN la Formación Integral con Apoyo del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;ACT_ACADEMICAS.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/ACT_ACADEMICAS.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=180">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=180">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Se inaugura Congreso de Ciencia, Tecnología e Innovación Nayarit 2022</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_8519.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8519.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=181">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=181">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;La UAN da inicio al XXIII Encuentro Atlético Universitario</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_9260.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_9260.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=182">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=182">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;La Junta de Gobierno del Patronato UAN celebró la XI Sesión Ordinaria</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_9325.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_9325.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=183">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=183">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Con recurso del Patronato UAN: la UAN impulsa el deporte en Nayarit</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_9115.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_9115.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=184">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=184">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Autoridades del Patronato y la UAN entregan equipamiento e insumos adquiridos con recurso del Impuesto Especial </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_9509.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_9509.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=185">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=185">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Posgrado de calidad con apoyo del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;POSGRADO_2022.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/POSGRADO_2022.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=186">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=186">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Celebra Junta de Gobierno del Patronato UAN la última  Sesión Ordinaria del 2022</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;SOD-2.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/SOD-2.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=187">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=187">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Fortalecimiento del patrimonio UAN con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;OBRAPUBLICA-2022.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/OBRAPUBLICA-2022.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=188">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=188">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Realizan Primera Sesión Ordinaria de la Junta de Gobierno del  Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_9571.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_9571.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=189">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=189">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN prevé una inversión de 120 millones de pesos para 2023</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;EMBLEMA.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/EMBLEMA.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=190">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=190">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Fortalecimiento de la investigación científica en la UAN con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PLAN_3_FOTOS_LINEA_BLANCA_(2).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLAN_3_FOTOS_LINEA_BLANCA_(2).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=191">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=191">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Presidente del Patronato UAN rinde su Primer Informe de Actividades</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PI226.jpeg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PI226.jpeg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=192">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=192">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Autoridades Universitarias y del Patronato UAN entregan uniformes y material deportivo</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_0099.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_0099.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=193">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=193">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Exhorta titular del Patronato UAN a los Ayuntamientos deudores a enterar el 15% del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;EFEMERIDES.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/EFEMERIDES.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=194">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=194">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Nueva infraestructura de Norte a Sur en la UAN</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_0590.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_0590.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=195">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=195">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN contribuye al fortalecimiento del Bachillerato Universitario</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;BACHILLERATP-BARDADOS.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/BACHILLERATP-BARDADOS.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=196">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=196">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Celebra el Patronato UAN la II Sesión Ordinaria de la Junta de Gobierno</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_8075.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8075.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=197">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=197">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Cuenta Pública 2022</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;CP.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/CP.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=198">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=198">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Presenta Patronato UAN denuncias contra Ayuntamientos deudores del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;amatlan-nayarit.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/amatlan-nayarit.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=199">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=199">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Anuncia Patronato UAN el inicio de nueve obras para la  Universidad Autónoma de Nayarit</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_0712.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_0712.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=200">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=200">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN realizará rehabilitación de la Casa del Estudiante</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_8183.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8183.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=201">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=201">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Entregan equipamiento y nuevos espacios en la UACBI</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;UACBI.jpeg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/UACBI.jpeg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=202">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=202">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Con el Impuesto Especial: la UAN impulsa las vocaciones científicas en la comunidad estudiantil</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;ciencia2023.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/ciencia2023.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=203">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=203">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Celebra Patronato UAN III Sesión Ordinaria </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_8383.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8383.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=204">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=204">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Con recurso del Patronato UAN: la UAN fortalece la infraestructura deportiva</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;DEPORTE-OLIMPICA.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/DEPORTE-OLIMPICA.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=205">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=205">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El Impuesto Especial fortalece a la máxima casa de estudios  de las y los nayaritas</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;14.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/14.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=206">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=206">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Se efectuó la IV Sesión Ordinaria del Patronato UAN</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_9233.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_9233.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=207">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=207">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Fortalece la UAN su infraestructura con el Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;mantenimiento_abril.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/mantenimiento_abril.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=208">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=208">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Patronato UAN iniciará procesos legales contra Ayuntamientos omisos en el entero del 15% del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PLAN_3_FOTOS_LINEA_BLANCA.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLAN_3_FOTOS_LINEA_BLANCA.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=209">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=209">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN concluye nueva infraestructura en la  Preparatoria no. 2 y no. 11 de la UAN</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;WhatsApp_Image_2023-05-12_at_12.07.37_PM_(1).jpeg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/WhatsApp_Image_2023-05-12_at_12.07.37_PM_(1).jpeg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=210">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=210">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Inicia la UAN la entrega de la Beca Institucional</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_9356.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_9356.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=211">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=211">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Con apoyo del Patronato: la UAN impulsa la capacitación del personal universitario</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;CAPACITACION.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/CAPACITACION.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=212">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=212">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Inauguran Festival Universitario Gran Nayar 2023</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_9439.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_9439.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=213">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=213">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Junta de Gobierno del Patronato UAN efectuó la V Sesión Ordinaria de 2023</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_0064.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_0064.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=214">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=214">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Recibe LANIIA acreditación por parte de la Entidad Mexicana de Acreditación</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_0263.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_0263.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=215">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=215">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Presidente del Patronato UAN visita las instalaciones del CENITT</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_0509.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_0509.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=216">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=216">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Abanderamiento y entrega de becas del Programa Delfín en su edición 2023</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_0571.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_0571.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=217">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=217">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Con apoyo del Patronato: la UAN impulsa el deporte en Nayarit</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;DEPORTEUNIFORMES.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/DEPORTEUNIFORMES.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=218">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=218">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Inauguran el Verano de la Investigación del Programa Explora 2023</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_1063.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_1063.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=219">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=219">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Patronato UAN impulsa el fortalecimiento de la infraestructura universitaria</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_6229.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_6229.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=220">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=220">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Impulsa la UAN las vocaciones científicas con el Impuesto Especial </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PROGRAMAS_INVESTIGACION.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PROGRAMAS_INVESTIGACION.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=221">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=221">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Con recurso del Impuesto Especial: Impulsa la UAN las Habilidades Científicas de la Comunidad Docente</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;HABILIDADESCIENTIFICAS.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/HABILIDADESCIENTIFICAS.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=222">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=222">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN impulsa el incremento del patrimonio universitario</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;MURALCOMERCIO.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/MURALCOMERCIO.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=223">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=223">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;La Junta de Gobierno del Patronato UAN celebró la VI Sesión Ordinaria</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_2322.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_2322.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=224">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=224">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Culmina Patronato UAN obra en la Escuela Nacional de Ingeniería Pesquera</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;WhatsApp_Image_2023-06-29_at_11.15.02_AM.jpeg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/WhatsApp_Image_2023-06-29_at_11.15.02_AM.jpeg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=225">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=225">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN da inicio a la rehabilitación de la  infraestructura en la UACYA</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;6.jpeg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/6.jpeg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=226">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=226">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Optimizando recursos: El Patronato UAN invertirá en la rehabilitación de los paneles solares en la Unidad Académica del Norte</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_2402.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_2402.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=227">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=227">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Inversión histórica: Patronato UAN invierte más de 70 millones  de pesos en el primer semestre del 2023</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;EXPLANADA.jpg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/EXPLANADA.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=228">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=228">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Con apoyo del Impuesto Especial: Impulsa la UAN la asistencia a congresos académicos</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;PLAN_1-EFEM_(1).png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLAN_1-EFEM_(1).png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=230">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=230">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El Impuesto Especial fortalece significativamente  a la máxima casa de estudios de las y los nayaritas</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;PLAN_1-EFEM.png</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/PLAN_1-EFEM.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=231">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=231">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;La UAN dentro de las 50 mejores Universidades de México</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Captura_de_pantalla_2023-08-03_a_la(s)_14.00.22.png</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/Captura_de_pantalla_2023-08-03_a_la(s)_14.00.22.png" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=232">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=232">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;CENITT UAN: Investigación, Desarrollo e Innovación en Nayarit</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_8366.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8366.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=233">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=233">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Titular del Patronato UAN insta a las recaudadoras a cumplir con el entero del 15% del Impuesto Especial</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Insta_titular_a_cumplir.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/Insta_titular_a_cumplir.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=234">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=234">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;El Patronato UAN continúa impulsando el  mejoramiento de la infraestructura universitaria</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;WhatsApp_Image_2023-08-11_at_10.58.41_AM_(1).jpeg</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/WhatsApp_Image_2023-08-11_at_10.58.41_AM_(1).jpeg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=235">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=235">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Fortaleciendo la UAN a través de la Ciencia: con el Impuesto Especial se  impulsa la investigación universitaria</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_0483.jpg</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_0483.jpg" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=236">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=236">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Bienestar Maternal en la UAN: el Lactario Universitario será una realidad</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_8407.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8407.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=237">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=237">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Inicia el Congreso Explora 2023</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_8759.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_8759.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=238">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=238">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Junta de Gobierno del Patronato UAN celebró la Octava Sesión Ordinaria</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_9315.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_9315.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=239">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=239">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;Inauguran el XXVIII Congreso Internacional del Programa Delfín:  Celebrando la Investigación y la Innovación Científica</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0">
                        <font face="Arial" size="2">&nbsp;IMG_9509.JPG</font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_9509.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=240">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#F0F0F0" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=240">Borrar</a>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;Culminación de los Veranos Científicos en la UAN: Fomento de la Investigación y la Excelencia Educativa</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE">
                        <font face="Arial" size="2">&nbsp;IMG_9684.JPG</font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="../imagenes/IMG_9684.JPG" target="_blank">Ver Imagen</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="modnoticia.php?id=241">Modificar</a>
                        </font>
                    </td>
                    <td height="5" bgcolor="#DEDEBE" align="center">
                        <font face="Arial" size="2">
                            &nbsp;<a href="movadmin.php?movi=Borranoti&id=241">Borrar</a>
                        </font>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
