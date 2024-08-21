<?php

    session_start();
    include('config-mysqli.php');

    if (!isset($_SESSION['user'])) {
        header("Location: index.php");
        exit();
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location: index.php');
        exit();
    }

    $sql_header = "SELECT img_profile, id_user FROM `troca-de-conhecimento`.`users` WHERE user = '".$_SESSION['user']."'" ; 
    $result_sql_header = $connection -> query($sql_header);
    extract($result_sql_header -> fetch_assoc());
?>
<!DOCTYPE html>
<html lang="pt-br" color-scheme: dark;>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="estilo/style-header.css">
</head>
<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1>Logo</h1>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="principal.php" class="nav-link">Principal</a></li>
                    <li class="nav-item"><a href="my-account.php" class="nav-link">Minha Conta</a></li>
                    <li class="nav-item"><button class="shearch" onclick="shearchShow()">Pesquisar</button></li> <!-- Fazer isso abrir um forms de pesquisa. -->
                </ul>
            </div>
            <div class="usuario">
                <button onclick="menuShow()"><img src="<?php echo $img_profile ?>" alt=""></button>
            </div>

            <div class="usuario-click">
                <a href="my-account.php">Minha Conta</a>
                <a href="edit-account.php?id=<?php echo $id_user ?>"> Editar Conta</a>
                <a href="?logout=1" id="logout">Sair</a>
            </div>
        </nav> 
        <div class="shearch-bar shearch-click">
            <form action="./principal.php" method="get">
                <input type="text" name="shearch" placeholder="Pesquise o que deseja encontar" required>
                <button type="submit">Pesquisar</button>
            </form>
        </div>
        <script src="script.js"></script>
    </header>