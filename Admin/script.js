  document.addEventListener("DOMContentLoaded", function() {
    const botaoUser = document.getElementById('botaoA'); // Botão User
    const tabelaUsers = document.getElementById('tabela_users');

    const botaoAmostra = document.getElementById('botaoB'); // Botão Amostra
    const tabelaAmostra = document.getElementById('tabela_amostras');

    const botaoAmostraCliente = document.getElementById('botaoC'); // Botão AmostraClientes
    const tabelaAmostraCliente = document.getElementById('tabela_amostras_clientes');

    const botaoCaracterísticas = document.getElementById('botaoD'); // Botão Características
    const tabelaCaracterísticas = document.getElementById('tabela_caracteristicas');


// --------------- BOTÕES PARA MOSTRAR TABELAS ----------------------------------------------//
    botaoUser.addEventListener('click', () => {
      tabelaUsers.style.display = "block";
      tabelaAmostra.style.display = "none";
      tabelaAmostraCliente.style.display="none";
      tabelaCaracterísticas.style.display="none";
    });


    botaoAmostra.addEventListener('click', () => {
      tabelaAmostra.style.display = "block";
      tabelaUsers.style.display="none";
      tabelaAmostraCliente.style.display="none";
      tabelaCaracterísticas.style.display="none";
    });

    botaoAmostraCliente.addEventListener('click', () => {
      tabelaAmostraCliente.style.display="block";
      tabelaAmostra.style.display = "none";
      tabelaUsers.style.display="none";
      tabelaCaracterísticas.style.display="none";
    });

    botaoCaracterísticas.addEventListener('click', () => {
      tabelaCaracterísticas.style.display="block";
      tabelaAmostra.style.display = "none";
      tabelaAmostraCliente.style.display="none";
      tabelaUsers.style.display="none";
    });

  });


// --------------- BOTÕES DE ADICIONAR REGISTO ----------------------------------------------//
  function registo_user(){
    window.location.href = "/JFA/Admin/insercao/user/user.html";
  }

  function registo_amostras(){
    window.location.href = "/JFA/Admin/insercao/amostra/criar_amostra.php";
  }

  function registo_amostras_clientes(){
    window.location.href = "/JFA/Admin/insercao/amostras_clientes/criar_amostras_clientes.php"
  }