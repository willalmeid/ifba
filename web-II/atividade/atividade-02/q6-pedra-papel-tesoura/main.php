<?php
    $usuario = readline("0 -> pedra, 1 -> tesoura, 2 -> papel \n Digite seu número: \n");
    $mao2 = rand(0, 2);
    
    echo "Usuario: " . $usuario . "\n";
    echo "Aleatorio: " . $mao2 . "\n";

    if ($usuario == $mao2){
        echo "Empate";
    }
    else if ($usuario - 1 == $mao2 || $usuario + 2 == $mao2){
        echo "Derrota";
    }
    else {
        echo "Vitória";
    }
?>