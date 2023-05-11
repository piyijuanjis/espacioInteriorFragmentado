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


    <section class="servicios container">
        <h2 class="subtitle">Galería</h2>
        <p class="about paragraph">Artículos y consejos sobre tendencias de decoración, técnicas de diseño,
            soluciones creativas y otras ideas relacionadas con el tema. Los artículos incluyen fotografías y una
            descripción que ilustran ejemplos prácticos.</p>

        <div class="servicios__table">

            <div class="servicios__element">
                <h3 class="servicios__servicios">Cocina</h3>
                <p class="servicios__name">Cocina moderna con isla central de mármol, armarios blancos, vajilla
                    expuesta y ventana que proporciona iluminación natural.</p>
                <div class="servicios__items">
                    <img src="imagenes/cocina.jpg" class="servicios__foto">
                </div>
                <a href="#" class="servicios__cta">Ver artículo</a>
            </div>

            <div class="servicios__element">
                <h3 class="servicios__servicios">Salón</h3>
                <p class="servicios__name">Cocina moderna con isla central de mármol, armarios blancos, vajilla
                    expuesta y ventana que proporciona iluminación natural.</p>
                <div class="servicios__items">
                    <img src="imagenes/salon.jpg" class="servicios__foto">
                </div>
                <a href="blog.html" class="servicios__cta">Ver artículo</a>
            </div>

            <div class="servicios__element">
                <h3 class="servicios__servicios">Salón</h3>
                <p class="servicios__name">Salón acogedor con paredes beige, sofá cómodo, iluminación suave y
                    estantería rústica llena de libros y adornos.</p>
                <div class="servicios__items">
                    <img src="imagenes/salon1.jpg" class="servicios__foto">
                </div>
                <a href="blog.html" class="servicios__cta">Ver artículo</a>
            </div>

            <div class="servicios__element">
                <h3 class="servicios__servicios">Salón</h3>
                <p class="servicios__name">Cocina moderna con isla central de mármol, armarios blancos, vajilla
                    expuesta y ventana que proporciona iluminación natural.</p>
                <div class="servicios__items">
                    <img src="imagenes/salon2.jpg" class="servicios__foto">
                </div>
                <a href="blog.html" class="servicios__cta">Ver artículo</a>
            </div>

            <div class="servicios__element">
                <h3 class="servicios__servicios">Salón</h3>
                <p class="servicios__name">Cocina moderna con isla central de mármol, armarios blancos, vajilla
                    expuesta y ventana que proporciona iluminación natural.</p>
                <div class="servicios__items">
                    <img src="imagenes/salon3.jpg" class="servicios__foto">
                </div>
                <a href="blog.html" class="servicios__cta">Ver artículo</a>
            </div>

            <div class="servicios__element">
                <h3 class="servicios__servicios">Salón</h3>
                <p class="servicios__name">Cocina moderna con isla central de mármol, armarios blancos, vajilla
                    expuesta y ventana que proporciona iluminación natural.</p>
                <div class="servicios__items">
                    <img src="imagenes/salon.jpg" class="servicios__foto">
                </div>
                <a href="blog.html" class="servicios__cta">Ver artículo</a>
            </div>

            <div class="servicios__element">
                <h3 class="servicios__servicios">Salón</h3>
                <p class="servicios__name">Cocina moderna con isla central de mármol, armarios blancos, vajilla
                    expuesta y ventana que proporciona iluminación natural.</p>
                <div class="servicios__items">
                    <img src="imagenes/salon1.jpg" class="servicios__foto">
                </div>
                <a href="blog.html" class="servicios__cta">Ver artículo</a>
            </div>

            <?php
            include("rellenarAdminpresupuesto.php");
            ?>

        </div>
    </section>

    <script src="js/app.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/galeria.js"></script>
    <script src="js/presupuesto.js"></script>

</body>


</html>