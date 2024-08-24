<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 10 - Extra</title>
</head>
<body>
    <h2>Nomes Normais: </h2>
    <p>
        <?php
            $array[0] = "NOME";
            $array[1] = "DOS";
            $array[2] = "COMPONENTES";
            $array[3] = "SEPARADOS";
            $array[4] = "POR";
            $array[5] = "VIRGULA";
            
            echo "Olá, ";
            for ($j = 0; $j < 6; $j++) { 
                echo $array[$j];
                if($j < 5){
                    echo ", ";
                }
            }
        ?>
    </P>
    <h2>Anagrama dos Nomes: </h2>
    <p>
        <?php
            echo "Olá, ";
            for ($k = 0; $k < 6; $k++) { 
                echo anagrama($array[$k]);
                if($k < 5){
                    echo ", ";
                }
            }
            function anagrama($array){
                return strrev($array);
            }
        ?>
    </p>    
</body>
</html>