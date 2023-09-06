<!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <title>Noticias</title>

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="estiloAdmin.css">
        <link rel="stylesheet" href="normalize.css">

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="../assets/css/responsive.dataTables.min.css">
        <link rel="stylesheet" href="../assets/css/sweetalert.css">
        <link rel="stylesheet" href="normalize.css">

        <script type="text/javascript" src="../assets/js/plugins/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/jquery.form.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/jquery.validate.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/sweetalert.min.js"></script>
        <script type="text/javascript" src="../assets/tinymce/tinymce.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/dataTables.responsive.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/additional-methods.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/js/formatos.js"></script>


    </head>

    <body >

    <div id="modalNewFile" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h3>Nuevo Archivo<small> Recaudación municipal</small></h3>
                </div>
                <div class="modal-body">
                    <form id="frmNewFile" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="title">Nombre</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-file"></i>
                                </span>
                                <input class="form-control" id="nombre" name="nombre"
                                       placeholder="Nombre del documento">

                            </div>
                            <br>
                            <label class="control-label" for="file2">Seleccione Archivo</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-file"></i>
                                </span>
                                <input type="file" class="btn btn-effect-ripple btn-default" id="file" name="file">
                            </div>
                            <div align="center">
                                <div id="loader-icon" style="display:none;"><br><img
                                            src="../assets/images/LoaderIcon.gif"/></div>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button id="btnNewFile" type="button" class="btn btn-sm btn-primary ">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modalChangeFile" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h3>Cambiar Archivo</h3>
                </div>
                <div class="modal-body">
                    <form id="frmChangeFile" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="file2">Seleccione Archivo</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-file"></i>
                                </span>
                                <input type="file" class="btn btn-effect-ripple btn-default" id="imagen2" name="imagen">
                            </div>
                            <div align="center">
                                <div id="loader-icon" style="display:none;"><br><img
                                            src="../assets/images/LoaderIcon.gif"/></div>
                            </div>
                            <input type="hidden" id="id_patronato" name="id_patronato">
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button id="btnChangeFile2" type="button" class="btn btn-sm btn-primary ">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de modal de cambiar foto-->



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
				<li><a href="formatos.php" class="activa">Formatos</a></li>
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


                    <div align="center" class="tbl">
                <div class="opciones"></div>
                <h2>PADRÓN DE PROVEEDORES</h2>

                <br>
                <table border="1" width="80%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
                    <tr>

                        <td width="22%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Sección</font></b>
                        </td>

                        <td width="20%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Archivo</font></b>
                        </td>

                        <td width="50%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Titulo</font></b>
                        </td>
                        <td width="20%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF"></font></b>
                        </td>
                    </tr>

                    
      <tr>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;PADRÓN DE PROVEEDORES</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;PADRON_DE_PROVEEDORES_2023-02.pdf</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;DESCARGA PADRÓN DE PROVEEDORES</font></td>
      <td height="5" bgcolor="#dcf4b2" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=3">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;PADRÓN DE PROVEEDORES</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;<font size="5">Formato de inscripción al padrón de proveedores&nbsp;</font></font></td>
      <td height="5" bgcolor="#FFFFFF" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=13">Modificar</a></font></td>

   

    </tr>
                </table>

                <br>
                <br>
                <h2>PADRÓN DE CONTRATISTAS</h2>

                <br>

                <table border="1" width="80%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
                    <tr>

                        <td width="22%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Sección</font></b>
                        </td>

                        <td width="20%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Archivo</font></b>
                        </td>

                        <td width="50%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Titulo</font></b>
                        </td>
                        <td width="20%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF"></font></b>
                        </td>
                    </tr>

                    
      <tr>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;PADRÓN DE CONTRATISTAS</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;1_FORMATO_001_Y_007_SOLICITUD.pdf</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;SOLICITUD POR ESCRITO Y BAJO PROTESTA</font></td>
      <td height="5" bgcolor="#dcf4b2" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=4">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;PADRÓN DE CONTRATISTAS</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;2_FORMATO_002_Y_003_FICHA_DE_REGISTRO_Y_CATALOGO_DE_MAQUINARIA.pdf</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;FICHA DE REGISTRO Y CATÁLOGO DE MAQUINARIA</font></td>
      <td height="5" bgcolor="#FFFFFF" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=5">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;PADRÓN DE CONTRATISTAS</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;3_FORMATO_004_Y_005_DECLARACION_ART_31_Y_CATALOGO_DE_ESPECIALIDADES.pdf</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;DECLARACIÓN ART 31 Y CATÁLOGO DE ESPECIALIDADES</font></td>
      <td height="5" bgcolor="#dcf4b2" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=6">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;PADRÓN DE CONTRATISTAS</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;Inscripcion_Padron_de_Contratistas_2023.pdf</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;REGISTRO DE CONTRATISTAS 2023</font></td>
      <td height="5" bgcolor="#FFFFFF" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=7">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;PADRÓN DE CONTRATISTAS</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;REQUISITOS_REFRENDO_PADRON_DE_CONTRATISTAS_PATRONATO_2023.pdf</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;REGISTRO REFRENDO PADRÓN DE CONTRATISTAS 2023</font></td>
      <td height="5" bgcolor="#dcf4b2" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=8">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;PADRÓN DE CONTRATISTAS</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;8._SOLO_REFRENDO_2023.pdf</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;SOLO EN REFRENDO</font></td>
      <td height="5" bgcolor="#FFFFFF" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=9">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;PADRÓN DE CONTRATISTAS</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;Formatos de inscripción al padrón de contratistas</font></td>
      <td height="5" bgcolor="#dcf4b2" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=14">Modificar</a></font></td>

   

    </tr>
                </table>


                <br>
                <br>
                <h2>CORRECCIÓN DE DATOS</h2>

                <br>

                <table border="1" width="70%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
                    <tr>

                        <td width="22%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Sección</font></b>
                        </td>
                        <td width="50%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Contenido</font></b>
                        </td>

                        <td width="20%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF"></font></b>
                        </td>
                    </tr>

                    
      <tr>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;CORRECCIÓN DE DATOS</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;lub No. 98&nbsp;</div><div>Col. Versalles</div><div>Tepic, Nayarit</di...</font></td>
      <td height="5" bgcolor="#dcf4b2" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=11">Modificar</a></font></td>

   

    </tr>
                </table>
        
                <br>
                <br>
                <h2>INFORMES</h2>

                <br>

                <table border="1" width="70%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#808080">
                    <tr>

                        <td width="22%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Sección</font></b>
                        </td>
                        <td width="25%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Contenido</font></b>
                        </td>
                        <td width="25%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Archivo</font></b>
                        </td>
                        <td width="25%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF">Titulo</font></b>
                        </td>
        
                        <td width="20%" align="center" bgcolor="#1356A4"><b>
                         <font face="Arial" size="2" color="#FFFFFF"></font></b>
                        </td>
                    </tr>

                    
      <tr>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;RECAUDACIÓN MUNICIPAL</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;iv>El Patronato UAN pone a disposición de la ciudadanía la siguiente...</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;</font></td>
      <td height="5" bgcolor="#dcf4b2" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=12">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;RECAUDACIÓN MUNICIPAL</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;...</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;PRIMER_TRIMESTRE.pdf</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;Primer trimestre</font></td>
      <td height="5" bgcolor="#FFFFFF" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=17">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;RECAUDACIÓN MUNICIPAL</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;...</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;SEGUNDO_TRIMESTRE.pdf</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;Segundo Trimestre</font></td>
      <td height="5" bgcolor="#dcf4b2" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=18">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;RECAUDACIÓN MUNICIPAL</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;...</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;TERCER_TRIMESTRE.pdf</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;Tercer trimestre</font></td>
      <td height="5" bgcolor="#FFFFFF" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=19">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;RECAUDACIÓN MUNICIPAL</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;...</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;A.1.1._Plan_de_Cuentas.pdf</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;SEVAC Cuarto Trimestre 2018</font></td>
      <td height="5" bgcolor="#dcf4b2" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=20">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;RECAUDACIÓN MUNICIPAL</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;...</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;A.1.1._Plan_de_Cuentas.pdf</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;</font></td>
      <td height="5" bgcolor="#FFFFFF" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=21">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;RECAUDACIÓN MUNICIPAL</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;...</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;7._REQUISITOS_REFRENDO_PADRON_DE_CONTRATISTAS_PATRONATO_2023.pdf</font></td>
      <td height="5" bgcolor="#dcf4b2"><font face="Arial" size="2">&nbsp;REQUISITOS REFRENDO</font></td>
      <td height="5" bgcolor="#dcf4b2" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=22">Modificar</a></font></td>

   

    </tr>
      <tr>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;RECAUDACIÓN MUNICIPAL</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;...</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;8._SOLO_REFRENDO_2023.pdf</font></td>
      <td height="5" bgcolor="#FFFFFF"><font face="Arial" size="2">&nbsp;SOLO REFRENDO</font></td>
      <td height="5" bgcolor="#FFFFFF" align="center"><font face="Arial" size="2">&nbsp;<a href="modformato.php?id=23">Modificar</a></font></td>

   

    </tr>
                </table>


               <br> 
               <br>
                <button id="btnArchivo" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Agregar nuevo archivo</button>
               <br> 
               <br> 
               <br> 
               <br>


            </div>

    </body>

    </html>
