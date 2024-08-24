<?php

    $loja = [];
    $receber = [];

    do {
        echo "1 - Cadastrar Vendedor \n";
        echo "2 - Mostrar Vendedores\n";
        echo "3 - Vendedor mais e menos eficiênte \n";
        echo "4 - Mostrar Salários \n";
        echo "0 - Sair \n";

        $escolha = readline("Digite sua Escolha: ");

        switch($escolha){
            case 1:
                $loja += register();
                break;
            case 2:
                lista($loja);
                break;
            case 3:
                maximo($loja);
                minimo($loja);
                break;
            case 4:
                salario($loja, $receber);
                break;
            case 0:
                echo "Programa Finalizado! \n";
                break;
            default:
                echo "Escolha Invalida. \n";
        }

    } while ($escolha != 0);

    function register(){
        $key = strtolower(readline("Nome: "));
        $total_Vendas = readline("valor toral de vendas: ");
        return array($key => $total_Vendas);
    }

    function lista($array){
        foreach ($array as $key => $total_Vendas){
            echo "O vendedor " . ucfirst($key) . " teve um total de vendas igual a R$ " . $total_Vendas . " \n";
        }       
    }
    function maximo($array){
        echo "O vendedor mais eficiênte foi " . ucfirst(array_search(max($array), $array)) . " com total de R$ " . max($array) . "\n";
    }
    function minimo($array){
        echo "O vendedor menos eficiênte foi " . ucfirst(array_search(min($array), $array)) . " com total de R$ " . min($array) . "\n";
    }
    function salario($array, $receber){
        foreach ($array as $key => $total_Vendas){
            if ($total_Vendas <= 500){
                $salario = 0.005 * $total_Vendas;
                $receber += array($key => $salario);
            } elseif ($total_Vendas > 500 && $total_Vendas < 2500){
                $salario = 0.01 * $total_Vendas;
                $receber += array($key => $salario); 
            } elseif ($total_Vendas > 2500 && $total_Vendas < 4200){
                $salario = 0.013 * $total_Vendas;
                $receber += array($key => $salario); 
            } else {
                $salario = 0.025 * $total_Vendas;
                $receber += array($key => $salario); 
            }
        }
        foreach ($receber as $key => $salario){
            echo "O vendedor " . ucfirst($key) . " teve um salário igual a R$ " . $salario . " \n";
        }
    }

?>