<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Recaudacion</title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="estiloAdmin.css">
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

<script type="text/javascript">
    function addTrim(){
        var nombre = document.mTrimestre.nombre.value;    
        if(nombre==""){
            alert("No introdujo Nombre de trimestre");
            document.mTrimestre.nombre.focus();
            return false;
        }
        var url = "addTrimestre.php?type=0";
        $.ajax({
            type: "POST",
            url: url,
            data: $("#mTrimestre").serialize(),
            success: function(data) {
                 $('#tbltrim').html(data);
                 swal("Trimestre Guardado", "", "success");
                 document.mTrimestre.nombre.value="";
            }
        });
    }
</script>

<script type="text/javascript">
    function modTrim(idx){
        var nomx = document.getElementById("nombreX");
        alert(nomx)
        return false;
        var nombre = document.mTrimestre.nombre.value;            
        var url = "addTrimestre.php?type=1&id="+idx+"&nombre="+nomx;
        $.ajax({
            type: "POST",
            url: url,
            data: $("#mTrimestreX").serialize(),
            success: function(data) {
                alert(data)
                 $('#tbltrim').html(data);
                 swal("Trimestre Modificado", "", "success");
            }
        });
    }
</script>
<script>
    function eliminar(idx){
    	var opcion = confirm("Desea Eliminar el registro");
       if (opcion == true) {
        var id=idx;
        
        window.location.href = "addTrimestre.php?type=3&id="+id;
    }
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
				<li><a href="recaudacion.php" class="activa">Recaudación</a></li>
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


<div class="container">
    <h1 class="page-header">TRIMESTRES</h1 class="page-header">
        <div class="col col-lg-12 col-md-8 col-sm-12 col-xs-12">
            <div class="form-group" align="right">
            <a href="agregar_trimestre.php" class="btn btn-primary">Agregar Trimestre</a>
            </div>
        </div>

        <?php
          require_once('db_config.php'); // Incluye el archivo con las definiciones de las constantes y la configuración de la base de datos

          echo '
          <div class="row">
              <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <table id="tbltrim" class="table table-striped table-bordered">
                      <thead>
                      <tr>
                          <th>Nombre</th>
                          <th>Año</th>
                          <th>Tipo</th>
                          <th>Trimestre</th>
                          <th>Operaciones</th>
                      </tr>
                      </thead>
                      <tbody>';

          try {
              $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT); // Utiliza las constantes definidas en db_config.php
              mysqli_set_charset($conn, "utf8mb4");

              // Verifica la conexión
              if ($conn->connect_error) {
                  die("Error de conexión: " . $conn->connect_error);
              }

              $query = "SELECT trimestres.idtrimestre, trimestres.nombre, trimestres.anio, tipo.tipo AS tipo_nombre, tipo_trimestre.tipo as trimestre_tipo
                        FROM trimestres 
                        JOIN tipo ON trimestres.tipo = tipo.idtipo
                        JOIN tipo_trimestre ON trimestres.tipo_trimestre = tipo_trimestre.idtipo_trimestre";
              $result = $conn->query($query);

              while ($row = $result->fetch_assoc()) {
                  echo '
                      <tr>
                          <td>' . $row['nombre'] . '</td>
                          <td>' . $row['anio'] . '</td>
                          <td>' . $row['tipo_nombre'] . '</td>
                          <td>' . $row['trimestre_tipo'] . '</td>
                          <td>
                              <button class="btn btn-primary modify-btn" data-idtrimestre="' . $row['idtrimestre'] . '">Modificar</button>
                              <button class="btn btn-danger delete-btn" data-idtrimestre="' . $row['idtrimestre'] . '">Eliminar</button>
                          </td>
                      </tr>';
              }

              $result->close();
              $conn->close();
          } catch (Exception $e) {
              echo "Error: " . $e->getMessage();
          }

          echo '
                      </tbody>
                  </table>
              </div>
          </div>';
          ?>




    <br>
    <br>
    <br>
    <div class="modal" id="addTrimestreModal" style="margin-top: 100px;">
    <form method="POST" name="mTrimestre" id="mTrimestre" enctype="multipart/form-data">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Trimestre</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <label>Nombre del Trimestre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" autofocus>
                    <br />
                    <label>Año</label>
                    <input type="text" class="form-control" name="anio" id="anio">
                    <br />
                    <select id="tipo" name="tipo" class="form-control">
                        <option value="avgf">Avance de Gestión Financiera</option>
                        <option value="cp">Cuenta Pública</option>
                        <option value="iaa">Informe Anual de Actividades</option>
                        <option value="sevac">SEVAC</option>
                        <option value="paa">Programa Anual de Archivo</option>
                    </select>
                    <br />
                    <select id="trimestre" name="trimestre" class="form-control">
                        <option value="0">Anual</option>
                        <option value="1">Primer Trimestre</option>
                        <option value="2">Segundo Trimestre</option>
                        <option value="3">Tercer Trimestre</option>
                        <option value="4">Cuarto Trimestre</option>
                    </select>
                    <br />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="addTrim()">Agregar</button>
                    <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </form>
</div>



</div>
<script>
    // Obtén todos los botones de modificar y agregar un manejador de clic
    const modifyButtons = document.querySelectorAll('.modify-btn');
    modifyButtons.forEach((button) => {
        button.addEventListener('click', (event) => {
            const idtrimestre = event.target.getAttribute('data-idtrimestre');
            // Redirecciona a la página que maneja la modificación, pasando el idtrimestre
            window.location.href = `modificar_trimestre.php?idtrimestre=${idtrimestre}`;
        });
    });

    // Obtén todos los botones de eliminar y agregar un manejador de clic
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach((button) => {
        button.addEventListener('click', (event) => {
            const idtrimestre = event.target.getAttribute('data-idtrimestre');
            // Redirecciona a la página que maneja la eliminación, pasando el idtrimestre
            window.location.href = `eliminar_trimestre.php?idtrimestre=${idtrimestre}`;
        });
    });
</script>


</body>

</html>
