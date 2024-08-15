<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo/style-resultado.css">
        <link rel="shortcut icon" href="./estilo/favicon.ico" type="image/x-icon">
        <title>MyNetflix</title>
    </head>
    <body>
        <header>
            <?php
                include "header.php";
            ?>
        </header>
        <main>
            <div class="container">
                <div class="for-img">
                    <img src="<?php echo $_POST['foto'] ?>" alt="">
                </div>
                <div class="for-dados">
                    <div id="title">
                        <?php echo "<span>" . $_POST['id'] . " - " . $_POST['nome'] . "</span>"; ?>
                    </div>
                    <div id="dados">
                        <?php
                            echo "<span>" . "<strong>" . "Data de Lançamento:  " . "</strong>" . $_POST['lancamento'] . "</span>";
                            echo "<span>" . "<strong>" . "Gênero:   " . "</strong>" . $_POST['genero'] . "</span>";
                            echo "<span>" . "<strong>" . "Diretores:   " . "</strong>" . $_POST['diretores'] . "</span>";
                            echo "<span>" . "<strong>" . "Roteiristas:   " . "</strong>" . $_POST['roteiristas'] . "</span>";
                            echo "<span>" . "<strong>" . "Bilheteria:   " . "</strong>" . $_POST['bilheteria'] . "</span>";
                            echo "<span>" . "<strong>" . "Orçamento:   " . "</strong>" . $_POST['orcamento'] . "</span>";
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php
                include "footer.php";
            ?>
        </footer>
    </body>
</html>