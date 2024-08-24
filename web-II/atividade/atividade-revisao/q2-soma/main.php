<?php

    $x = readline("Digite o Valor inicial: ");
    $y = readline("Digite o Valor Final: ");
    $soma = 0;

    if ($x < $y) {
        for ($i = $x + 1; $i < $y; $i++) { 
            if ($i % 2 != 0) {
                $soma += $i;
            }
        }
    } else {
        for ($i = $y + 1; $i < $x; $i++) { 
            if ($i % 2 != 0) {
                $soma += $i;
            } 
        }
    }
    
    echo $soma;

?>