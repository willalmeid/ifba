<?php
    $numero = readline("Digite um número");
    if ($numero % 2 == 0) {
        $numero = $numero / 2;
    } else {
        $numero = 3 * $numero + 1;
    }
    echo $numero;
?>