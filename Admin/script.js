document.addEventListener("DOMContentLoaded", function() {
  const botao = document.getElementById('botaoA');
  const tabelaUsers = document.getElementById('tabela_users');

  botao.addEventListener('click', () => {
      tabelaUsers.style.display="block"
  });
});