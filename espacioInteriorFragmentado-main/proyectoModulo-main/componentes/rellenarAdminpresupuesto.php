<?php
        // Conexión a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "espacio_interior");

        // Consulta para obtener los artículos
        $query = "SELECT * FROM guardar_blog ORDER BY fecha DESC";
        $resultado = mysqli_query($conexion, $query);

        // Iteración sobre los resultados de la consulta
        while ($fila = mysqli_fetch_array($resultado)) {
            $titulo = $fila["titulo"];
            $descripcion = $fila["mensaje"];
            $imagen = $fila["imagen"];
            $url = "articulo.php?id=" . $fila["id"];

            // Creación del elemento HTML para cada artículo
            echo '<div class="servicios__element">
                    <h3 class="servicios__servicios">' . $titulo . '</h3>
                    <p class="servicios__name">' . $descripcion . '</p>
                    <div class="servicios__items">
                        <img src="imagenesBlog/' . $imagen . '" class="servicios__foto">
                    </div>
                  </div>';
        }

        // Cierre de la conexión a la base de datos
        mysqli_close($conexion);
        ?>