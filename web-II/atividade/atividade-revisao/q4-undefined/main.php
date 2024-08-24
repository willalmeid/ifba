<?php

    $denominador = 1;

    for ($numerador = 1; $numerador <= 39; $numerador += 2){
        $soma += $numerador / $denominador;
        $denominador *= 2;
    }

    echo substr((string)$soma, 0, 4);

?>