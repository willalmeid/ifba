<?php

    $s = 0;
    echo "Responda APENAS com SIM ou NÃO \n";

    $pergunta = readline ("Telefonou para a vítima? ");
    $pergunta = strtoupper($pergunta);
        if ($pergunta == 'SIM'){
            $s++;
        }
    $pergunta = readline ("Esteve no local do crime? ");
    $pergunta = strtoupper($pergunta);
        if ($pergunta == ucfirst('SIM')){
            $s++;
        }
    $pergunta = readline ("Mora perto da vítima? ");
    $pergunta = strtoupper($pergunta);
        if ($pergunta == ucfirst('SIM')){
            $s++;
        }
    $pergunta = readline ("Devia para a vítima? ");
    $pergunta = strtoupper($pergunta);
        if ($pergunta == ucfirst('SIM')){
            $s++;
        }
    $pergunta = readline ("Já trabalhou com a vítima? ");
    $pergunta = strtoupper($pergunta);
        if ($pergunta == ucfirst('SIM')){
            $s++;
        }

    switch ($s) {
        case 2:
            echo "Suspeita";
            break;
        case 3:
            case 4:
                echo "Cumplice";
                break;
        case 5:
            echo "Assassino";
            break;
        default:
            echo "inocente";
    }
?>