document.addEventListener("DOMContentLoaded", function(){
  const simbolo = document.getElementById('filter');
  const body = document.getElementById('body');
  const filtro = document.getElementById('filtro');
  const galeria = document.getElementById('galeria');
  const fechaFiltro = document.getElementById('fechaFiltro');
  
  simbolo.addEventListener('click', () =>{
    filtro.classList.toggle('hide');
    galeria.classList.toggle('pequena');
    body.style.overflow="hidden";
    galeria.style.overflow="hidden";
    
  });
  
  
  fechaFiltro.addEventListener('click', ()=> {
    filtro.classList.toggle('hide');
    galeria.classList.toggle('pequena');
    body.style.overflow="auto";
    galeria.style.overflow="none";
  });

});


/*window.addEventListener('scroll',function(){
let scroll = document.querySelector('.scrollTop');
scroll.classList.toggle('active', window.scrollY > 150);
})

function voltaCima(){
window.scrollTo({
top:0,
behavior: 'smooth',
})
}*/