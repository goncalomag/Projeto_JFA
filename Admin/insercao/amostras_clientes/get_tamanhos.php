<?php
    $serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $cod_artigo = $_POST['cod_artigo'];

    $sql = "SELECT DISTINCT Tamanho FROM Amostras WHERE Cod_Artigo = '$cod_artigo'";
    $tamanhos = $db->query($sql);

    echo '<option value="0">Selecione</option>';
    while($tamanho = $tamanhos->fetch()) {
        echo '<option value="'. $tamanho['Tamanho']. '">'. $tamanho['Tamanho']. '</option>';
    }
?>