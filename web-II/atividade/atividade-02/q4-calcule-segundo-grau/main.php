<?php
    $a = readline( "Digite o digito a: \n");
    $b = readline("\n Digite o digito b: \n");
    $c = readline("\n Digite o digito c: \n");

    $delta = ($b * $b) - 4 * $a * $c;
    $x1 = (-$b + sqrt($delta)) / 2 * $a;
    $x2 = (-$b - sqrt($delta)) / 2 * $a;

    if ($delta < 0){
        echo "Essa equação não possui raízes reais";
    }
    elseif ($delta == 0) {
        echo "Essa equação possui uma única raiz real: \n";
    }
    else {
        echo "Essa equa possui duas raizes reais: \n";
        echo "x1 = " . $x1;
        echo "\n x2 = " . $x2;
    }
?>