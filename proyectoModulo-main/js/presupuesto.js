    // Aquí vamos a generar el código para q en el placeholder de mensaje me rellene con lo q he seleccionado en los selects
    const tipoSelect = document.getElementById('tipo');
    const catalogoSelect = document.getElementById('catalogo');
    const mensajeInput = document.getElementById('mensaje');

    // agrega un event listener para cuando los selects cambian
    tipoSelect.addEventListener('change', updatePlaceholder);
    catalogoSelect.addEventListener('change', updatePlaceholder);

    // función para actualizar el placeholder del campo de texto
    function updatePlaceholder() {
        // obtiene los valores seleccionados de los selects
        const tipoSeleccionado = tipoSelect.options[tipoSelect.selectedIndex].text;
        const catalogoSeleccionado = catalogoSelect.options[catalogoSelect.selectedIndex].text;

        // concatena los valores seleccionados en una cadena de texto
        const texto = `Estoy interesado en decorar mi ${tipoSeleccionado} con ${catalogoSeleccionado}...`;

        // establece el texto concatenado como el placeholder del campo de texto
        mensajeInput.placeholder = texto;
    }
