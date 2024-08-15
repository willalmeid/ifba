<?php 

    session_start();

    if (!isset($_SESSION['user_name'])) {
        header('Location: index.php');
        exit();
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location: index.php');
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopie</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./estilo/style-header.css">
    <style>
        .link-home {
            text-decoration: none; color: white;
        }

        .link-home:hover {
            color: white;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>
    <header>
        <div class="container-header">
            <div class="container-header-name">
                <h1><a href="principal.php" class="link-home">Shopie</a></h1>
            </div>
            <div class="container-header-botao">
                <a href="checkout.php"><span class="material-symbols-outlined">shopping_cart</span></a>
                <a href="?logout=1"><span class="material-symbols-outlined">logout</span></a>
            </div>
        </div>
    </header>