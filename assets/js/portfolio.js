document.addEventListener('DOMContentLoaded', () => {
  const planta = document.querySelector('.floorplan');

  if (planta) {
    window.setTimeout(() => {
      planta.classList.add('is-drawing');
      void planta.getBoundingClientRect();
      planta.classList.remove('is-drawing');
      planta.classList.add('is-animated');
    }, 500);
  }

  const moldura = document.querySelector('.about-photo-frame');

  if (!moldura) {
    return;
  }

  moldura.classList.add('is-ready');

  const desenharMoldura = () => {
    moldura.classList.add('is-animated');
  };

  if ('IntersectionObserver' in window) {
    const observador = new IntersectionObserver((entradas, observer) => {
      if (entradas[0].isIntersecting) {
        desenharMoldura();
        observer.unobserve(moldura);
      }
    }, { threshold: 0.35 });

    observador.observe(moldura);
  } else {
    desenharMoldura();
  }
});