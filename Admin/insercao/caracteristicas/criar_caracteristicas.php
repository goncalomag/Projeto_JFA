<?php
    $serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM Imagens";
    $result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.jfa.pt/wp-content/themes/tema-jfa/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/JFA/Admin/insercao/amostra/amostra.css  ">
    <title>Inserir Amostra</title>
</head>
edeededu i edirf
<body>
    <div class="caixa" style="display: flex; flex-direction: column;">
        <div class="background">
            <form action="amostra.php" method="POST" class="background" style="border:none; width:100%">
                <h1>Inserir Amostra</h1>
                Cor: <input class="valores" name="cor" type="text" required></input>
                Tamanho: <input class="valores" name="tamanho" type="text" required></input>
                Código Artigo: <input class="valores" type="text" name="cod_artigo" required></input>
                Descrição: <textarea class="valores" type="text" name="descricao" required></textarea>
                Gramagem: <input class="valores" type="text" name="gramagem" required></input>
                Cliente: <select class="valores" name="cliente" required>
                    <option value="S">Sim</option>
                    <option value="N">Não</option>
                </select>
                Imagem:<select class="valores" name="imagem">
                <?php while($imagem=$result->fetch()) {?>
                    <option value="<?php  echo $imagem['Id']?>"><?php echo $imagem['Nome'] ?></option>
                <?php } ?> 

                </select>
                JFA: <input class="valores" type="text" name="jfa" required></input>
                Visível: <select class="valores" name="visivel" required>
                    <option value="S">Sim</option>
                    <option value="N">Não</option>
                </select>
                Código Cliente: <input class="valores" type="number" name="cod_cliente" required></input>
                <br>
                <button type="submit">Adicionar</button>
                <a href="/JFA/Admin/admin.php">Voltar</a>
            </form>
        </div>
    </div>
</body>

</html>