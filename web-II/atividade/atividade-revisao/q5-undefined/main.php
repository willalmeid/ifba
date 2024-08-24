<?php

    $n = readline("Digite o número correspondente ao tamanho: ");
    $posição = 0;

    for ($i = 0; $i < $n; $i++){
        $qtd = 0;
        for ($j = 0; $j != $i; $j++) { 
            echo "* \t";
            $qtd++;
        }

        echo "+ \t";
        $posição = $qtd + 1;
        
        for ($k = $posição; $k < 5; $k++){
            echo "* \t";
        }
        echo "\n";
    }

?>