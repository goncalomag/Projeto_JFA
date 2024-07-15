  document.addEventListener("DOMContentLoaded", function() {
    const botaoUser = document.getElementById('botaoA'); // Botão User
    const tabelaUsers = document.getElementById('tabela_users');

    const botaoAmostra = document.getElementById('botaoB'); // Botão Amostra
    const tabelaAmostra = document.getElementById('tabela_amostras'); // <--- Correção aqui

    botaoUser.addEventListener('click', () => {
      tabelaUsers.style.display = "block";
      tabelaAmostra.style.display = "none";
    });


    botaoAmostra.addEventListener('click', () => {
      tabelaAmostra.style.display = "block";
      tabelaUsers.style.display="none"
    });

  });