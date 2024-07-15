<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/JFA/navBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> <!--Link Icons - https://fontawesome.com/icons -->
    <link rel="stylesheet" href="/JFA/HomePage/buttonDark/styleDark.css">
    <script src="/JFA/Admin/VoltaTopo.js"></script>
    <link rel="shortcut icon" href="https://www.jfa.pt/wp-content/themes/tema-jfa/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/JFA/Admin/style.css">
    <title>JF Almeida | Admin</title>




</head>

<body>
    <input type="checkbox" id="check">
    <nav>
        <a href="/JFA/index.html" id="logo"><img src="/JFA/HomePage/imagens/logo.png" id="logo"></a>
        <div class="search_box">
            <input type="search" placeholder="Pesquisa" id="search">
            <span class="fa-solid fa-search" id="lupa"></span>
        </div>

        <ol>
            <div class="botaoDark">
                <div class="trigger" id="trigger">
                    <div class="indicador"></div>
                </div>
                <script src="/JFA/HomePage/buttonDark/mainDark.js"></script>
            </div>
            <li>
                <select class="section" id="select">
                    <option id="option1">PT</option>
                    <option id="option2">EN</option>
                </select>
            </li>
            <li><a href="/JFA/Amostra/index.html"><i class="fa-solid fa-rug"></i> | Amostras</a></li>
            <li><a href="https://www.jfa.pt/pt/" target="_blank"><i class="fa-solid fa-globe"></i> | Empresa </a></li>
            <li><a href="/JFA/Página LoginRegistro/index.html"><i class="fa-solid fa-user"></i> | Login</a></li>
        </ol>
        </div>
        <label for="check" class="bar">
            <span class="fa-solid fa-bars" id="bars"></span>
            <span class="fa fa-times" id="times"></span>
        </label>
    </nav>

    <div class="containers">
        <div class="containerSideNav">
            <button class="operacao" id="botaoA">Users</button>
            <button class="operacao" id="botaoB">Amostras</button>
            <button class="operacao">Amostras/Clientes</button>
            <button class="operacao">Características</button>
            <button class="operacao">Curiosidades</button>
            <button class="operacao">Imagens</button>
            <button class="operacao">Materiais</button>
            <button class="operacao">Stock</button>
        </div>

        <div class="containerTabela">
            <div class="tabela_user" id=tabela_users style="display: none;">

                <?php
                $serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
                $db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT * FROM Users";
                $fichas = $db->QUERY($sql);
                ?>

                <center>
                    <h1>Tabela Users</h1>
                    <br>
                    <button class="botaotabela" onclick="registro()">Adicionar User</button>
                    <br><br>
                    <table width="100%" border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; border: 1px solid #ddd; font-family: Arial, sans-serif;">
                        <tr style="background-color: #ffa500;">
                            <th style="width: 5%; text-align: center;">ID</th>
                            <th style="width: 20%; text-align: center;">Email</th>
                            <th style="width: 15%; text-align: center;">Password</th>
                            <th style="width: 20%; text-align: center;">Nome</th>
                            <th style="width: 10%; text-align: center;">Privilégio</th>
                            <th style="width: 10%; text-align: center;">Código Cliente</th>
                            <th style="width: 10%; text-align: center;">Contacto</th>
                            <th style="width: 10%; text-align: center;">Ações</th>
                        </tr>
                        <?php while ($fic = $fichas->fetch()) { ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $fic['Id'] ?></td>
                                <td style="text-align: center;"><?php echo $fic['Email'] ?></td>
                                <td style="text-align: center;"><?php echo $fic['Password'] ?></td>
                                <td style="text-align: center;"><?php echo $fic['Nome'] ?></td>
                                <td style="text-align: center;"><?php echo $fic['Privilegio'] ?></td>
                                <td style="text-align: center;"><?php echo $fic['Cod_Cliente'] ?></td>
                                <td style="text-align: center;"><?php echo $fic['Contacto'] ?></td>
                                <td style="text-align: center;">
                                    <a href="/JFA/Admin/edicao/user/editar_user.php?editar=<?php echo $fic['Id'] ?>">Editar </a>
                                    <a href="/JFA/Admin/eliminacao/user/confirmaEliminaUser.php?num=<?php echo $fic['Id'] ?>"> Eliminar</a>
                                </td>
                                <button class="scrollTop" onclick="voltaCima()">
                                    <img src="/JFA/Listagem/imagens/seta.png">
                                </button>
                            </tr>
                        <?php } ?>
                    </table>
                    <br><br>
                    
                </center>
                
            </div>

            <div class="tabela_amostra" id=tabela_amostras style="display: none;">
                <?php
                $serverName = "DESKTOP-LABNRLV\SQLEXPRESS";
                $db = new PDO("sqlsrv:server=$serverName ; Database=JFA_Amostras", "", "");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT * FROM Amostras";
                $fichas = $db->QUERY($sql);
                ?>

                <center>
                    <h1>Tabela Amostras</h1>
                    <table width="100%" border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; border: 1px solid #ddd; font-family: Arial, sans-serif;">

                        <tr style="background-color: #ffa500;">
                            <th style="width: 5%; text-align: center;">Cor</th>
                            <th style="width: 20%; text-align: center;">Tamanho</th>
                            <th style="width: 15%; text-align: center;">Código Artigo</th>
                            <th style="width: 50%; text-align: center;">Descrição</th>
                            <th style="width: 10%; text-align: center;">Gramagem</th>
                            <th style="width: 10%; text-align: center;">Cliente</th>
                            <th style="width: 10%; text-align: center;">Imagem</th>
                            <th style="width: 10%; text-align: center;">JFA</th>
                            <th style="width: 10%; text-align: center;">Visível</th>
                            <th style="width: 10%; text-align: center;">Código Cliente</th>
                            <th style="width: 10%; text-align: center;">Ações</th>
                        </tr>

                        <?php while ($fic = $fichas->fetch()) { ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $fic['Cor']; ?></td>
                                <td style="text-align: center;"><?php echo $fic['Tamanho']; ?></td>
                                <td style="text-align: center;"><?php echo $fic['Cod_Artigo']; ?></td>
                                <td style="text-align: center;"><?php echo $fic['Descricao']; ?></td>
                                <td style="text-align: center;"><?php echo $fic['Gramagem']; ?></td>
                                <td style="text-align: center;"><?php echo $fic['Cliente']; ?></td>
                                <td style="text-align: center;"><?php echo $fic['Imagem']; ?></td>
                                <td style="text-align: center;"><?php echo $fic['Jfa']; ?></td>
                                <td style="text-align: center;"><?php echo $fic['Visivel']; ?></td>
                                <td style="text-align: center;"><?php echo $fic['Cod_Cliente']; ?></td>
                                <td style="text-align: center;">
                                    <a href="#">Editar</a>
                                    <a href="#">Eliminar</a>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
                    <br>
                    <button id="botaotabela" onclick="registro()">Adicionar User</button>
                </center>
            </div>


            <head>
                <script src="./script.js"></script>
            </head>


            <!-- Não apagar pf -->
            <!-- "href="/JFA/Admin/edicao/editar_user.php?editar=<?php echo $fic['Id'] ?>" -->