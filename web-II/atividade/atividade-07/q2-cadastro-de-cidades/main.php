<?php

    $valorArray = 0;

    do{
        echo "=========== MENU =========== \n";
        echo " 1 - Cadastrar Cidade \n";
        echo " 0 - Finalizar Cadastro \n";
        echo "============================ \n\n";

        $menu = readline("Digite a opção: \n");

        switch ($menu) {
            case 1:
                $cities[$valorArray++] = register();
                $valorArray++; 
                break;
            case 0:
                echo "Finalizando Cadastro. \n\n";
                break;
            default:
                echo "Valor invalido!! \n";
                break;
        }
    }while ($menu != 0);

    echo "================  TODAS AS CIDADES    ================ \n\n";
   
    listCities($cities);
   
    echo "================  CIDADES DA BAHIA    ================ \n\n";
   
    searchByCitiesOnState($cities, "Bahia");
    
    echo "==========    MAIS DE 50K DE HABITANTES   ============ \n\n";
   
    searchByCities($cities);

    /*                      Functions                   */

    //Registrar cidades
    function register(){
        $city = strtolower(readline("Digite a cidade: "));
        $state = strtolower(readline('Digite o Estado: '));
        $population = readline("Digite a quantidade de habitantes: ");
        
        return array("nome" => $city, "Estado" => $state, "Habitantes" => $population);
    }

    //Listar todas as cidades
    function listCities($cities){
        foreach($cities as $city){
            foreach($city as $key => $value){
                echo ucfirst($key) . ":\t" . ucfirst($value) . "\n";
            }
            echo "\n";
        }
    }

    //Procurar cidades do Estado
    function searchByCitiesOnState($cities, $state){
        foreach($cities as $city){
            if($city["Estado"] == $state){
                echo ucfirst($city["nome"]) . "\n";
            }
        }
        echo "\n";
    }

    //Procurar cidades que tenham 50.000 ou mais habitantes
    function searchByCities($cities){
        foreach($cities as $city){
            if($city["Habitantes"] >= 50000){
                echo ucfirst($city["nome"]) . "\n";
            }
        }
    }

?>