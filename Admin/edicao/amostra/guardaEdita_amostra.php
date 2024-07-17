<?php
/* cor | tamanho | cod_artigo | descricao | gramagem | cliente | imagem | jfa | visivel | cod_cliente | cor_antigo | cod_artigo_antigo */
    $cor = $_POST['cor'];
    $tamanho = $_POST["tamanho"];
    $cod_artigo = $_POST["cod_artigo"];
    $descricao = $_POST["descricao"];
    $gramagem = $_POST["gramagem"];
    $cliente = $_POST["cliente"];
    $imagem = $_POST["imagem"];
    $jfa = $_POST["jfa"];
    $visivel = $_POST["visivel"];
    $cod_cliente = $_POST["cod_cliente"];
    $cor_antigo = $_POST["cor_antigo"];
    $tamanho_antigo = $_POST["tamanho_antigo"];
    $cod_artigo_antigo = $_POST["cod_artigo_antigo"];

    $serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE Amostras SET
        Cor=:cor,
        Tamanho=:tamanho,
        Cod_Artigo=:cod_artigo,
        Descricao=:descricao,
        Gramagem=:gramagem,
        Cliente=:cliente,
        Imagem=:imagem,
        Jfa=:jfa,
        Visivel=:visivel,
        Cod_Cliente=:cod_cliente
        WHERE Cor=:cor_antigo AND Tamanho=:tamanho_antigo AND Cod_Artigo=:cod_artigo_antigo";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':tamanho', $tamanho);
        $stmt->bindParam(':cod_artigo', $cod_artigo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':gramagem', $gramagem);
        $stmt->bindParam(':cliente', $cliente);
        $stmt->bindParam(':imagem', $imagem);
        $stmt->bindParam(':jfa', $jfa);
        $stmt->bindParam(':visivel', $visivel);
        $stmt->bindParam(':cod_cliente', $cod_cliente);
        $stmt->bindParam(':cor_antigo', $cor_antigo);
        $stmt->bindParam(':tamanho_antigo', $tamanho_antigo);
        $stmt->bindParam(':cod_artigo_antigo', $cod_artigo_antigo);

        $resultado = $stmt->execute();

        if ($resultado) {
            header("location:/JFA/Edicao/EdicaoSucesso.html");;
        } else {
            header("location:/JFA/Edicao/ErroEdicao.html");;
        }
    ?>
