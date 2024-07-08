<?php
    $serverName ="DESKTOP-LABNRLV\SQLEXPRESS";
    $db = new PDO ("sqlsrv:server=$serverName ; Database=JFA_Amostras","","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $email=$_POST['Email_Registo'];
    $password=$_POST['Password_Registo'];   
    $nome=$_POST['Nome_Registo'];
    $contacto=$_POST['Contacto_Registo'];

    $query="INSERT INTO Users(Email,Password,Nome,Privilegio,Cod_Cliente,Contacto) VALUES ('$email','$password','$nome','0','0','$contacto')";
    $stmt = $db->prepare($query);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header("location:/JFA/Página LoginRegistro/registo_sucesso.html");;
    } else {
        header("location:/JFA/Página LoginRegistro/registo_erro.html");
    }
;
?>