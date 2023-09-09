<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patronato - UAN</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/styles.css">
    <link href="css/estilos.css" rel="stylesheet" media="screen">
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
                        <li><a href="recaudacion.php">AVANCE DE GESTION FINANCIERA</a></li>
                        <li><a href="sevac.php">SEVAC</a></li>
                        <li><a href="cuenta_publica.php">CUENTA PUBLICA</a></li>
                        <li><a href="informe_anual.php">INFORME ANUAL DE ACTIVIDADES</a></li>
                        <li><a href="programa_anual.php">PROGRAMA ANUAL DE ARCHIVO</a></li>
                    </ul>
                </li>
                <li><a href="infraestructura.php">INFRAESTRUCTURA</a></li>
                <li><a href="#">TRANSAPRENCIA</a>
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
            </ul>
        </nav>
    </header>
    <div class="padre">
        <div class="hijo" style="padding: 15px;">
          <div class="div-relative" style="max-width: 1300px;">

        <div class="padre2 div-relative" style="padding: 0px; background-color: #00539F;">
            <div class="trapecio-derecha" style="padding: 0px;"></div>
            <div class="trapecio-izquierda" style="padding: 0px;"></div>
            <h3 class="futura-titulo" style="color: white; margin-top: 3px; margin-bottom: 6px; margin-left: 150px; margin-right: 3px;">
              Noticia
            </h3>
        </div>
            
          <br>
          <?php
// Conectar a la base de datos usando tu archivo de configuración
require_once('admin/db_config.php');

// Inicializa las variables
$titulo = "";
$nota = "";

// Recibe el parámetro "id" de la noticia seleccionada
if (isset($_GET['id'])) {
    $idnoticia = $_GET['id'];

    // Consulta SQL para obtener la noticia específica por su idnoticia
    $sql = "SELECT imagen, titulo, nota_larga FROM noticias WHERE idnoticia = $idnoticia";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titulo = $row["titulo"];
        $nota_larga = $row["nota_larga"];
    } else {
        echo "No se encontró la noticia.";
    }
} else {
    echo "No se proporcionó un ID de noticia válido.";
}

// Cierra la conexión a la base de datos

?>

<!-- Ahora, puedes mostrar la información de la noticia en tu HTML de manera más organizada -->

<div class="padre">
    <div class="hijo" style="padding: 15px;">
        <div class="div-relative">
            <div class="row">
                <div class="col-sm-6">
                    <div class="padre" style="padding: 8px;">
                    <div class="hijo div-relative">
                    <?php
                                require_once('admin/db_config.php');

                                // Inicializa las variables
                                $imagen = "";
                                
                                // Recibe el parámetro "id" de la noticia seleccionada
                                if (isset($_GET['id'])) {
                                    $idnoticia = $_GET['id'];
                                
                                    // Consulta SQL para obtener la noticia específica por su idnoticia
                                    $sql = "SELECT imagen FROM noticias WHERE idnoticia = $idnoticia";
                                    $result = $conn->query($sql);
                                
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        $imagen = $row["imagen"];
                                        
                                    } else {
                                        echo "No se encontró la noticia.";
                                    }
                                } else {
                                    echo "No se proporcionó un ID de noticia válido.";
                                }
                                echo '<img src="' . $imagen . '" alt="Descripción de la imagen" class="img-fluid img-new" style="padding: 0; right: 0; bottom: 0;">';

                                
                                
                                // Cierra la conexión a la base de datos
                                $conn->close();
                                
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" style="padding-left: 40px; padding-right: 40px;">
                    <div class="justificado">
                        <h3>
                            <div class="div-relative">
                                <div class="linea-verde-2-pequeñas"></div>
                                <div>
                                    <?php echo $titulo; // Muestra el título de la noticia ?>
                                </div>
                            </div>
                        </h3>
                    </div>
                    <div class="justificado">
                        <p class="futura-descripcion">
                            <?php echo $nota_larga; // Muestra la nota de la noticia ?>
                        </p>
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
            <a href="#">Enlace 1</a>
            <a href="#">Enlace 2</a>
            <a href="#">Enlace 3</a>
        </div>

    </footer>

    <div class="privacy-links">
        <a href="uploads/aviso_privacidad/AVISO_DE_PRIVACIDAD_INTEGRAL.pdf">Aviso de Privacidad</a>
        <a href="uploads/aviso_privacidad/AVISO_DE_PRIVACIDAD_SIMPLIFICADO.pdf">Aviso de Privacidad Simplificado</a>
    </div>
          
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
        
            