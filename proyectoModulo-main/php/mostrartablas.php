<?php

    include("conexion.php");
    
    if($conexion){
        $consulta = "SELECT * FROM formulario_contacto";
        $resultado = mysqli_query($conexion,$consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $id = $row['id'];
                $nombre = $row['nombre'];
                $email = $row['email'];
                $telefono = $row['telefono'];
                $asunto = $row['asunto'];
                $mensaje = $row['mensaje'];
                $fecha = $row['fecha'];
                ?>
                <div>
                    <h2><?php echo $nombre; ?></h2>
                    <div>
                        <p>
                            <b>ID </b> <?php echo $id; ?><br>
                            <b>Email </b><?php echo $email; ?><br>
                            <b>telefono </b><?php echo $telefono; ?><br>
                            <b>asunto </b><?php echo $asunto; ?><br>
                            <b>mensaje </b><?php echo $mensaje; ?><br>
                            <b>fecha </b><?php echo $fecha; ?><br>
                        </p>
                    </div>
                </div>
                <?php
            }
        }
    }



?>