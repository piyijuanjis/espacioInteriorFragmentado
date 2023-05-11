<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>

<body>

    <header class="hero hero4">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__titulo">Espacio interior</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="index.php" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="sobrenosotros.php" class="nav__links">Sobre nosotros</a>
                </li>
                <li class="nav__items">
                    <a href="form.php" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="presupuesto.php" class="nav__links">presupuesto</a>
                </li>
                <li class="nav__items">
                    <a href="blog.php" class="nav__links">Galería</a>
                </li>
                <li class="nav__items">
                    <a href="" id="inicioDeSesion" class="nav__links"><img src="imagenes/iniciosesion.svg"></a>
                </li>

                <img src="imagenes/salirmenu.svg" class="nav__close">
            </ul>
            <div class="nav__menu">
                <img src="imagenes/menu.svg" class="nav__img">
            </div>
        </nav>
        <section class="hero__container container">
            <h1 class="hero__title">Tu empresa de decoración interior</h1>
            <p class="hero__paragraph">Ofrecemos un servicio integral de decoración de interiores que abarca desde la
                planificación hasta la ejecución, asegurando que cada detalle sea perfecto y que cada proyecto sea
                único.</p>
        </section>
    </header>

    <aside id="miModal" class="modal">
        <div class="modal__contenido">
            <span class="modal__cerrar">&times;</span>
            <!-- contenido del modal aquí -->
            <h2 class="subtitle">Iniciar sesión</h2>
            <form action="php/comprueba_login.php" class="form__imputs1" method="post">

                <p>
                    <label for="email" class="colocar_email">Email
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="email" name="introducir_email" id="email" required="obligatorio" class="form__imput" placeholder="Escribe tu Email">
                </p>

                <p>
                    <label for="contrasena" class="colocar_contrasena">Contraseña
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="password" name="introducir_contrasena" class="form__imput" id="contrasena" required="obligatorio" placeholder="Introduce tu Contraseña">
                </p>

                <p class="aviso">
                    <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>

                <button type="submit" name="enviar_formulario" class="form__submit" id="enviar">
                    <p>Acceder</p>
                </button>

                <p class="aviso">¿Aún no tienes cuenta? <a href="inicioSesion.html">Crea tu cuenta ya</a></p>

            </form>
        </div>
    </aside>


    <script src="js/app.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/modal.js"></script>


</body>

</html>