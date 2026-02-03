document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.querySelector('.toggle-expand');
  const content = document.querySelector('.__expand');

  if (!toggle || !content) return;

  toggle.addEventListener('click', function () {
    const isOpen = content.classList.toggle('is-open');
    toggle.classList.toggle('is-open');

    toggle.innerHTML = isOpen
      ? 'Zwiń <span class="arrow">▲</span>'
      : 'Rozwiń <span class="arrow">▼</span>';
  });
});