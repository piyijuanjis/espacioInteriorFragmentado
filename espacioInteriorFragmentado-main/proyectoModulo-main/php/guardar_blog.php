<?php

include("conexion.php");

if (isset($_POST['enviar_formulario'])) {
    $titulo = $_POST['introducir_titulo'];
    $comentario = $_POST['introducir_comentario'];
    $fecha = date("d/m/y");

    // Verifica que los campos no estén vacíos
    if (!empty($titulo) && !empty($comentario) && !empty($_FILES['introducir_foto_blog']['name'])) {
        $foto_blog = $_FILES['introducir_foto_blog'];

        // Verifica que sea una imagen válida
        $check = getimagesize($foto_blog['tmp_name']);
        if ($check !== false) {
            // Genera un nombre único para la imagen
            $nombre_archivo = uniqid('', true) . '.' . pathinfo($foto_blog['name'], PATHINFO_EXTENSION);
            $ruta_archivo = '../imagenes/img/img' . $nombre_archivo;

            // Guarda la imagen en la carpeta "imagenes"
            if (move_uploaded_file($foto_blog['tmp_name'], $ruta_archivo)) {
                $consulta = "INSERT INTO guardar_blog (titulo, mensaje, imagen, fecha) VALUES ('$titulo', '$comentario', '$ruta_archivo', '$fecha')";
                $resultado = mysqli_query($conexion, $consulta);

                if ($resultado) {
                    echo '<h3 class="ok">¡Foto y descripción subidas correctamente, ya puedes verlo en la galería!</h3>';
                } else {
                    echo '<h3 class="bad">¡Ups! Ha ocurrido un error al guardar en la base de datos.</h3>';
                }
            } else {
                echo '<h3 class="bad">¡Ups! Ha ocurrido un error al subir la imagen.</h3>';
            }
        } else {
            echo '<h3 class="bad">El archivo seleccionado no es una imagen válida.</h3>';
        }
    } else {
        echo '<h3 class="bad">Por favor, rellena todos los campos obligatorios.</h3>';
    }
}
?>
