<?php
// Conexão com o banco de dados
$serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
$db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Verifica se os parâmetros foram enviados
if (isset($_GET['cor']) && isset($_GET['tamanho']) && isset($_GET['cod_artigo'])) {
    $cor = $_GET['cor'];
    $tamanho = $_GET['tamanho'];
    $cod_artigo = $_GET['cod_artigo'];

    // Consulta SQL para buscar a amostra
    $sql = "SELECT * FROM Amostras WHERE Cor = :cor AND Tamanho = :tamanho AND Cod_Artigo = :cod_artigo";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':cor', $cor, PDO::PARAM_STR);
    $stmt->bindParam(':tamanho', $tamanho, PDO::PARAM_STR);
    $stmt->bindParam(':cod_artigo', $cod_artigo, PDO::PARAM_INT);
    $stmt->execute();

    $amostra = $stmt->fetch();

    if ($amostra !== false) {
        ?>
        <head>
            <link rel="shortcut icon" href="https://www.jfa.pt/wp-content/themes/tema-jfa/img/favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="/JFA/Admin/edicao/amostra/style.css">
            <title>Editar Amostra</title>
        </head>
        <div class="caixa" style="display: flex; flex-direction: column;">
            <div class="background">
                <form action="guardaEdita_amostra.php" method="post" class="background" style="border:none; width:100%">
                    <h1>Editar dados Amostra </h1>
                    Cor: <input class="valores" name="cor" type="text" value="<?php echo $amostra['Cor'];?>" required></input>
                    Tamanho: <input class="valores" name="tamanho" type="text" value="<?php echo $amostra['Tamanho'];?>"></input>
                    Código Artigo: <input class="valores" name="cod_artigo" type="text" value="<?php echo $amostra['Cod_Artigo'];?>" required></input>
                    Descrição: <textarea class="valores" name="descricao"><?php echo $amostra['Descricao'];?></textarea>
                    Gramagem: <input class="valores" name="gramagem" type="text" value="<?php echo $amostra['Gramagem'];?>"></input>
                    Cliente: <select name="cliente">
                                <option value="S" <?php if ($amostra['Cliente'] == 'S') echo 'selected';?>>Sim</option>
                                <option value="N" <?php if ($amostra['Cliente'] == 'N') echo 'selected';?>>Não</option>
                            </select>
                    Imagem: <input class="valores" name="imagem" type="text" value="<?php echo $amostra['Imagem'];?>"></input>
                    JFA: <input class="valores" name="jfa" type="text" value="<?php echo $amostra['Jfa'];?>"></input>
                    Visível: <select name="visivel">
                                <option value="S" <?php if ($amostra['Visivel'] == 'S') echo 'selected';?>>Sim</option>
                                <option value="N" <?php if ($amostra['Visivel'] == 'N') echo 'selected';?>>Não</option>
                            </select>
                    Código Cliente: <input class="valores" name="cod_cliente" type="text" value="<?php echo $amostra['Cod_Cliente'];?>" required></input>
                    <button type="submit">Editar Amostra</button>
                    <a href="/JFA/Admin/admin.php">Voltar</a>

                    <input class="valores" name="cor_antigo" type="hidden" value="<?php echo $amostra['Cor'];?>" readonly></input>
                    <input class="valores" name="tamanho_antigo" type="hidden" value="<?php echo $amostra['Tamanho'];?>" readonly></input>
                    <input class="valores" name="cod_artigo_antigo" type="hidden" value="<?php echo $amostra['Cod_Artigo'];?>" readonly></input>
                </form>
                <!-- <input class="valores" name="cliente" type="text" value="<?php echo $amostra['Cliente'];?>"></input> -->
            </div>
        </div>
        <?php
    } else {
        echo "Amostra não encontrada.";
    }
} else {
    echo "Parâmetros não enviados.";
}
?>
