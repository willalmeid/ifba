<?php
    $numeroa = readline("Digite a primeita aresta");
    $numerob = readline("Digite a segunda aresta");
    $numeroc = readline("Digite a terceira aresta");

    if ($numeroa + $numerob > $numeroc && $numerob + $numeroc > $numeroa && $numeroa + $numeroc > $numerob){
        if ($numeroa == $numerob && $numerob == $numeroc){
            echo "É um triangulo EQUILÁTERO";
        }
        else if ($numeroa != $numerob && $numerob != $numeroc && $numeroc != $numeroa){
            echo "É um triangulo ESCALENO";
        }
        else 
            echo "É um triangulo ISÓCELIS";
    }
    else {
        echo "Não é um triangulo";
    }
?>
