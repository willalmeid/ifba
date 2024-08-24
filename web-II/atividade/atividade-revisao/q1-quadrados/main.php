<?php
    
    $N = readline("Digite um Valor: ");

    if ($N > 5 && $N < 2000){
        for ($i = 2; $i <= $N; $i+=2){
            $Quadrado = $i**2;
            echo $Quadrado . " ";
        }
    }

?>