document.addEventListener('DOMContentLoaded', function () {
  const video = document.querySelector('.hero__video');
  const poster = document.querySelector('.hero__poster');

  if (video && poster) {
    video.addEventListener('canplay', () => {
      poster.style.opacity = '0';
    });
  }
});