document.addEventListener("DOMContentLoaded", function(){
  const simbolo = document.getElementById('filter');
  const filtro = document.getElementById('filtro');
  const galeria = document.getElementById('galeria');
  const fechaFiltro = document.getElementById('fechaFiltro');

  simbolo.addEventListener('click', () =>{
    filtro.classList.toggle('hide');
    galeria.classList.toggle('pequena');
  });


  fechaFiltro.addEventListener('click', ()=> {
    filtro.classList.toggle('hide');
    galeria.classList.toggle('pequena');
  })
});


