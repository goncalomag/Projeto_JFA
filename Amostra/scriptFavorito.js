document.addEventListener("DOMContentLoaded", function() {/* faz com que atribuia as variaveis e execute o codigo apenas depois da pagina toda carregada */
    const star = document.getElementById('star');

    star.addEventListener('click', () => {
        star.classList.toggle('teste');
    });
});