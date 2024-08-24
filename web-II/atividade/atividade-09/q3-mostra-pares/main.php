<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Questão 03</title>
    </head>
    <body>
        <h1>
            <?php
                for ($i=0; $i <= 100; $i++) { 
                    $array[$i] = $i;
                }
                function NumerosPares($array){
                    echo "Os Números Pares são: ";
                    for ($j = 0; $j <= count($array) - 1; $j++) { 
                        if ($array[$j]%2 == 0){
                            echo $array[$j] . "\t";
                        }
                    }    
                }
                NumerosPares($array);
            ?>
        </h1>
    </body>
</html>