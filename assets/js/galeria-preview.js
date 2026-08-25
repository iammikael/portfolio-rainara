document.addEventListener('DOMContentLoaded', () => {
  const triggers = [...document.querySelectorAll('.gallery-trigger')];
  const preview = document.querySelector('.gallery-preview');

  if (!preview || !triggers.length) return;

  const image = preview.querySelector('img');
  const caption = preview.querySelector('figcaption');
  const close = preview.querySelector('.gallery-preview-close');
  const previous = preview.querySelector('.gallery-preview-prev');
  const next = preview.querySelector('.gallery-preview-next');
  let currentIndex = 0;

  const show = (index) => {
    currentIndex = (index + triggers.length) % triggers.length;
    const trigger = triggers[currentIndex];
    image.src = trigger.dataset.image;
    image.alt = trigger.dataset.alt;
    caption.textContent = `Foto ${String(currentIndex + 1).padStart(2, '0')} de ${String(triggers.length).padStart(2, '0')}`;
  };

  triggers.forEach((trigger, index) => {
    trigger.addEventListener('click', () => {
      show(index);
      preview.showModal();
      close.focus();
    });
  });

  close.addEventListener('click', () => preview.close());
  previous.addEventListener('click', () => show(currentIndex - 1));
  next.addEventListener('click', () => show(currentIndex + 1));
  preview.addEventListener('click', (event) => {
    if (event.target === preview) preview.close();
  });
  document.addEventListener('keydown', (event) => {
    if (!preview.open) return;
    if (event.key === 'ArrowLeft') show(currentIndex - 1);
    if (event.key === 'ArrowRight') show(currentIndex + 1);
  });
});
