

/*Slider de comentarios en la página de inicio*/

(function () {

    const sliders = [...document.querySelectorAll('.testimony__body')];
    const buttonNext = document.querySelector('#next');
    const buttonBefore = document.querySelector('#before');
    let value;

    const changePosition = (add) => {
        const currentTestimony = document.querySelector('.testimony__body--show').dataset.id;
        value = Number(currentTestimony);
        value += add;

        sliders[Number(currentTestimony) - 1].classList.remove('testimony__body--show');
        if (value === sliders.length + 1 || value === 0) {
            value = value === 0 ? sliders.length : 1;
        }

        sliders[value - 1].classList.add('testimony__body--show');
    };

    const nextSlide = () => {
        changePosition(1);
    };

    const startInterval = () => {
        setInterval(nextSlide, 5000); // Cambia de testimonio cada 5 segundos (5000 milisegundos)
    };

    buttonNext.addEventListener('click', nextSlide);
    buttonBefore.addEventListener('click', () => {
        changePosition(-1);
    });
    startInterval(); // Inicia el intervalo al cargar la página
})();




