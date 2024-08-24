<?php

    $quant_de_cartas = readline("Digite a Quantidade de Cartas: \t");
    $numero_Aleatorio = rand(1, $quant_de_cartas);
    $tentativas = 0;
    
    for ($i = 0; $i < $quant_de_cartas; $i++){
        $arrey [$i] = $i + 1;
    }

    for ($j = 0; $j < 3; $j++){
        shuffle($arrey);
        for ($v = 0; $v < ($quant_de_cartas / 2); $v++){
            $porcao01[$v] = $arrey[$v];
            $porcao02[$v] = $arrey[($quant_de_cartas - 1) - $v];
        }

        print_r($porcao01);
        print_r($porcao02);

        if (in_array($numero_Aleatorio, $porcao01)){
            echo "O número está na porção 01 \n";
        }   else {
            echo "O número está na porção 02 \n";
        }
    }

    for($k = 0; $k != 999; $k++){
        echo "\n Qual o número escolhido? \t";
        $usuario = readline();
        if ($usuario == $numero_Aleatorio){
            echo "\t Você acertou!! PARABÉNS!! \t";
            $k = 999 - 1;
        }   else {
            echo "Tente novamente";
        }
        $tentativas++;
    }
    
    echo "\n \t\t\t Você acertou em " . $tentativas . " tentativas";
?>