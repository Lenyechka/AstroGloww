let images = document.querySelectorAll('.services-image');
let button1 = document.getElementById('button-slider1');
let button2 = document.getElementById('button-slider2');

button1.addEventListener('click', function() {
  images[0].querySelector('img').src = 'photo/brovi.png';
  images[1].querySelector('img').src = 'photo/piling.png';
  images[2].querySelector('img').src = 'photo/massage.png';
  images[3].querySelector('img').src = 'photo/skin.png';
});

button2.addEventListener('click', function() {
  images[0].querySelector('img').src = 'photo/meso.png';
  images[1].querySelector('img').src = 'photo/lifting.png';
  images[2].querySelector('img').src = 'photo/bio.png';
  images[3].querySelector('img').src = 'photo/massageface.png';
});
