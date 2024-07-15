<?php
    $id = $_GET['editar'];
    $serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM Users WHERE Id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $ficha = $stmt->fetchAll();
    $ficha = $ficha[0]; // Obter a primeira linha

?>

<html>
<head>
    <link rel="shortcut icon" href="https://www.jfa.pt/wp-content/themes/tema-jfa/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/JFA/Admin/edicao/user/edita_user.css">
    <title>Editar User</title>
</head>
<body>
    
    <div class="caixa" style="display: flex; flex-direction: column;">
        <div class="background">
            <form action="guardaEdita_user.php?id=<?php echo $ficha['Id']; ?>" method="POST" class="background" style="border:none; width:100%">
                <input type="hidden" name="id" value="<?php echo $ficha['Id']; ?>">
                <h1>Editar dados User </h1>
                ID: <input class="valorId" name="id" value="<?php echo $ficha['Id']; ?>" readonly>
                Email: <input class="valores" name="email" type="text" value="<?php echo $ficha['Email']; ?>" required></input>
                Password: <input class="valores" name="password" type="text" value="<?php echo $ficha['Password']; ?>" required></input>
                Nome: <input class="valores" type="text" name="nome" value="<?php echo $ficha['Nome']; ?>"></input required>
                Privilégio: <input class="valores" type="text" name="privilegio" value="<?php echo $ficha['Privilegio']; ?>" required></input>
                Código Cliente: <input class="valores" type="text" name="cod_cliente" value="<?php echo $ficha['Cod_Cliente']; ?>" required></input>
                Contacto: <input class="valores" type="text" name="contacto" value="<?php echo $ficha['Contacto']; ?>"></input>
                <button type="submit">Guardar alterações</button>
                <a href="/JFA/Admin/admin.php">Voltar</a>
            </form>
        </div>
    </div>
</body>
</html>