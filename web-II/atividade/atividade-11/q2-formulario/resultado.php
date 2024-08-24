<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultados</h1>
    <h3>
        Nome:   <?php echo $_GET['Nome'] ?><br>
        E-mail: <?php echo $_GET['Email'] ?><br>
        Gênero: 
        <?php 
            switch($_GET['Genero']){
                case 0:
                    $genero = 'Masculino';
                    break;
                case 1:
                    $genero = 'Feminino';
                    break;
                default;
                    $genero = 'Outros';
            }
            echo $genero;
        ?><br>
        Estado: <?php echo $_GET['Estado'] ?>
    </h3>
</body>
</html>