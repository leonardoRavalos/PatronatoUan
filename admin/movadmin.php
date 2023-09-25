<?php
session_start();
require_once('db_config.php'); // Asegúrate de que la ruta al archivo sea correcta

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar los datos del formulario
    $titulo = $_POST['titulo'];
    $texto = $_POST['descri'];

    // Procesar la imagen (asegurarse de que tenga las dimensiones correctas)
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $imagen = $_FILES['imagen']['tmp_name'];
        list($ancho, $alto) = getimagesize($imagen);

        if ($ancho === 425 && $alto === 284) {
            // La imagen tiene las dimensiones correctas, ahora puedes almacenarla en la base de datos
            $imagen = file_get_contents($imagen);

            // Tomar el primer párrafo del texto
            $parrafo = strip_tags($texto, '<p>');
            $parrafo = preg_replace('/<p>(.*?)<\/p>.*/s', '$1', $parrafo);

            // Insertar los datos en la base de datos
            $stmt = $mysqli->prepare("INSERT INTO noticias (titulo, imagen, NOTA_LARGA, nota) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $titulo, $imagen, $texto, $parrafo);

            if ($stmt->execute()) {
                echo "La noticia se ha agregado correctamente.";
            } else {
                echo "Error al agregar la noticia: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "La imagen debe tener las dimensiones correctas (ancho: 425, alto: 284).";
        }
    } else {
        echo "Error al cargar la imagen.";
    }
}
?>
