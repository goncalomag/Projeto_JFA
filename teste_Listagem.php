<?php
    $serverName ="DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO ("sqlsrv:server=$serverName ; Database=JFA_Amostras","","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $Cor = "";
    $Tamanho = "";
    $Cod_Artigo = "";
    $Descricao = "";
    $Gramagem = "";
    $Cliente = "";
    $Ficheiro="";
    $Imagem = "";
    $Jfa = "";
    $Visivel = "";
    $Cod_Cliente = "";

    // Executar consulta SQL para obter todos os campos da tabela
    $sql = "SELECT a.Cor, a.Tamanho, a.Cod_Artigo, a.Descricao, a.Gramagem, a.Cliente,a.Imagem, i.Ficheiro, a.Jfa, a.Visivel, a.Cod_Cliente
            FROM Amostras a
            JOIN Imagens i ON a.Imagem = i.Id";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    // Imprimir cada linha do resultado na tela
    while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
        $Cor = $row['Cor'];
        $Tamanho = $row['Tamanho'];
        $Cod_Artigo = $row['Cod_Artigo'];
        $Descricao = $row['Descricao'];
        $Gramagem = $row['Gramagem'];
        $Cliente = $row['Cliente'];
        $Ficheiro = $row['Ficheiro'];
        $Imagem = $row['Imagem'];
        $Jfa = $row['Jfa'];
        $Visivel = $row['Visivel'];
        $Cod_Cliente = $row['Cod_Cliente'];

        // Create a div for each record
        ?>
        <div class="content">
            <img src="<?php echo $Ficheiro?>">
            <h3><?php echo $Tamanho?></h3>
            <p><?php echo $Descricao?></p>
            <h6><?php echo $Cor?></h6>
            <button class="VerMais" onclick="muda()"> Ver Mais</button>
        </div>
        <?php
    }
?>
<head><link rel="stylesheet" href="/JFA/Listagem/styleAmostras.css"></head>