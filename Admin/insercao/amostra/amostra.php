<?php
    $serverName ="DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO ("sqlsrv:server=$serverName ; Database=JFA_Amostras","","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $cor=$_POST['cor'];
    $tamanho=$_POST['tamanho'];   
    $cod_artigo=$_POST['cod_artigo'];
    $descricao=$_POST['descricao'];
    $gramagem=$_POST['gramagem'];
    $cliente=$_POST['cliente'];
    $imagem=$_POST['imagem'];
    $jfa=$_POST['jfa'];
    $visivel=$_POST['visivel'];
    $cod_cliente=$_POST['cod_cliente'];

    $query="INSERT INTO Amostras(Cor,Tamanho,Cod_Artigo,Descricao,Gramagem,Cliente,Imagem,Jfa,Visivel,Cod_Cliente) VALUES ('$cor','$tamanho','$cod_artigo','$descricao','$gramagem','$cliente','$imagem','$jfa','$visivel','$cod_cliente')";
    $stmt = $db->prepare($query);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $mensagem = "Registo inserido com sucesso";
        $urlRedirecionamento = "/JFA/Admin/admin.php";
    } else {
        $mensagem = "Algo correu mal...";
        $urlRedirecionamento = "/JFA/Admin/Insercao/amostra/amostra.html";
    }
    
    ?>
    <script>
        alert("<?= $mensagem?>");
        window.location.href = "<?= $urlRedirecionamento?>";
    </script>
    <?php
?>

