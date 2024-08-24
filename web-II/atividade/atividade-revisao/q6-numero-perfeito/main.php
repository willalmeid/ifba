<?php

    $n = readline("Digite o Número: ");
    $soma = 0;

    for ($i = 1; $i < $n; $i++) { 
        if ($n % $i == 0){
            $soma += $i;
        }
    }

    if ($soma == $n) {
        echo "O número " . $n . " é perfeito";
    } else {
        echo "O número " . $n . " não é perfeito";
    }

?>