<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/mediaqueries.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <title>Espacio interior</title>
</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION["introducir_email"])) {
        header("location:index.php");
    }
    ?>

    <header class="hero hero5">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__titulo">Espacio interior</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="cierre.php" class="nav__links"><img src="../imagenes/exit.svg"></a>
                </li>
                <img src="../imagenes/salirmenu.svg" class="nav__close">
            </ul>
            <div class="nav__menu">
                <img src="../imagenes/menu.svg" class="nav__img">
            </div>
        </nav>
        <section class="hero__container container">
            <h1 class="hero__title">Bienvenido a la zona de administración</h1>
            <p class="hero__paragraph">Esta zona es exclusiva para administradores.</p>
        </section>
    </header>

    <main>




        <section class="container about">
            <h2 class="subtitle">Formularios de contacto</h2>
            <div class="form-container">
                <?php
                include("conexion.php");
                if (isset($_GET['eliminar'])) {
                    $id = $_GET['eliminar'];
                    $eliminar = "DELETE FROM formulario_contacto WHERE id = $id";
                    mysqli_query($conexion, $eliminar);
                }

                if ($conexion) {
                    $consulta = "SELECT * FROM formulario_contacto";
                    $resultado = mysqli_query($conexion, $consulta);
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
                                        <b>Nº cliente: </b> <?php echo $id; ?><br>
                                        <b>Email: </b><?php echo $email; ?><br>
                                        <b>Teléfono: </b><?php echo $telefono; ?><br>
                                        <b>Asunto: </b><?php echo $asunto; ?><br>
                                        <b>Mensaje: </b><?php echo $mensaje; ?><br>
                                        <b>Fecha: </b><?php echo $fecha; ?><br>
                                    </p>
                                </div>
                                <a class="ctaEliminar" href="?eliminar=<?php echo $id; ?>">Eliminar</a>
                                <a class="ctaResponder" href="mailto:<?php echo $email; ?>" class="btn btn-primary">Responder</a>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
        </section>

        <section class="formulario">

            <div class="container">
                <h2 class="subtitle">Insertar imágenes en el blog</h2>
                <form action="guardar_blog.php" class="form__imputs1" method="post" id="mi-formulario">

                    <p>
                        <label for="titulo" class="colocar_titulo">Título
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="introducir_titulo" id="titulo" required="obligatorio" class="form__imput" placeholder="Título">
                    </p>

                    <p>
                        <label for="comentario" class="colocar_comentario">Mensaje
                            <span class="obligatorio">*</span>
                        </label>
                        <textarea name="introducir_comentario" class="form__imput1" id="comentario" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea>
                    </p>

                    <p>
                        <label for="foto_blog" class="colocar_foto_blog">Selecciona una imagen con tamaño inferior a 5mb
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="file" name="introducir_foto_blog" id="foto_blog" required="obligatorio" class="" placeholder="Título">
                    </p>

                    <button type="submit" name="enviar_formulario" class="form__submit" id="enviar">
                        <p>Enviar</p>
                    </button>

                    <p class="aviso">
                        <span class="obligatorio"> * </span>los campos son obligatorios.
                    </p>


                </form>


            </div>

        </section>


    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Espacio Interior</h2>
                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="cierre.php" class="nav__links"><img src="../imagenes/exit.svg"></a>
                    </li>
                </ul>
            </nav>
            <form class="footer__form">
                <h2 class="footer__newsletter">Nos ponemos en contacto contigo</h2>
                <div class="footer__imputs">
                    <input type="email" name="Email" placeholder="Email:" class="footer__imput">
                    <input type="submit" value="Empieza tu decoración ya" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="../imagenes/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="../imagenes/instagram.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="../imagenes/twitter.svg" class="footer__img"></a>
            </div>
            <h3 class="footer__copyright">Derechos reservados &copy; Piyi Juanjis</h3>
        </section>
    </footer>


    <script src="../js/app.js"></script>
    <script src="../js/mapa.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/modal.js"></script>
</body>

</html>