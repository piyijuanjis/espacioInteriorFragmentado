<?php
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

    // Creación de las filas de la tabla con los datos de cada artículo
    echo '<tr>
        <td class="estilo_celda">' . $titulo . '</td>
        <td class="estilo_celda">' . $descripcion . '</td>
        <td class="estilo_celda"><img src="' . $rutaImagen . '" class="imagen_tabla"></td>
        <td class="estilo_celda">
            <a class="ctaEliminar" href="?eliminar=' . $id . '">Eliminar</a>
        </td>
      </tr>';
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