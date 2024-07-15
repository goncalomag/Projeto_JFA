<?php
    $id = $_POST['id'];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $nome = $_POST["nome"];
    $privilegio = $_POST["privilegio"];
    $cod_cliente = $_POST["cod_cliente"];
    $contacto = $_POST["contacto"];

    $serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE Users SET
        Email=:email,
        Password=:password,
        Nome=:nome,
        Privilegio=:privilegio,
        Cod_Cliente=:cod_cliente,
        Contacto=:contacto
        WHERE Id=:id";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':privilegio', $privilegio);
        $stmt->bindParam(':cod_cliente', $cod_cliente);
        $stmt->bindParam(':contacto', $contacto);

        $resultado = $stmt->execute();

        if ($resultado) {
            header("location:/JFA/Edicao/EdicaoSucesso.html");;
        } else {
            header("location:/JFA/Edicao/ErroEdicao.html");;
        }
    ?>
