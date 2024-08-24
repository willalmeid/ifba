<?php
    $tam = readline("Digite o tamanho do triangulo");
    $a = 0;

    for ($i = 0; $i <= $tam; $i++){
        for ($j = $tam - $a; $j != 0; $j--){
            echo " ";
        }
        $a++;
        for ($k = 1; $k <= 2*$i-1; $k++){
            echo "*";
        }
        echo "\n";
    }
?>