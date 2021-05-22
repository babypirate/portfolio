// Preload

window.addEventListener('load', () => {
  const preload = document.querySelector('.preload');
  preload.classList.add('preload-finish');
  $('.preload-transition').removeClass('preload-transition');
})





const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelectorAll('.nav__link');

navToggle.addEventListener('click', () => {
document.body.classList.toggle('nav-open');
});

navLinks.forEach(link =>{
link.addEventListener('click', () => {
		document.body.classList.remove('nav-open');
	})
});

function initCarousel(carouselRoot) {
  var slides = $(carouselRoot).find(".mySlides");
  var dots = $(carouselRoot).find(".dot");
  var preButton = $(carouselRoot).find(".prev");
  var nextButton = $(carouselRoot).find(".next");

  var slideIndex = 0;

  // Next/previous controls
  function nextSlides() {
    showSlides(++slideIndex);
  }

  function preSlides() {
    showSlides(--slideIndex);
  }

  function showSlides(index) {
    if (index >= slides.length) {
      slideIndex = 0;
    } else if (index < 0) {
      slideIndex = slides.length - 1;
    } else {
      slideIndex = index;
    }
    for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";  
    for (var i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    dots[slideIndex].className += " active";
  }

  preButton.click(preSlides);
  nextButton.click(nextSlides);
  dots.each((index, dot) => $(dot).click(() => showSlides(index)));
  showSlides(0);
}

$(() => {
  $('.carousel').each((index, element) => initCarousel(element));
});
