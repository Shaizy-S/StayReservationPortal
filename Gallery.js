const gallery = document.querySelector('.gallery');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

let currentImage = 0;

prev.addEventListener('click', () => {
  currentImage--;

  if (currentImage < 0) {
    currentImage = gallery.children.length - 1;
  }

  gallery.children[currentImage].classList.add('active');

  for (let i = 0; i < gallery.children.length; i++) {
    if (i !== currentImage) {
      gallery.children[i].classList.remove('active');
    }
  }
});

next.addEventListener('click', () => {
  currentImage++;

  if (currentImage === gallery.children.length) {
    currentImage = 0;
  }

  gallery.children[currentImage].classList.add('active');

  for (let i = 0; i < gallery.children.length; i++) {
    if (i !== currentImage) {
      gallery.children[i].classList.remove('active');
    }
  }
});

document.addEventListener('keydown', (event) => {
  if (event.key === 'ArrowLeft') {
    prev.click();
  } else if (event.key === 'ArrowRight') {
    next.click();
  }
});
