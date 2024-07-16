<?php
    $id=$_GET['id'];

    $serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
        $db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM Users";
        $fichas = $db->QUERY($sql);
?>


<script>
    function sim(){
        window.location.href = "/JFA/Admin/eliminacao/user/elimina_user.php?id=<?php echo $id ?>";
    }

    function nao(){
        window.location.href = "/JFA/Admin/admin.php";
    }
</script>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="https://www.jfa.pt/wp-content/themes/tema-jfa/img/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/JFA/Admin/eliminacao/user/style.css">
    <title>Eliminar User | Confirmação</title>
</head>
<body>
    <div class="caixa" style="display: flex; flex-direction: column;">
        <div class="background">
            <h2>Tem que certeza que pretende eliminar estes dados?</h2>
            <h4>Depois de confirmar não irá ter maneira de recuperar os dados</h4>
            <div class="botoes">
                <button id="nao"onclick="nao()">Cancelar</button>
                <button id="sim" type="submit" onclick="sim()">Eliminar</button>
            </div>
        </div>
    </div>
</body>
</html>