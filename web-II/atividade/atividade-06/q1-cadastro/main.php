<?php
    $users = [];

    do{
        echo "=========== MENU =========== \n";
        echo "1 - Cadastrar usuário \n";
        echo "2 - Pesquisar nome \n";
        echo "3 - Listar todos os nomes \n";
        echo "0 -  Sair do programa \n";
        
        $chose = readline("Digite sua escolha: ");
        
        switch($chose){
            case 1:
                $users += register();
                break;
            case 2:
                $name = strtolower(readline("Nome: "));
                search($name, $users);
                break;
            case 3:
                listUsers($users);
                break;
            case 0:
                break;
            default:
                echo "Opção inválida!";
        }
    } while($chose != 0);
    
    function register(){
        $name = strtolower(readline("Nome: "));
        $key = readline("Código: ");
        return array($key => $name);
    }
    
    function search($searchBy, $array){
        if (in_array($searchBy, $array)){
           foreach($array as $key => $name){
               if($searchBy == $name){
                    echo "[$key] " . ucfirst($name) . " \n";
               }
           }
        } else {
            echo "Usuário não cadastrado!";
        }
    }
    
    function listUsers($array){
        foreach($array as $key => $name){
            echo "[$key] " . ucfirst($name) . " \n";
       }
    }
?>