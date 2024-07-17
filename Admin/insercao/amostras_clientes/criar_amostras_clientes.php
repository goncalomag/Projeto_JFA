<?php
    $serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM Users";
    $sql2 = "SELECT * FROM Amostras";

    $users = $db->query($sql);
    $amostras = $db->query($sql2);
    $amostras2 = $db->query($sql2);
    $amostras3 = $db->query($sql2);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.jfa.pt/wp-content/themes/tema-jfa/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/JFA/Admin/insercao/amostras_clientes/style.css ">
    <title>Inserir Amostra/Cliente</title>
</head>

<body>
    <div class="caixa" style="display: flex; flex-direction: column;">
        <div class="background">
            <form action="amostras_clientes.php" method="POST" class="background" style="border:none; width:100%">
                <h1>Inserir Amostra/Cliete</h1>
                ID: <select class="valores" name="id" required>
                        <option value="0">Selecione</option>
                        <?php while($user=$users->fetch()) {?>
                            <option value="<?php  echo $user['Id']?>"><?php echo $user['Nome'] ?></option>
                        <?php } ?>  
                    </select>
                Código Artigo:  <select class="valores" name="cod_artigo" required>
                                    <option value="0">Selecione</option>
                                    <?php while($amostra=$amostras->fetch()) {?>
                                        <option value="<?php  echo $amostra['Cod_Artigo']?>"><?php echo $amostra['Cod_Artigo'] ?></option>
                                    <?php } ?>  
                                </select>
                Tamanho:        <select class="valores" name="tamanho" required>
                                    <option value="0">Selecione</option>
                                    <?php while($amostra2=$amostras2->fetch()) {?>
                                        <option value="<?php  echo $amostra2['Tamanho']?>"><?php echo $amostra2['Tamanho'] ?></option>
                                    <?php } ?>  
                                </select>
                Cor:            <select class="valores" name="cor" required>
                                    <option value="0">Selecione</option>
                                    <?php while($amostra3=$amostras3->fetch()) {?>
                                        <option value="<?php  echo $amostra3['Cor']?>"><?php echo $amostra3['Cor'] ?></option>
                                    <?php } ?>  
                                </select>
                <button type="submit">Adicionar</button>
                <a href="/JFA/Admin/admin.php">Voltar</a>
            </form>
        </div>
    </div>
</body>

</html>