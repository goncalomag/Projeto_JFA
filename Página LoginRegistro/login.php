<?php
    $serverName ="DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO ("sqlsrv:server=$serverName ; Database=JFA_Amostras","","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $email=$_POST['Email_Login'];
    $password=$_POST['Password_Login'];   

    $query="SELECT * FROM Users WHERE Email=? AND Password=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$email, $password]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        header("location:/JFA/Página LoginRegistro/Login_Sucesso.html");;
    } else {
        header("location:/JFA/Página LoginRegistro/Login_Erro.html");;
    }
?>