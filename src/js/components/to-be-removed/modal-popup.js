$(document).ready(function($) {
  //works for single modal on page only, needs to be modified if used multiple times on one page
  const toggleModal = () => {
    modal.classList.toggle("modal-popup__content-container--active");
  };
  const modal = document.getElementById("zenkit-modal");
  if (modal) {
    const modalToggleButton = document.getElementById("zenkit-modal-button");
    const modalCloseButton = document.getElementById("zenkit-modal-closer");
    modalToggleButton.addEventListener("click", toggleModal);
    modalCloseButton.addEventListener("click", toggleModal);
    window.onclick = function(event) {
      if (event.target == modal) {
        toggleModal();
      }
    };
  }
});
