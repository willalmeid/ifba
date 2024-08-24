<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Questão 01</title>
    </head>
    <body>
        <h1> 
            <?php
                function retornarMaior($a, $b) {
                    if ($a > $b) {
                        return $a;
                    } else {
                        return $b;
                    }
                }
                echo "O numero maior é: " . retornarMaior(3,4);
            ?>
        </h1>  
    </body>
</html>