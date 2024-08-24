<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Forms 02</title>
    <style>
        * {
            margin: 10px;
            margin-left: 50px;
            padding: 5px;
        }
        h1 {
            margin-top: 50px;
            margin-left: 190px;
        }
        form {
            display: inline-block;
            border: 2px solid black;
            padding: 15px;
            width: 30%;
        }
        label{
            margin-left: 10px;
            margin-right: 20%;
            font-size: 1em;
            font-weight: bolder;
        }
        input{
            margin-left: 5px;
            border-radius: 5px;
            border-width: 1px;
        }
        input.diferente{
            width: 90%;
        }
        div {
            margin: 0px;
            padding: 0px;
            margin-left: 2px;
        }
        div#botao{
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
        button {
            margin-left: 5px;
            color: white;
            background-color: mediumspringgreen;
            border-width: 1px;
            border-radius: 5px;
            border-color: mediumspringgreen;
        }
    </style>
</head>
<body>
    <h1>Questão 02 de 02</h1>
    <form action="resultado.php">
        <label for="inputName">Nome </label><br>
        <input class="diferente" type="text" name="Nome" required><br>
        <label for="inputEmail">E-mail</label><br>
        <input class="diferente" type="email" name="Email" required><br>
        <div>
            <label for="inputGenero">Gênero</label><br>
            <input type="radio" name="Genero" value="0"/>   Masculino <br>
            <input type="radio" name="Genero" value="1"/>   Feminino <br>
            <input type="radio" name="Genero" value="2" required/>   Outros <br>
        </div> <br>
        <label for="inputEstado">Estado</label> <br>
        <input class="diferente" type="text" name="Estado" required><br>
        <div id="botao">
            <input id="botao" type="reset">
            <button type="submit">submit</button>
        </div>
    </form>
</body>
</html>