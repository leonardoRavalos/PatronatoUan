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

    <link rel="stylesheet" href="assets/css/sweetalert.css">
    <link rel="stylesheet" href="normalize.css">

    <script type="text/javascript" src="assets/js/plugins/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/jquery.validate.js"></script>
    <script type="text/javascript" src="assets/js/plugins/additional-methods.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript" src="assets/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="assets/js/contact.js"></script>


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
                <li class="sobre" ><a class="borde-blanco" href="index.php">INICIO<span class="sr-only">(current)</span></a></li>
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
                <li class="sobre actives"><a class="nav-link borde-blanco" href="contacto.php">CONTACTO</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br>

<br>
<div class="row" style="padding: 0;">
    <div align="center">
    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.036046881849!2d-104.90783208558463!3d21.50630797668086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8427371de691d8b3%3A0xacba9a2400d9da90!2sPatronato+UAN!5e0!3m2!1ses!2smx!4v1562132207059!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="col-md-12" style="padding-left: 40px; padding-right: 40px; ">
        <br><br>
        <div class="padre">
            <div class="div-relative" style="width: 80%;">
                <!--fdf-->


                <!--dfdf-->
                <!--  <form action="https://www.zeitmedia.com.mx/patronato/enviar.php" method="POST" enctype="text/plain">-->
                <form id="frmContacto" >
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Correo electrónico:</label>
                            <input type="email" class="form-control" name="email" id="email" >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Asunto:</label>
                            <input type="text" class="form-control" name="asunto" id="asunto" >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mensaje:</label>
                            <textarea rows="6" cols="100" class="form-control" name="mensaje" id="mensaje"  maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>

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
                    administracion@patronatouan.com                </div>
            </div>
            <div class="padre" style="padding: 0;">
                <div class="hijo futura-descripcion" style="padding: 2px;">
                    Tel:   (311) 2 14 38 98                </div>
            </div>
        </div>
    </div>



    <div class="padre tamaño-12 negritas" style="background-color:#FFFFFF; color: #000000;">
        <div class="hijo" style="padding: 0;">
            <div class="padre" style="padding: 0;">
                <div class="hijo futura-descripcion" style="padding: 0;">
                    <br>
                    Country Club No. 98 Col. Versalles.                </div>
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