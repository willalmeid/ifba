<?php

    for ($i = 0; $i <=5; $i++){
        $user0 = readline("Digite um número: \n");
        $user1 = readline("Digite um número: \n");

        if ($user0 > 0 && $user1 > 0){
            if ($user0 < $user1){
                for ($j = $user0; $j <= $user1; $j++){
                    if ($j%2 ==0){
                        echo "$j \n";
                    }
                }
            }
            else if ($user0 > $user1){
                $espaço = $user0;
                $user0 = $user1;
                $user1 = $espaço;
                $k = $user0;
                while ($k <= $user1){
                    if ($k%2 ==0){
                        echo "$k \n";
                        $k+=2;
                    }
                }
            }
        }
        else {
            echo "VALOR INVÁLIDO!! TENTE NOVAMENTE.";
            $i--;
        }
    }
?>