document.addEventListener('DOMContentLoaded', () => {
  const planta = document.querySelector('.floorplan');

  if (!planta) {
    return;
  }

  window.setTimeout(() => {
    planta.classList.add('is-drawing');
    void planta.getBoundingClientRect();
    planta.classList.remove('is-drawing');
    planta.classList.add('is-animated');
  }, 500);
});