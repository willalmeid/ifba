<?php

    $soma = 0;
    $SomaPar = 0;
    $Quantidade = 0;
    $QuantidadePar = 0;
    $QuantidadeImpar = 0;

    do {
        $user = readline("Digite um número (0 para parar): \n");
        $soma += $user;
        $Quantidade++;

        if ($user%2 != 0){
            $QuantidadeImpar++;
        }
        else if ($user%2 == 0){
            $SomaPar += $user;
            $QuantidadePar++;
        }
    } while ($user != 0);

    $Quantidade --;
    $porcentagem = (100 * $QuantidadeImpar) / $Quantidade;

    echo "\n O valor de soma é: " . $soma;
    echo "\n A quantidade de números digitados: " . $Quantidade;
    echo "\n A media dos números digitados é: " . $soma/$Quantidade;
    echo "\n A media dos números pares são: " . $SomaPar/$QuantidadePar;
    echo "\n A porcentagem dos números ímpares é: " . $porcentagem ."%";
?>