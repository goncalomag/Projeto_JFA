<?php
$serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
$db = new PDO("sqlsrv:server=$serverName;Database=JFA_Amostras", "", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'];
$cod_artigo = $_POST['cod_artigo'];
$tamanho = $_POST['tamanho'];
$cor = $_POST['cor'];

if ($id == 0 || $cod_artigo == 0 || $tamanho == 0 || $cor == 0) {
    ?>
    <script>
        alert("Preencha todos os campos");
        window.location.href = "/JFA/Admin/insercao/amostras_clientes/criar_amostras_clientes.php";
    </script>
    <?php
} else {
    $stmt = $db->prepare("SELECT * FROM Amostras WHERE Cor = :cor AND Tamanho = :tamanho AND Cod_Artigo = :cod_artigo");
    $stmt->bindParam(':cor', $cor);
    $stmt->bindParam(':tamanho', $tamanho);
    $stmt->bindParam(':cod_artigo', $cod_artigo);
    $stmt->execute();
    $userCount = $stmt->rowCount();

    if ($userCount == 0) {
        $mensagem = "Não existe nenhuma amostra registrada com os dados inseridos | Verifique os dados";
        $urlRedirecionamento = "/JFA/Admin/insercao/amostras_clientes/criar_amostras_clientes.php";
    } else {
        $query = "INSERT INTO Amostras_Clientes (Id, Cod_Artigo, Tamanho, Cor) VALUES (:id, :cod_artigo, :tamanho, :cor)";
        $cria = $db->prepare($query);
        $cria->bindParam(':id', $id);
        $cria->bindParam(':cod_artigo', $cod_artigo);
        $cria->bindParam(':tamanho', $tamanho);
        $cria->bindParam(':cor', $cor);
        $cria->execute();
        if ($cria->rowCount() > 0) {
            $mensagem = "Registo inserido com sucesso";
            $urlRedirecionamento = "/JFA/Admin/admin.php";
        }
    }
    ?>
    <script>
        alert("<?php echo $mensagem; ?>");
        window.location.href = "<?php echo $urlRedirecionamento; ?>";
    </script>
    <?php
}
?>