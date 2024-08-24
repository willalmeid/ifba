<?php

    echo "|---------------------------------------|\n";
    echo " Codigo  Especificação            Preço   \n";
    echo "\t1     Cachorro Quente        R$ 4,00  \n";
    echo "\t2     X-Salada               R$ 4,50  \n";
    echo "\t3     X-Bacon                R$ 5,00  \n";
    echo "\t4     Torrada Simples        R$ 2,00  \n";
    echo "\t5     Refrigerante           R$ 1,50  \n";
    echo "|---------------------------------------|\n";


    $item  = readline ("Digite o código do item que você quer:  \n");
    $quantidade = readline ("Digite a quantidade do item escolhido: \n");
    $valor;

    switch ($item) {
        case '1':
            $valor = 4.00 * $quantidade;
            break;
        case '2':
            $valor = 4.50 * $quantidade;
            break;
        case '3':
            $valor = 5.00 * $quantidade;
            break;
        case '4':
            $valor = 2.00 * $quantidade;
            break;
        case '5':
            $valor = 1.5 * $quantidade;
            break;
        default:
            echo "VALOR INVÁLIDO!";
        }

        echo "Total: R$ ".round($valor, 2);
?>