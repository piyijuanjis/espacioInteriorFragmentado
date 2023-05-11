<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <title>Espacio interior</title>
</head>

<body>
    <?php
    include("formulario_presupuesto.php");
    ?>
    <section class="container about">
        <h2 class="subtitle">Solicita un presupuesto personalizado para la decoración de tu hogar u oficina</h2>
        <p class="about paragraph">En Espacio Interior, nos encanta ayudar a nuestros clientes a crear espacios
            únicos y personalizados que reflejen su estilo y necesidades. Si estás buscando transformar tu hogar
            o
            lugar de trabajo en un espacio acogedor y funcional, has llegado al lugar indicado. Completa el
            siguiente formulario para recibir un presupuesto personalizado que se ajuste a tus requerimientos y
            presupuesto. ¡Estamos ansiosos por comenzar a trabajar contigo y hacer realidad tus ideas de
            decoración!
        </p>
    </section>

    <section class="formulario">
        <div class="container">
            <form class="form__imputs1" method="post">
                <p>
                    <label for="nombre" class="colocar_nombre">Nombre
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" class="form__imput" placeholder="Escribe tu nombre">
                </p>

                <p>
                    <label for="email" class="colocar_email">Email
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="email" name="introducir_email" id="email" required="obligatorio" class="form__imput" placeholder="Escribe tu Email">
                </p>

                <p>
                    <label for="tipo" class="colocar_tipo">Tipo de decoración
                    </label>
                    <select name="introducir_tipo" class="form__imput" id="tipo">
                        <option value="">Selecciona el tipo de decoración que necesitas</option>
                        <option value="oficinas">Oficinas</option>
                        <option value="viviendas">Viviendas</option>
                        <option value="locales">Locales</option>
                    </select>
                </p>

                <p>
                    <label for="catalogo" class="colocar_catalogo">Cátalogo
                    </label>
                    <select name="introducir_catalogo" class="form__imput" id="catalogo">
                        <option value="">Selecciona un artículo del cátalogo</option>
                        <option value="sillas">Sillas</option>
                        <option value="mesas">Mesas</option>
                        <option value="sofas">Sofás</option>
                        <option value="cortinas">Cortinas</option>
                        <option value="toldos">Toldos</option>
                        <option value="camas">Camas</option>
                        <option value="cabeceros">Cabeceros</option>
                        <option value="muebles">Muebles</option>
                        <option value="encimeras">Encimeras</option>
                    </select>
                </p>

                <p>
                    <label for="mensaje" class="colocar_mensaje">Mensaje
                        <span class="obligatorio">*</span>
                    </label>
                    <textarea name="introducir_mensaje" class="form__imput1" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea>
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


    <script src="js/app.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/presupuesto.js"></script>

</body>


</html>