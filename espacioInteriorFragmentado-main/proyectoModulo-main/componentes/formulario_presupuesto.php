<?php

    include("conexion.php");

    if (isset($_POST['enviar_formulario'])) {
        if (strlen($_POST['introducir_nombre']) >=1 && strlen($_POST['introducir_email']) >=1 && strlen($_POST['introducir_tipo']) >=1 && strlen($_POST['introducir_catalogo']) && strlen($_POST['introducir_mensaje']) >=1 ) {

            $nombre = trim($_POST['introducir_nombre']);
            $email = trim($_POST['introducir_email']);
            $tipo = trim($_POST['introducir_tipo']);
            $catalogo = trim($_POST['introducir_catalogo']);
            $mensaje = trim($_POST['introducir_mensaje']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO formulario_presupuesto (nombre, email, tipo, catalogo, mensaje,fecha) VALUES ('$nombre', '$email','$tipo', '$catalogo','$mensaje','$fecha')";
            $resultado = mysqli_query($conexion,$consulta);
            if ($resultado) {
                ?>
                <h3 class="ok">¡Te formulario se ha enviado correctamente, pronto nos pondremos en contacto contigo!</h3>
                <?php
            } else {
                ?>
                <h3 class="bad">¡!ups ha ocurrido un error</h3>
                <?php
            }
        }
        
    }
?>