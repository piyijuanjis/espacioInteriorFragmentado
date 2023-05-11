// Obtener el enlace de inicio de sesión
const inicioDeSesion = document.getElementById("inicioDeSesion");

// Obtener el modal
const modal = document.getElementById("miModal");

// Cuando se hace clic en el enlace de inicio de sesión, mostrar el modal
inicioDeSesion.addEventListener("click", function(event) {
    event.preventDefault();
    modal.style.display = "block";
  });
  
// Obtener el botón de cerrar
const cerrarModal = document.querySelector(".modal__cerrar");

// Cuando se hace clic en el botón de cerrar, ocultar el modal
cerrarModal.addEventListener("click", function() {
  modal.style.display = "none";
});



