const menuToggle = document.querySelector('.btn');
const showcase = document.querySelector('.showcase');
const menuClose = document.querySelector('.closeMenu');

menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');
  showcase.classList.toggle('active');
})

menuClose.addEventListener('click', () => {
  menuToggle.classList.remove('active');
  showcase.classList.remove('active');
})

//========================================================================================


function displayImages() {
let index = 0;
  let i;
  const images = document.getElementsByClassName('slide')
  for (i = 0; i < 2; i++) {
    images[i].style.display = "none";
  }
  index++;
  if (index > images.length) {
    index = 1;
  }
  images[index-1].style.display = "block";
  setTimeout(displayImages, 2000); 
}

displayImages();