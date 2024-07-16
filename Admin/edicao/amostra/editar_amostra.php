<?php
    $cor = $_GET['cor'];
    $tamanho = $_GET['tamanho'];
    $cod_artigo=$_GET['cod_artigo'];
    
    $serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM Amostras WHERE Cor ='$cor' AND Tamanho = '$tamanho' AND Cod_Artigo = '$cod_artigo'";
    $fichas= $db ->query($sql);
	$nun=$fichas->fetch();
?>

    <html>
    <head>
        <link rel="shortcut icon" href="https://www.jfa.pt/wp-content/themes/tema-jfa/img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="/JFA/Admin/edicao/user/edita_user.css">
        <title>Editar User</title>
    </head>
    <body>
        
        <div class="caixa" style="display: flex; flex-direction: column;">
            <div class="background">
                <form  class="background" style="border:none; width:100%">
                    <h1>Editar dados User </h1>
                    Cor: <input class="valorId" name="cor" value="<?php echo $nun['Cor']; ?>" readonly>
                    Tamanho: <input class="valores" name="tamanho" type="text" value="<?php echo $nun['Tamanho']; ?>" required></input>
                    Código Artigo: <input class="valores" name="cod_artigo" type="text" value="<?php echo $nun['Cod_Artigo']; ?>" required></input>
                    Descrição: <input class="valores" type="text" name="descicao" value="<?php echo $nun['Descricao']; ?>"></input required>
                    Gramagem <input class="valores" type="text" name="gramagem" value="<?php echo $nun['Gramagem']; ?>" required></input>
                    Cliente <input class="valores" type="text" name="cliente" value="<?php echo $nun['Cliente']; ?>" required></input>
                    Imagem: <input class="valores" type="text" name="imagem" value="<?php echo $nun['Imagem']; ?>"required ></input>
                    JFA: <input class="valores" type="text" name="jfa" value="<?php echo $nun['Jfa']; ?>"required ></input>
                    Visível: <input class="valores" type="text" name="visivel" value="<?php echo $nun['visivel']; ?>"required ></input>
                    Cod_Cliente: <input class="valores" type="text" name="cod_cliente" value="<?php echo $nun['Cod_Cliente']; ?>"required ></input>
                    <button type="submit">Guardar alterações</button>
                    <a href="/JFA/Admin/admin.php">Voltar</a>

                    <input type="hidden" name="cor_antigo" value="<?php echo $nun['Cor']?>">
                    <input type="hidden" name="tamnho_antigo" value="<?php echo $nun['Tamanho']?>">
                    <input type="hidden" name="cod_artigo" value="<?php echo $nun['Cod_Artigo']; ?>">
                </form>
            </div>
        </div>
    </body>
    </html>


<!-- action="guardaEdita_user.php?id=<?php echo $ficha['Id']; ?>" method="POST" -->