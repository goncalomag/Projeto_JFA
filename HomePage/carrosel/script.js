let slideIndex = 1;
let intervalId = null;
let timeoutId = null;

function plusSlides(n) {
  clearInterval(intervalId);
  clearTimeout(timeoutId);
  showSlides(slideIndex += n);
  timeoutId = setTimeout(function() {
    intervalId = setInterval(myFunction, 3000);
  }, 7000);
}

function currentSlides(n) {
  clearInterval(intervalId);
  clearTimeout(timeoutId);
  showSlides(slideIndex = n);
  timeoutId = setTimeout(function() {
    intervalId = setInterval(myFunction, 3000);
  }, 7000);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

function myFunction() {
  showSlides(slideIndex += 1);
  if (slideIndex > document.getElementsByClassName("mySlides").length) {
    slideIndex = 1;
  }
}

window.onload = function() {
  showSlides(1);
  intervalId = setInterval(myFunction, 3000);
}