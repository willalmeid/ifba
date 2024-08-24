<?php

    for ($i = 0; $i <=999; $i++){
        $user = readline("Digite um Número: ");
        echo "\n" . $user**2 . "\n";
        if ($user % 6 == 0){
            $i = 999;
        }
    }

?>