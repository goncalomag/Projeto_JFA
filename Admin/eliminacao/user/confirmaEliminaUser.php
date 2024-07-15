<?php



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/JFA/Admin/eliminacao/user/style.css">
    <title>Teste</title>
</head>
<body>
    <div class="caixa" style="display: flex; flex-direction: column;">
        <div class="background">
            <h2>Tem que certeza que pretende eliminar estes dados?</h2>
            <h4>Depois de confirmar não irá ter maneira de recuperar os dados</h4>
            <div class="botoes">
                <button id="nao"onclick="voltar()">Cancelar</button>
                <button id="sim" type="submit" onclick="guardar()">Eliminar</button>
            </div>
        </div>
    </div>
</body>
</html>