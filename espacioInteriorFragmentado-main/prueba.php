<?php

include("conexion.php");

if (isset($_POST['enviar_formulario'])) {
    if (strlen($_POST['introducir_titulo']) >= 1 && strlen($_POST['introducir_comentario']) >= 1 && strlen($_POST['introducir_foto_blog']) >= 1 ) {

        $titulo = $_POST['introducir_titulo'];
        $comentario = $_POST['introducir_comentario'];
        $foto_blog = $_POST['introducir_foto_blog'];
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO guardar_blog (titulo, mensaje, imagen, fecha) VALUES ('$titulo', '$comentario', '$foto_blog', '$fecha')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
?>
            <h3 class="ok">¡foto y descripción subida correctamente, ya puedes verlo en la galería!</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">¡!ups ha ocurrido un error</h3>
<?php
        }
    }
}
?>

<table class="estilo_tabla">
                    <tr>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                    <?php
                    include("conexion.php");

                    // Consulta para obtener los artículos
                    $query = "SELECT * FROM guardar_blog ORDER BY fecha DESC";
                    $resultado = mysqli_query($conexion, $query);

                    // Iteración sobre los resultados de la consulta
                    while ($fila = mysqli_fetch_array($resultado)) {
                        $id = $fila["id"];
                        $titulo = $fila["titulo"];
                        $descripcion = $fila["mensaje"];
                        $imagen = $fila["imagen"];

                        // Ruta de la imagen
                        $rutaImagen = "../imagenes/img/" . basename($imagen);
                    ?>
                        <tr>
                            <td class="estilo_celda"><?php echo $titulo; ?></td>
                            <td class="estilo_celda"><?php echo $descripcion; ?></td>
                            <td class="estilo_celda"><img src="<?php echo $rutaImagen; ?>" class="imagen_tabla"></td>
                            <td class="estilo_celda"><a class="ctaEliminar" href="?eliminar=<?php echo $id; ?>">Eliminar</a></td>

                        </tr>
                    <?php
                    }

                    // Verificación de si se ha enviado el parámetro 'eliminar'
                    if (isset($_GET['eliminar'])) {
                        $idEliminar = $_GET['eliminar'];
                        // Eliminar el artículo de la base de datos
                        $eliminarQuery = "DELETE FROM guardar_blog WHERE id = $idEliminar";
                        mysqli_query($conexion, $eliminarQuery);
                    }

                    // Cierre de la conexión a la base de datos
                    mysqli_close($conexion);
                    ?>
                </table>