<?php

    $data = readline ("Informe a data: ");
    $dia;
    $mes;
    $anos;

    if ($data <= 31222022 && $data >= 1010000 && $data <= 9122022) {
           
        $dia = $data/1000000;
        $mes = ($data - ((int)$dia * 1000000))/10000;
        $ano = $data - (((int)$dia * 1000000) + ((int)$mes * 10000));

        switch ((int)$mes) {
            case '1':
                $mes = "janeiro";
                break;
            case '2':
                $mes = "fevereiro";
                break;
            case '3':
                $mes = "março";
                break;
            case '4':
                $mes = "abril";
                break;
            case '5':
                $mes = "maio";
                break;
            case '6':
                $mes = "junho";
                break;
            case '7':
                $mes = "julho";
                break;
            case '8':
                $mes = "agosto";
                break;
            case '9':
                $mes = "setembro";
                break;
            case '10':
                $mes = "outubro";
                break;
            case '11':
                $mes = "novembro";
                break;
            default:
                $mes = "dezembro";
        }
        echo (int)$dia . " de " . $mes . " de " . (int)$ano;  
    }
    else 
        echo "Data inválida";
?>