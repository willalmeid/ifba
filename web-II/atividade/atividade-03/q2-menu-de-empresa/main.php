<?php

    echo "1. Novo Salário \n";
    echo "2. Férias \n";
    echo "3. Décimo Terceiro \n";
    echo "4. Sair \n";
    $menu = readline ("Digite o numero requirido: \n");

    switch ($menu) {
        case '1':
            $salario = readline ("Informe o Salário: \n");

            if ($salario < 1212.00) {
                $salario = $salario + ($salario * 0.15);
            }
            else if ($salario >= 1212.00 && $salario < 3050.00) {
                $salario = $salario + ($salario * 0.10);
            }
            else {
                $salario = $salario + ($salario * 0.5);
            }

            echo "Salário atual: " . round($salario, 2);
        break;
        case '2':
            $salario = readline ("Informe o Salário: ");
            $salario = $salario + ($salario/3);
            echo round($salario, 2);
        break;
        case '3':
            $salario = readline ("Informe o Salário: ");
            $mes = readline ("Informe a quantidade de meses trabalhado no ano: ");
            $salario = ($salario * $mes)/12;
            echo round($salario, 2);
        break;
        default:
            echo "Saindo...";
    }
?>