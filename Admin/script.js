  document.addEventListener("DOMContentLoaded", function() {
    const botaoUser = document.getElementById('botaoA'); // Botão User
    const tabelaUsers = document.getElementById('tabela_users');

    const botaoAmostra = document.getElementById('botaoB'); // Botão Amostra
    const tabelaAmostra = document.getElementById('tabela_amostras'); // <--- Correção aqui


// --------------- BOTÕES PARA MOSTRAR TABELAS ----------------------------------------------//
    botaoUser.addEventListener('click', () => {
      tabelaUsers.style.display = "block";
      tabelaAmostra.style.display = "none";
    });


    botaoAmostra.addEventListener('click', () => {
      tabelaAmostra.style.display = "block";
      tabelaUsers.style.display="none"
    });

  });


// --------------- BOTÕES DE ADICIONAR REGISTO ----------------------------------------------//
  function registo_user(){
    window.location.href = "/JFA/Admin/Insercao/user/user.html";
  }

  function registo_amostras(){
    window.location.href = "/JFA/Admin/Insercao/amostra/criar_amostra.php";
  }