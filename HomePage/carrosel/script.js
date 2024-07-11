let slideIndex = 1;
let intervalId = null;

function plusSlides(n) {
  clearInterval(intervalId);
  showSlides(slideIndex += n);
  setTimeout(function() {
    intervalId = setInterval(myFunction, 3000);//define a velocidade da troca as imagens a cada 3 segundo
  }, 7000); // espera 7 segundos de inatividade
}

function currentSlide(n) {
  clearInterval(intervalId);
  showSlides(slideIndex = n);
  setTimeout(function() {
    intervalId = setInterval(myFunction, 3000);//define a velocidade da troca as imagens a cada 3 segundo
  }, 7000); // espera 7 segundos de inatividade
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
}

window.onload = function() {
  showSlides(1);
  intervalId = setInterval(myFunction, 3000); // troca as imagens a cada 3 segundo
}