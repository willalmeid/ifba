<?php

    $SomaImpar = 0;
    $SomaPar = 0;
    $QuantidadePar = 0;
    $QuantidadeImpar = 0;
    $MaiorPar = 0;
    $MenorImpar = 1;
    $i = 1;

    while ($i > 0){
        $i = readline("Digite um número (negativo para parar): \n");
        if ($i > 0 && $i%2 == 0){
            $QuantidadePar++;
            $SomaPar += $i;
            if ($MaiorPar < $i){
                $MaiorPar = $i;
            }
        }
        else if ($i > 0 && $i%2 != 0){
            $QuantidadeImpar++;
            $SomaImpar += $i;
            if ($MenorImpar > $i){
                $MenorImpar = $i;
            }
        }
    }
    
    echo "A média dos valores PARES são: " . $SomaPar/$QuantidadePar;
    echo "\n A média dos valores IMPARES são: " . $SomaImpar/$QuantidadeImpar;
    echo "\n O maoir número par digitado foi: " . $MaiorPar;
    echo "\n O menor número ímpar digitado foi: " . $MenorImpar;

?>