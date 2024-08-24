<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Questão 02</title>
    </head>
    <body> 
        <h1>
            <?php
                function potencial($base, $expoente){
                    $resultado = $base;
                    for($i = 1; $i < $expoente; $i++){
                        $resultado *= $base;
                    }
                    return $resultado;
                }
                echo "O resultado da potência proposta é: " . potencial(3,3);
            ?>
        </h1>       
    </body>
</html>