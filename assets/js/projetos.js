document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.projeto-card');

  if (!window.matchMedia('(hover: none)').matches) {
    return;
  }

  cards.forEach((card) => {
    card.addEventListener('click', () => {
      const ativo = card.classList.contains('is-active');
      cards.forEach((item) => item.classList.remove('is-active'));

      if (!ativo) {
        card.classList.add('is-active');
      }
    });
  });

  document.addEventListener('click', (event) => {
    if (!event.target.closest('.projeto-card')) {
      cards.forEach((card) => card.classList.remove('is-active'));
    }
  });
});