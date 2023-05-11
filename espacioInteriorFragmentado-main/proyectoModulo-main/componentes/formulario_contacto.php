<?php

    include("conexion.php");

    if (isset($_POST['enviar_formulario'])) {
        if (strlen($_POST['introducir_nombre']) >=1 && strlen($_POST['introducir_email']) >=1 && strlen($_POST['introducir_telefono']) >=1 && strlen($_POST['introducir_asunto']) && strlen($_POST['introducir_mensaje']) >=1 ) {

            $nombre = trim($_POST['introducir_nombre']);
            $email = trim($_POST['introducir_email']);
            $telefono = trim($_POST['introducir_telefono']);
            $asunto = trim($_POST['introducir_asunto']);
            $mensaje = trim($_POST['introducir_mensaje']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO formulario_contacto (nombre, email, telefono, asunto, mensaje,fecha) VALUES ('$nombre', '$email','$telefono', '$asunto','$mensaje','$fecha')";
            $resultado = mysqli_query($conexion,$consulta);
            if ($resultado) {
                ?>
                <h3 class="ok">¡Te has inscrito correctamente!</h3>
                <?php
            } else {
                ?>
                <h3 class="bad">¡!ups ha ocurrido un error</h3>
                <?php
            }
        }
        
    }
?>