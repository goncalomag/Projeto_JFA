<?php
    $serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $cod_artigo = $_POST['cod_artigo'];
    $tamanho = $_POST['tamanho'];

    $sql = "SELECT Cor FROM Amostras WHERE Cod_Artigo = '$cod_artigo' AND Tamanho = '$tamanho'";
    $cores = $db->query($sql);

    echo '<option value="0">Selecione</option>';
    while($cor = $cores->fetch()) {
        echo '<option value="'. $cor['Cor']. '">'. $cor['Cor']. '</option>';
    }
?>