var index = 0;
var images = document.querySelectorAll('slider img');
var interval = setInterval(slideshow, 3000);
var dots = document.querySelectorAll('.dot');
var currentImg = 0; // index of the first image 
const interval = 3000; // duration(speed) of the slide

function changeSlide() {
  images[index].style.opacity = '0';
  index = (index + 1) % images.length;
  images[index].style.opacity = '1';
}