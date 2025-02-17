const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

let currentIndex = 0;

function updateSlider() {
  const slideWidth = slides[0].offsetWidth;
  slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

prevButton.addEventListener('click', () => {
  currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
  updateSlider();
});

nextButton.addEventListener('click', () => {
  currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
  updateSlider();
});

window.addEventListener('resize', updateSlider);

function setHalfProgress(percent) {
  const degree = (percent / 100) * 180; // Convert percentage to degrees
  const fullFill = document.querySelector('.mask.full .fill');
  const halfFill = document.querySelector('.mask.half .fill');
  const insideText = document.querySelector('.inside-text');

  if (percent <= 50) {
    fullFill.style.transform = `rotate(${degree}deg)`;
    halfFill.style.transform = 'rotate(0deg)';
  } else {
    fullFill.style.transform = `rotate(180deg)`;
    halfFill.style.transform = `rotate(${degree - 180}deg)`;
  }

  insideText.textContent = `${percent}%`;
}

// Example: Set progress to 75%
setHalfProgress(75);

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = x.length }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex - 1].style.display = "block";
}

