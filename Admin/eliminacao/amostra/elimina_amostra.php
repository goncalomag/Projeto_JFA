<?php
$cor = $_GET['cor'];
$tamanho = $_GET['tamanho'];
$cod_artigo = $_GET['cod_artigo'];

$serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
$db = new PDO("sqlsrv:server=$serverName;Database=JFA_Amostras", "", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $sql = "DELETE FROM Amostras WHERE Cor=? AND Tamanho = ? AND Cod_Artigo = ?";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $cor);
    $stmt->bindParam(2, $tamanho);
    $stmt->bindParam(3, $cod_artigo);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $mensagem = "Registo eliminado com sucsso";
        $urlRedirecionamento = "/JFA/Admin/admin.php";
    } else {
        $mensagem = "Algo correu mal...";
        $urlRedirecionamento = "/JFA/Admin/Admin.php";
    }
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>
<head>
<link rel="shortcut icon" href="https://www.jfa.pt/wp-content/themes/tema-jfa/img/favicon.ico" type="image/x-icon">
<title>Elimanar Amostra</title>
</head>
<script>
        alert("<?= $mensagem?>");
        window.location.href = "<?= $urlRedirecionamento?>";
    </script>
<?php
?>