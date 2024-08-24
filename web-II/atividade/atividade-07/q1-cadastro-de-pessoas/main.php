<?php
    for($i=0; $i<2; $i++){
        $people[$i] = register();
    }
   
    echo "========== PESSOAS CADASTRADAS ========== \n\n";
   
    searchUsers($people);
   
    echo "=========== PESSOAS DE JEQUIÉ =========== \n\n";
   
    searchByCity($people, "Jequié");
   
    echo "============= MAIOR DE IDADE ============ \n\n";
   
    searchByTeenagers($people);
   
    echo "=================== MEN ================= \n\n";
   
    searchByMen($people);
   
    /* Functions */


    // Register user
    function register() {
        $name = readline("Nome: ");
        $city = readline("Cidade: ");
        $age = readline("Idade: ");
        $sex = readline("Sexo: ");
       
        return array("nome" => $name, "cidade" => $city, "idade" => $age, "sexo" => $sex);
    }
   
    // List all users
    function searchUsers($people) {
        foreach($people as $person){
            foreach($person as $key => $value){
                echo ucfirst($key) . ":\t" . ucfirst($value) . "\n";
            }
            echo "\n";
        }
    }
   
    // Search by city
    function searchByCity($people, $city) {
        $qtd = 0;
       
        foreach($people as $person){
            if($person["cidade"] == $city){
                echo $person["nome"];
                $qtd++;
                echo "\n";
            }
        }
       
        if($qtd == 0){
            echo "Não há pessoas que moram em Jequié. \n";
        }
        echo "\n";
    }
   
    // Search by teenagers
    function searchByTeenagers($people) {
        $qtd = 0;
       
        foreach($people as $person){
            if($person["idade"] > 18){
                echo $person["nome"];
                $qtd++;
                echo "\n";
            }
        }
       
        if($qtd == 0){
            echo "Não há pessoas maiores de 18 anos. \n";
        }
        echo "\n";
    }
   
    // Search by men
    function searchByMen($people) {
        $qtd = 0;
       
        foreach($people as $person){
            if($person["sexo"] == "Masculino"){
                echo $person["nome"];
               
                $qtd++;
                echo "\n";
            }
        }
       
        if($qtd == 0){
            echo "Não há homens cadastrados. \n";
        }
       
        echo "\n";
    }
   
?>