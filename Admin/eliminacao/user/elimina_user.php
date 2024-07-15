<?php
$num = $_GET['num'];
$serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
$db = new PDO("sqlsrv:server=$serverName;Database=JFA_Amostras", "", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $sql = "DELETE FROM Users WHERE Id=?";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $num);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Erro ao excluir o registro.";
    }
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>