<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Atividade Forms 01</title>
    <style>
        * {
            margin-left: 50px;
        }
        h1 {
            margin-top: 50px;
            margin-left: 98px;
        }
        form {
            display: inline-block;
            border: 2px solid black;
            padding: 15px;
        }
        label{
            margin-left: 10px;
            margin-right: 20%;
            font-size: 1em;
            font-weight: bolder;
        }
        label#diferente{
            margin-left: 40px;
        }
        input{
            border-radius: 5px;
            border-width: 1px;
        }
        select{
            width: 100%;
            text-align: center;
            border-radius: 5px;
            border-width: 1px;
        }
        div {
            text-align: right;
        }
        input#botao {
            margin-top: 10px;
            color: mediumspringgreen;
            background-color: white;
            border-color: mediumspringgreen;
            border-width: 1px;
            border-radius: 5px;
        }
        button#diferente {
            color: white;
            background-color: mediumspringgreen;
            border-width: 1px;
            border-radius: 5px;
            border-color: mediumspringgreen;
        }
    </style>
</head>
<body>
    <h1>Questão 01 de 02</h1>
    <form id="form" name="form" method="GET" action="resultado.php">

        <label class="linha" for="inputnumber">Number 1</label>
        <label id="diferente" class="linha" for="inputnumber">Number 2</label><br>
        <input type="number" name="Number01" required>
        <input type="nuber" name="Number02" required><br>

        <label for="inputOperacao"> Operation: </label><br>
        <select name="Operacao" required>
            <option value="Adicao"> Adição </option>
            <option value="Subtracao"> Subtrção </option>
            <option value="Multiplicacao"> Multiplicação </option>
            <option value="Divisao"> Divisão </option>
        </select><br>

        <div>
            <input id="botao" type="reset">
            <button id="diferente" type="submit">Inserir</button>
        </div>
    </form>
</body>
</html>