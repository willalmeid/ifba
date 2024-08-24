<?php

    $DDD = readline ("Informe o DDD: ");

    switch ($DDD) {
        case '61':
            echo "O DDD é de Brasília";
            break;
        case '71':
            echo "O DDD é de Salvador";
            break;
        case '11':
            echo "O DDD é de São Paulo";
            break;
        case '21':
            echo "O DDD é de Rio de Janeiro";
            break;
        case '32':
            echo "O DDD é de Juiz de Fora";
            break;
        case '19':
            echo "O DDD é de Campinas";
            break;
        case '27':
            echo "O DDD é de Vitória";
            break;
        case '31':
            echo "O DDD é de Belo Horizonte";
            break;
        default:
            echo "DDD não cadastrado";
        }
?>