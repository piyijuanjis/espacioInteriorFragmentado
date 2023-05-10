/*código para la ampliación de las imágenes del blog*/

const items = document.querySelectorAll('.servicios__items');
items.forEach(item => {
  const img = item.querySelector('img');
  const modal = document.createElement('div');
  modal.classList.add('servicios__items__modal');
  modal.innerHTML = `<img src="${img.src}" alt="">`;
  item.appendChild(modal);

  item.addEventListener('click', () => {
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  });

  modal.addEventListener('click', () => {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
  });
});
const modals = document.querySelectorAll('.servicios__items__modal');

window.addEventListener('click', (event) => {
  modals.forEach(modal => {
    if (event.target == modal) {
      modal.style.display = 'none';
      document.body.style.overflow = 'auto';
    }
  });
});




