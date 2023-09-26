<?php
require_once('admin/db_config.php');

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

// Consulta SQL para obtener los datos de la tabla de doctos_numeral
$sql_doctos = "SELECT iddocto_numeral, archivo, numerales FROM doctos_numeral";
$result_doctos = $conn->query($sql_doctos);

// Crear un array asociativo para almacenar los enlaces por numeral
$enlaces_por_numeral = array();

if ($result_doctos->num_rows > 0) {
    while ($row_doctos = $result_doctos->fetch_assoc()) {
        $iddocto_numeral = $row_doctos["iddocto_numeral"];
        $archivo = $row_doctos["archivo"];
        $numerales = $row_doctos["numerales"];

        // Crear un enlace para cada documento
        $enlace = '<a href=" admin/carpeta_destino/' . $archivo . '" target="_blank">' . $archivo . '</a>';

        // Agregar el enlace al array asociativo usando el campo numerales como clave
        if (!isset($enlaces_por_numeral[$numerales])) {
            $enlaces_por_numeral[$numerales] = array();
        }
        $enlaces_por_numeral[$numerales][] = $enlace;
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patronato - UAN</title>
    <style>
        /* Estilos para el menú y modal */
        .menu {
            list-style-type: none;
            padding-left: 0;
        }

        .menu-item {
            cursor: pointer;
            padding: 5px;
            background-color: #f0f0f0;
            margin-bottom: 5px;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            
        }
    

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            margin-left: 150px;
	        margin-right: 150px;
        }
        
    </style>
     <script>
        // Función para abrir el modal y mostrar el contenido
        function openModal(numeral) {
            var modal = document.getElementById("myModal");
            var modalContent = document.getElementById("modalContent");
            
            // Obtener el contenido del submenu correspondiente al numeral
            var submenuContent = document.getElementById("submenu-" + numeral).innerHTML;
            modalContent.innerHTML = submenuContent;
            
            modal.style.display = "block";
        }

        // Función para cerrar el modal
        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>
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
                <h3 class="futura-titulo"
                style="color: white; margin-top: 3px; margin-bottom: 6px; margin-left: 150px; margin-right: 3px;">LEY 33</h3>
            </div>
            <br>
            <div class="padre">
                <div class="hijo" style="padding: 15px;">
                    <div class="div-relative">
                        <div class="row">
                            <div class="col-sm-6" style="padding-left: 40px; padding-right: 40px;">

                            <div class="justificado">
                                
                            </div>
                                </div>
                                
                                

                            </div>
                            <ul class="menu">
                                <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $idnumeral = $row["idnumeral"];
                                        $numero = $row["numero"];
                                        $titulo = $row["titulo"];
                                        echo "<li class='menu-item' onclick='openModal($idnumeral)'>$numero $titulo</li>";

                                        if (isset($enlaces_por_numeral[$idnumeral])) {
                                            echo "<ul id='submenu-$idnumeral' style='display: none;'>";
                                            foreach ($enlaces_por_numeral[$idnumeral] as $enlace) {
                                                echo "<li>$enlace</li>";
                                            }
                                            echo "</ul>";
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>

</div>


</div>
</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal" onclick="closeModal()">
        <div id="modalContent" class="modal-content">
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