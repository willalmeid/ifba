<?php
    $entrega = readline("Digite a data de entrega: ");
    $datafinal = readline("Digite a data final: ");

    if ($entrega < $datafinal - 3){
        echo "Muito bem! Apresenta antes do Natal!";
    }
    else if ($entrega == $datafinal || $entrega == $datafinal - 1 || $entrega == $datafinal - 2){
        echo "Ops, acho que alguém vai ter que refazer! \n";
        if ($datafinal + 2 <= 24){
            echo "TCC Apresentado!";
        }
        else {
            echo "Fail! Então é nataaaaal!";
        }
    }
    else {
        echo "Não deu!";
    }
?> 
