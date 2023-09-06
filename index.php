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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top barra"       style="background-image: url('images/LOGO-01.png'); background-position: left top; background-size: 300px;       background-repeat: no-repeat;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">MENU</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="width: 250px; height: 50px;">
            <!--img src="images/LOGO-01.png" class="logo"-->
          </a>
        </div>
        <div class="collapse navbar-collapse container-fluid" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active sobre" ><a class="borde-blanco" href="index.php">INICIO<span class="sr-only">(current)</span></a></li>
            <li class="nav-item dropdown sobre">
                <a href="#" class="nav-link dropdown-toggle borde-blanco" data-toggle="dropdown" role="button" aria-expanded="false">EL PATRONATO<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a class="nav-link" href="quees.php">¿QUÉ ES?</a></li>
                  <li><a class="nav-link" href="quehace.php">¿QUÉ HACE?</a></li>
                  <li><a class="nav-link" href="integran.php">¿QUIÉNES LO INTEGRAN?</a></li>
                  <li><a class="nav-link" href="historia.php">HISTORIA</a></li>
                  <li><a class="nav-link" href="marcolegal.php">MARCO LEGAL</a></li>
                </ul>
            </li>
            <!--li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li-->
            <li class="sobre"><a class="nav-link borde-blanco" href="noticias.php">NOTICIAS</a></li>
            <li class="sobre"><a class="nav-link borde-blanco" href="infraestructura.php" >INFRAESTRUCTURA</a></li>
            <li class="sobre"><a class="nav-link borde-blanco" href="recaudacion.php">INFORMES</a></li>
            <li class="nav-item dropdown sobre">
                <a href="#" class="nav-link dropdown-toggle borde-blanco" data-toggle="dropdown" role="button" aria-expanded="false">TRANSPARENCIA<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    
                  <li><a class="nav-link" href="https://transparencia.nayarit.gob.mx/index.php?option=com_wrapper&view=wrapper&Itemid=495">PLATAFORMA ESTATAL DE TRANSPARENCIA</a></li>
                  <li><a class="nav-link" href="https://www.plataformadetransparencia.org.mx/">PLATAFORMA NACIONAL DE TRANSPARENCIA</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown sobre">
                <a href="#" class="nav-link dropdown-toggle borde-blanco" data-toggle="dropdown" role="button" aria-expanded="false">FORMATOS<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    
                    <li><a class="nav-link" href="proveedores.php">PADRÓN DE PROVEEDORES</a></li>
                    <li><a class="nav-link" href="contratistas.php">PADRÓN DE CONTRATISTAS</a></li>
                    <li><a class="nav-link" href="correccion.php">CORRECCIÓN DE DATOS</a></li>
                </ul>
            </li>
            <li class="sobre"><a class="nav-link borde-blanco" href="interes.php" >LIGAS DE INTERÉS</a></li>
            <li class="sobre"><a class="nav-link borde-blanco" href="contacto.php">CONTACTO</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>

    <div class="padre div-relative crop img-sombra">
      <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%; height: 430px;">
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
        <div class="carousel-inner" style="width: 100%;  height: 100%;">
                            <div class="item active"
                     style="background-image: url('./uploads/cover/DELFIN_2023.jpg');
                             background-size: cover;
                             background-repeat: no-repeat;
                             background-position: bottom left;
                             width: 100%;
                             height: 100%;">
                    <img class="d-block w-100" src="./images/imagen_beta.png" style="width: 100%; height: 100%;">
                </div>

                            <div class="item"
                     style="background-image: url('./uploads/cover/SEO.png');
                             background-size: cover;
                             background-repeat: no-repeat;
                             background-position: bottom left;
                             width: 100%;
                             height: 100%;">
                    <img class="d-block w-100" src="./images/imagen_beta.png" style="width: 100%; height: 100%;">
                </div>

                            <div class="item"
                     style="background-image: url('./uploads/cover/IMG_8596.png');
                             background-size: cover;
                             background-repeat: no-repeat;
                             background-position: bottom left;
                             width: 100%;
                             height: 100%;">
                    <img class="d-block w-100" src="./images/imagen_beta.png" style="width: 100%; height: 100%;">
                </div>

                            <div class="item"
                     style="background-image: url('./uploads/cover/IMG_0464.png');
                             background-size: cover;
                             background-repeat: no-repeat;
                             background-position: bottom left;
                             width: 100%;
                             height: 100%;">
                    <img class="d-block w-100" src="./images/imagen_beta.png" style="width: 100%; height: 100%;">
                </div>

                            <div class="item"
                     style="background-image: url('./uploads/cover/3.jpg');
                             background-size: cover;
                             background-repeat: no-repeat;
                             background-position: bottom left;
                             width: 100%;
                             height: 100%;">
                    <img class="d-block w-100" src="./images/imagen_beta.png" style="width: 100%; height: 100%;">
                </div>

            
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="padre">
        <div class="hijo" style="padding: 15px;">
          <div class="div-relative" style="max-width: 1000px; text-align: center;">
            <div class="imagen-esquina-superior-izquierda"></div>
                
                  <h1 class="futura-titulo" style="color: rgb(15, 87, 169);">
                    Patronato para Administrar el Impuesto Especial Destinado a la Universidad Autónoma de Nayarit.
                  </h1>
                
                <div class="row">
                    <div class="col-md-3">
                        <div class="padre">
                          <div class="hijo"
                          style="padding: 8px;
                          background-image: url('images/LOGO-02.png');
                          background-size: 200%;
                          background-clip: padding-box;
                          background-position: center;
                          margin: 3px;">
                            <img src="images/imagen_cuadrado_beta.png" alt="Texto representativo" class="img-fluid img" style="width: 100%; height: 100%;">
                          </div>
                        </div>
                    </div>
                    <div class="col-md-9 div-relative" style="border: 2px;">
                      <br><br><br>
                      <div class="middle">
                          <div class="imagen-esquina-inferior-derecha"></div>
                          <h4 class="futura-bienvenida" style="color: gray !important; text-align: center;">
                            <font color="#ffffff" size="4">El Patronato para Administrar el Impuesto Especial Destinado a la Universidad Autónoma de Nayarit, les da&nbsp; una cálida bienvenida a su sitio web. En este espacio podrán encontrar información relativa a las actividades que se desarrollan con el Impuesto Especial; y cuyo objetivo es encaminar a la Universidad Autónoma de Nayarit hacía un camino de excelencia y calidad en&nbsp; todos los ámbitos, a través de la responsabilidad y transparencia de esta entidad y en cumplimiento a la normatividad establecida.</font>                          </h4>
                        </div>
                    </div>
                  </div>
                  <br>


                  
                  <div class="div-relative content-news">
                      <div class="esquina-blanca-superior-izquierda"></div>
                      <div class="esquina-blanca-superior-derecha"></div>
                      <br>
                      <!--Empieza Sección de noticias-->
                      <div class="row">
                      <!--Empieza una Noticia-->
                      
                           <div class="col-md-4 tam">
                           <!--Imagen-->
                            <div class="padre" style="padding: 8px;">
                              <div class="hijo img-thumbnail" style="padding: 8px; background-image: url('imagenes/IMG_9684.JPG'); background-size: cover; background-position: center; margin: 3px;">
                                  <img src="images/imagen_beta.png" alt="Texto representativo" class="img-fluid img-new">
                              </div>
                            </div>
                            <!--Titulo-->
                            <p class="padding-title-news negritas tamaño-16 futura-titulo"> 
                              Culminación de los Veranos Científicos en la UAN: Fomento de la Investigación y la Excelencia Educativa
                            </p>
                            <!--Texto-->
                            <p class="justificado negritas tamaño-12 tam futura-descripcion">
                              La Universidad Autónoma de Nayarit (UAN) celebró recientemente la culminación de los Veranos Científicos, programas que involucran la participación de más de 200 estudiantes de los niveles de Educación Media Superior y Superior de la institución.Uno de los aspectos destacados de estos V...
                            </p>
                            <!--Enlace-->
                            <p class="alineado-derecha tamaño-12 tam">
                                <a href="nota.php?idnota=241" class="futura-descripcion" style="color:#0c0036;">Leer más...</a>
                            </p>
                          </div>
                           <div class="col-md-4 tam">
                           <!--Imagen-->
                            <div class="padre" style="padding: 8px;">
                              <div class="hijo img-thumbnail" style="padding: 8px; background-image: url('imagenes/IMG_9509.JPG'); background-size: cover; background-position: center; margin: 3px;">
                                  <img src="images/imagen_beta.png" alt="Texto representativo" class="img-fluid img-new">
                              </div>
                            </div>
                            <!--Titulo-->
                            <p class="padding-title-news negritas tamaño-16 futura-titulo"> 
                              Inauguran el XXVIII Congreso Internacional del Programa Delfín:  Celebrando la Investigación y la Innovación Científica
                            </p>
                            <!--Texto-->
                            <p class="justificado negritas tamaño-12 tam futura-descripcion">
                              La Dra. Norma Liliana Galván Meza, Rectora de la Universidad Autónoma de Nayarit (UAN) y Presidenta del Honorable Consejo General del Programa Delfín, fue la encargada de inaugurar el XXVIII Congreso Internacional del Verano de la Investigación Científica y Tecnológica del Pacífico del P...
                            </p>
                            <!--Enlace-->
                            <p class="alineado-derecha tamaño-12 tam">
                                <a href="nota.php?idnota=240" class="futura-descripcion" style="color:#0c0036;">Leer más...</a>
                            </p>
                          </div>
                           <div class="col-md-4 tam">
                           <!--Imagen-->
                            <div class="padre" style="padding: 8px;">
                              <div class="hijo img-thumbnail" style="padding: 8px; background-image: url('imagenes/IMG_9315.JPG'); background-size: cover; background-position: center; margin: 3px;">
                                  <img src="images/imagen_beta.png" alt="Texto representativo" class="img-fluid img-new">
                              </div>
                            </div>
                            <!--Titulo-->
                            <p class="padding-title-news negritas tamaño-16 futura-titulo"> 
                              Junta de Gobierno del Patronato UAN celebró la Octava Sesión Ordinaria
                            </p>
                            <!--Texto-->
                            <p class="justificado negritas tamaño-12 tam futura-descripcion">
                              Encabezada por el Arq. Carlos Francisco García Jiménez,&nbsp; Presidente del Patronato para Administrar el Impuesto Especial Destinado a la Universidad Autónoma de Nayarit (Patronato UAN), en conjunto con la Tesorera, C.P. María de la Cruz Robles Villarreal, y acompañado por la Dra. Norma ...
                            </p>
                            <!--Enlace-->
                            <p class="alineado-derecha tamaño-12 tam">
                                <a href="nota.php?idnota=239" class="futura-descripcion" style="color:#0c0036;">Leer más...</a>
                            </p>
                          </div>                      
                            
                            
                  
          </div>
        </div>
    </div>
            </div>
    </div>

    
    <div class="padre">
      <div class="hijo" style="padding: 0px;">
          <a href="https://twitter.com/PatronatoUan"><i class="fa fa-twitter" style="font-size:24px; padding: 5px; color: black;"></i></a>
          <a href="https://www.facebook.com/Patronato-UAN-200221974061669/?ref=settings"><i class="fa fa-facebook" style="font-size:24px; padding: 5px; color: black;"></i></a>
          <a href="https://www.youtube.com/channel/UCjCu5_ROMAPCEDodp3tsb7Q?disable_polymer=true"><i class="fa fa-youtube-play" style="font-size:24px; padding: 5px; color: black;"></i></a>
          <a href="https://www.instagram.com/patronato_uan/"><i class="fa fa-instagram" style="font-size:24px; padding: 5px; color: black;"></i></a>
      </div>
    </div>




            <div class="padre" style="background-color:#0F57A9; color: white;">
            <div class="hijo" style="padding: 0;">
                <div class="padre" style="padding: 0;">
                    <div class="hijo futura-descripcion" style="padding: 2px;">
                        administracion@patronatouan.com                    </div>
                </div>
                <div class="padre" style="padding: 0;">
                    <div class="hijo futura-descripcion" style="padding: 2px;">
                        Tel:   (311) 2 14 38 98                    </div>
                </div>
            </div>
        </div>



        <div class="padre tamaño-12 negritas" style="background-color:#FFFFFF; color: #000000;">
            <div class="hijo" style="padding: 0;">
                <div class="padre" style="padding: 0;">
                    <div class="hijo futura-descripcion" style="padding: 0;">
                        <br>
                        Country Club No. 98 Col. Versalles.                    </div>
                </div>
                <div class="padre" style="padding: 0;">
                    <div class="hijo futura-descripcion" style="padding: 0;">
                                        <a style="color:#0c0036;" href="uploads/aviso_privacidad/AVISO_DE_PRIVACIDAD_INTEGRAL.pdf" target="_blank">Aviso de privacidad integral</a>  &nbsp
                                        <a style="color:#0c0036;" href="uploads/aviso_privacidad/AVISO_DE_PRIVACIDAD_SIMPLIFICADO.pdf" target="_blank">Aviso de privacidad simplificado</a>  &nbsp
                     
               
                    </div>
                </div>
                <br>
                <div class="padre" style="padding: 0;">
                    <div class="hijo futura-descripcion" style="padding: 0;">
                        Patronato para Administrar el Impuesto Especial
                    </div>
                </div>
                <div class="padre" style="padding: 0;">
                    <div class="hijo futura-descripcion" style="padding: 0; padding-bottom: 15px;">
                        Destinado a la Universidad Autónoma de Nayarit
                        <br>
                    </div>
                </div>
            </div>
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