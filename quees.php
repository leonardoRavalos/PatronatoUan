<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patronato - UAN</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/estilos.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <header>
        <nav>
            <img src="images/LOGO-01.png" alt="Logo">
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="#">EL PATRONATO</a>
                    <ul class="submenu">
                        <li><a href="quees.php">PATRONATO UAN</a></li>
                        <li><a href="quehace.php">FUNCIÓN</a></li>
                        <li><a href="integran.php">INTEGRANTES</a></li>
                        <li><a href="marcolegal.php">MARCO LEGAL</a></li>
                        <li><a href="historia.php">HISTORIA</a></li>
                        <li><a href="directorio.php">DIRECTORIO</a></li>
                        <li><a href="organigrama.php">ORGANIGRAMA</a></li>
                    </ul>
                </li>
                <li><a href="noticias.php">PRENSA</a></li>
                <li>
                    <a href="#">INFORMES</a>
                    <ul class="submenu">
                        <li><a href="manteniminento.php">AVANCE DE GESTION FINANCIERA</a></li>
                        <li><a href="manteniminento.php">SEVAC</a></li>
                        <li><a href="manteniminento.php">CUENTA PUBLICA</a></li>
                        <li><a href="manteniminento.php">INFORME ANUAL DE ACTIVIDADES</a></li>
                        <li><a href="manteniminento.php">PROGRAMA ANUAL DE ARCHIVO</a></li>
                    </ul>
                </li>
                <li><a href="infraestructura.php">INFRAESTRUCTURA</a></li>
                <li><a href="#">TRANSPARENCIA</a>
                    <ul class="submenu">
                        <li><a href="https://www.plataformadetransparencia.org.mx/">PLATAFORMA NACIONAL DE TRANSPARENCIA</a></li>
                        <li><a href="https://transparencia.nayarit.gob.mx/index.php?option=com_wrapper&view=wrapper&Itemid=495">PLATAFORMA ESTATAL DEL TRANSPARENCIA </a></li>
                    </ul>
                </li>
                <li><a href="#">OBRA PUBLICA</a>
                    <ul class="submenu">
                        <li><a href="proveedores.php">PADRÓN DE PROVEEDORES</a></li>
                        <li><a href="contratistas.php">PADRÓN DE CONTRATISTAS</a></li>
                        <li><a href="correccion.php">CORRECIÓN DE DATOS: </a></li>
                    </ul>
                </li>
                <li><a href="interes.php">LIGAS DE INTERES</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="padre">
        <div class="hijo" style="padding: 15px;">
          <div class="div-relative" style="max-width: 1300px;">

        <div class="padre2 div-relative" style="padding: 0px; background-color: #00539F;">
            <div class="trapecio-derecha" style="padding: 0px;"></div>
            <div class="trapecio-izquierda" style="padding: 0px;"></div>
            <h3 class="futura-titulo" style="color: white; margin-top: 3px; margin-bottom: 6px; margin-left: 150px; margin-right: 3px;">¿Qué es?</h3>
        </div>
          <br>
          <div class="padre">
              <div class="hijo" style="padding: 15px;">
                <div class="div-relative">
                    <div class="row">
                        <div class="col-sm-6">
                          <div class="padre" style="padding: 8px;">
                              <div class="hijo div-relative">
                                <?php
                                // Conectar a la base de datos usando tu archivo de configuración
                              require_once('admin/db_config.php');

                              // Consultar la base de datos para obtener el texto de que es
                              $sql = "SELECT foto_que FROM patronato";
                              $result = $conn->query($sql);

                              // Recorrer los resultados y generar las tarjetas de noticias
                              while ($row = $result->fetch_assoc()) {
                                  $foto_que = $row['foto_que'];
                                  
                                  $imagenURL = 'admin/' . $row["foto_que"];
                                  echo '<img src="' . $imagenURL . '" alt="Descripción de la imagen" class="img-fluid img-new" style="padding: 0; right: 0; bottom: 0;">';
                              }

                              // Cerrar la conexión a la base de datos
                              ?>
                              
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-6" style="padding-left: 40px; padding-right: 40px;">
                          <div class="justificado">
                              <h3 class="futura-titulo">
                                <div class="div-relative" style="text-align: left;">
                                  <div class="linea-verde-2-pequeñas"></div>
                                  <div class="linea-verde-1-larga"></div>
                                  <span class="negritas"> <span style="color: #00539F;">Es</span> un ente público y descentralizado</span> <span style="color: #00539F;">que actúa con autonomía técnica y</span> de gestión para el ejercicio de su función.
                                </div>
                              </h3>
                              </div>
                              <?php
                              require_once('admin/db_config.php');
                              // Consultar la base de datos para obtener el texto de que es
                              $sql = "SELECT que, foto_que FROM patronato";
                              $result = $conn->query($sql);

                              // Recorrer los resultados y generar las tarjetas de noticias
                              while ($row = $result->fetch_assoc()) {
                                  $que = $row['que'];
                                  $foto_que = $row['foto_que'];
                                  

                                echo '<p style="text-align: justify;"><span style="font-size: 12pt;">' . $que . '</span></p>';
                              }
                              
                              $conn->close();

                              ?>
                          
                              
                              </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>


        <footer>
        <div class="footer-section">
            <h3>Contacto</h3>
            <p class="contact-info">administracion@patronatouan.com</p>
            <p class="contact-info">Tel:   (311) 2 14 38 98</p>
        </div>
        <div class="footer-section">
            <h3>Dirección</h3>
            <p class="contact-info">Country Club No. 98 Col. Versalles.</p>
        </div>
        <div class="footer-section">
            <h3>Enlaces de Interés</h3>
            <a href="https://www.nayarit.gob.mx/">Gobierno de nayarit</a><br>
            <a href="https://www.uan.edu.mx/">Universidad Autonoma de Nayarit</a><br>
            <a href="https://www.facebook.com/FUNUAN.AC">Fundacion UAN</a><br>
        </div>

    </footer>

    <?php
            

            // Consultar la base de datos para obtener las primeras 3 noticias
            $sql = "SELECT nombre, archivo FROM aviso_privacidad";
            $result = $conn->query($sql);

            // Recorrer los resultados y generar las tarjetas de noticias
            while ($row = $result->fetch_assoc()) {
                $nombre = $row['nombre'];
                $archivo = $row['archivo'];
                
                $pdfURL = 'admin/carpeta_destino/' . $row['archivo'];

                echo '<div class="privacy-links">
                    <a href="'. $pdfURL .'">'. $nombre .'</a><br>
                </div>';

            }

            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>
      



  <!-- Librería jQuery requerida por los plugins de JavaScript -->
  <script src="https://code.jquery.com/jquery.js"></script>

  <!-- Todos los plugins JavaScript de Bootstrap (también puedes
       incluir archivos JavaScript individuales de los únicos
       plugins que utilices) -->
  <script src="js/bootstrap.min.js"></script>

  <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.5480507117063!2d-104.89567018442729!3d21.486242985752355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842736df471af73b%3A0x6635ee4b447cd432!2sPatronato+Uan!5e0!3m2!1sen!2smx!4v1529795878971"
  width="600"
  height="450"
  frameborder="0"
  style="border:0"
  allowfullscreen></iframe-->
  </body>
</html>