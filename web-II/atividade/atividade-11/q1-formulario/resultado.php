<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultados</h1>
    <h2>
        <?php
            switch($_GET['Operacao']){
                case 'Adicao':
                    $value = $_GET['Number01'] + $_GET['Number02'];    
                    echo "A soma dos Numeros escolhidos anteriormente é: " . $value;
                    break;
                case 'Subtracao':
                    $value = $_GET['Number01'] - $_GET['Number02'];
                    echo "A Subtração do Números escolhidos anteriormente é: " . $value;
                    break;
                case 'Multiplicacao':
                    $value = $_GET['Number01'] * $_GET['Number02'];
                    echo "A Multiplicação do Números escolhidos anteriormente é: " . $value;
                    break;
                default:
                    $value = $_GET['Number01'] / $_GET['Number02'];
                    echo "A Divisão do Números escolhidos anteriormente é: " . $value;
            }
        ?>
    </h2>
    <form action="index.php">
        <button type="submit">Voltar</button>
    </form>
</body>
</html>