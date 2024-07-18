var tabelaUsers;
var tabelaAmostras;
var tabela_amostras_clientes;
var tabela_características
document.addEventListener("DOMContentLoaded", function() {
    tabelaUsers = document.getElementById('tabela_users');
    tabelaAmostras=document.getElementById('tabela_amostras');
    tabelaAmostraCliente = document.getElementById('tabela_amostras_clientes');
    tabelaCaracterísticas = document.getElementById('tabela_caracteristicas');
});

function voltaCima(){
    tabelaUsers.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
}

function voltaCima_Amostras(){
    tabelaAmostras.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
}

function voltaCima_Amostras_Clientes(){
    tabelaAmostraCliente.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
}

function voltaCima_Caracteristicas(){
    tabelaCaracterísticas.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
}



/* tabela.addEventListener('scroll',function(){
    let scroll = document.querySelector('.scrollTop');
        scroll.classList.toggle('active', window.scrollY > 10);
}) */
