<?php

    $user = readline("Digite a quantidade de termos a ser calculada: ");
    $Numerador = 2;
    $Denominador = 1;
    $Soma = 0;
    $Espaço = 0;

    for ($i = 1; $i <=$user; $i++){
        $Soma += ($Numerador/$Denominador);
        $Espaço = $Numerador;
        $Numerador += $Denominador;
        $Denominador = $Espaço;
    }

    echo "A Soma das frações com a quantidade de termos escolhida é: $Soma";
?>