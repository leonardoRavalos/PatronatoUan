<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>PatronatoUAN</title>
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

    <div class="banner-carousel">
        <div class="banner-slide" style="background-image: url('./uploads/cover/DELFIN_2023.jpg');">
            <button class="carousel-button" id="prevSlide">Anterior</button>
            <button class="carousel-button" id="nextSlide">Siguiente</button>
        </div>
        <div class="banner-slide" style="background-image: url('./uploads/cover/SEO.png');">
            <button class="carousel-button" id="prevSlide">Anterior</button>
            <button class="carousel-button" id="nextSlide">Siguiente</button>
        </div>
        <div class="banner-slide" style="background-image: url('./uploads/cover/IMG_8596.png');">
            <button class="carousel-button" id="prevSlide">Anterior</button>
            <button class="carousel-button" id="nextSlide">Siguiente</button>
        </div>
        <div class="banner-slide" style="background-image: url('./uploads/cover/IMG_0464.png');">
            <button class="carousel-button" id="prevSlide">Anterior</button>
            <button class="carousel-button" id="nextSlide">Siguiente</button>
        </div>
        <div class="banner-slide" style="background-image: url('./uploads/cover/3.jpg');">
            <button class="carousel-button" id="prevSlide">Anterior</button>
            <button class="carousel-button" id="nextSlide">Siguiente</button>
        </div>
    </div>

    <div class="centered-text">
        <h2><span class="gray-text">Patronato</span><span class="green-text">Uan</span></h2>
        <p class="gray-text">Somos fortaleza institucional para la UAN</p>
    </div>

    <section class="news-section">
        <h2>Noticias</h2>
        <div class="news-cards-container">
            <?php
            // Conectar a la base de datos usando tu archivo de configuración
            require_once('admin/db_config.php');

            // Consultar la base de datos para obtener las primeras 3 noticias
            $sql = "SELECT idnoticia, titulo, nota, imagen FROM noticias LIMIT 3";
            $result = $conn->query($sql);

            // Recorrer los resultados y generar las tarjetas de noticias
            while ($row = $result->fetch_assoc()) {
                $idnoticia = $row['idnoticia'];
                $titulo = $row['titulo'];
                $nota = $row['nota'];
                $imagen = $row['imagen'];

                echo '<div class="news-card">';
                echo '<div class="padre" style="padding: 8px;">';
                echo '<div class="hijo img-thumbnail" style="padding: 8px; background-image: url(' . $imagen .'); background-size: cover; background-position: center; margin: 3px;">';
                echo '<img src="images/imagen_beta.png" alt="Texto representativo" class="img-fluid img-new">';
                echo '</div>';
                echo '</div>';
                echo '<h3>' . $titulo . '</h3>';
                echo '<p>' . $nota . '</p>';
                echo '<a href="nota.php?id=' . $row["idnoticia"] . '" class="card-link">Leer más</a>'; 
                echo '</div>';
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>
        </div>
        <script src="Scripts/carrusel.js"></script>
    </section>
    
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
    <script>
  // Obtenemos todas las diapositivas del carrusel
  var slides = document.querySelectorAll(".banner-slide");
  var currentSlide = 0;
  var interval = 3000; // Intervalo en milisegundos (3 segundos en este caso)

  function showSlide(index) {
    // Ocultamos todas las diapositivas
    for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    // Mostramos la diapositiva actual
    slides[index].style.display = "block";
  }

  function nextSlide() {
    currentSlide++;
    if (currentSlide >= slides.length) {
      currentSlide = 0;
    }
    showSlide(currentSlide);
  }

  function prevSlide() {
    currentSlide--;
    if (currentSlide < 0) {
      currentSlide = slides.length - 1;
    }
    showSlide(currentSlide);
  }

  // Mostrar la primera diapositiva al cargar la página
  showSlide(currentSlide);

  // Configurar el cambio automático de diapositivas
  setInterval(nextSlide, interval);
</script>
</body>
</html>
