<?php
$num = $_GET['id'];
$serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
$db = new PDO("sqlsrv:server=$serverName;Database=JFA_Amostras", "", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $sql = "DELETE FROM Users WHERE Id=?";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $num);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $mensagem = "Registo eliminado com sucsso";
        $urlRedirecionamento = "/JFA/Admin/admin.php";
    } else {
        $mensagem = "Algo correu mal...";
        $urlRedirecionamento = "/JFA/Admin/Insercao/user.html";
    }
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>
<head>
<link rel="shortcut icon" href="https://www.jfa.pt/wp-content/themes/tema-jfa/img/favicon.ico" type="image/x-icon">
<title>Elimanar User</title>
</head>
<script>
        alert("<?= $mensagem?>");
        window.location.href = "<?= $urlRedirecionamento?>";
    </script>
<?php
?>