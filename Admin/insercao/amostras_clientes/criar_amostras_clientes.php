<?php
    $serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM Users";
    $sql2 = "SELECT DISTINCT Cod_Artigo FROM Amostras";

    $users = $db->query($sql);
    $amostras = $db->query($sql2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.jfa.pt/wp-content/themes/tema-jfa/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/JFA/Admin/insercao/amostras_clientes/style.css ">
    <title>Inserir Amostra/Cliente</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="caixa" style="display: flex; flex-direction: column;">
        <div class="background">
            <form action="amostras_clientes.php" method="POST" class="background" style="border:none; width:100%">
                <h1>Inserir Amostra/Cliete</h1>
                User: <select class="valores" name="id" required>
                    <option value="0">Selecione um user</option>
                    <?php while($user=$users->fetch()) {?>
                        <option value="<?php  echo $user['Id']?>"><?php echo $user['Nome']?></option>
                    <?php }?>  
                </select>
                Código Artigo:  <select class="valores" name="cod_artigo" required id="cod_artigo">
                    <option value="0">Selecione um código artigo</option>
                    <?php while($amostra=$amostras->fetch()) {?>
                        <option value="<?php  echo $amostra['Cod_Artigo']?>"><?php echo $amostra['Cod_Artigo']?></option>
                    <?php }?>  
                </select>
                Tamanho:        <select class="valores" name="tamanho" required id="tamanho">
                    <option value="0">Selecione um código artigo</option>
                </select>
                Cor:            <select class="valores" name="cor" required id="cor">
                    <option value="0">Selecione um código artigo</option>
                </select>
                <button type="submit">Adicionar</button>
                <a href="/JFA/Admin/admin.php">Voltar</a>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#cod_artigo').on('change', function() {
                var cod_artigo = $(this).val();
                if (cod_artigo == 0) {
                    $('#tamanho').html('<option value="0">Selecione um código artigo</option>');
                    $('#cor').html('<option value="0">Selecione um código artigo</option>');
                } else {
                    $.ajax({
                        type: 'POST',
                        url: 'get_tamanhos.php',
                        data: {cod_artigo: cod_artigo},
                        success: function(data) {
                            $('#tamanho').html(data);
                        }
                    });
                }
            });

            $('#tamanho').on('change', function() {
                var cod_artigo = $('#cod_artigo').val();
                var tamanho = $(this).val();
                if (tamanho == 0) {
                    $('#cor').html('<option value="0">Selecione um tamanho</option>');
                } else {
                    $.ajax({
                        type: 'POST',
                        url: 'get_cor.php',
                        data: {cod_artigo: cod_artigo, tamanho: tamanho},
                        success: function(data) {
                            $('#cor').html(data);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>