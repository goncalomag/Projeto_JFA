<?php
    $serverName ="DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO ("sqlsrv:server=$serverName ; Database=JFA_Amostras","","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $email=$_POST['email'];
    $password=$_POST['password'];   
    $nome=$_POST['nome'];
    $privilegio=$_POST['privilegio'];
    $cod_cliente=$_POST['cod_cliente'];
    $contacto=$_POST['contacto'];

    $query="INSERT INTO Users(Email,Password,Nome,Privilegio,Cod_Cliente,Contacto) VALUES ('$email','$password','$nome','$privilegio','$cod_cliente','$contacto')";
    $stmt = $db->prepare($query);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $mensagem = "Registo inserido com sucesso";
        $urlRedirecionamento = "/JFA/Admin/admin.php";
    } else {
        $mensagem = "Algo correu mal...";
        $urlRedirecionamento = "/JFA/Admin/Insercao/user/user.html";
    }
    
    ?>
    <script>
        alert("<?= $mensagem?>");
        window.location.href = "<?= $urlRedirecionamento?>";
    </script>
    <?php



/* email
password
nome
privilegio
cod_cliente
contacto  */