<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 12</title>
    <style>
        form {
            width: 55%;
            height: 90%;
            margin-top: 10%;
            margin-left: 15%;
            padding: 10px;
            border: 1px black solid;
        }
        label{
            padding: 10px;
            font-weight: bolder;
        }
        label#espaco {
            margin-right: 41%;
        }  
        label.espaco{
            margin-right: 26%;
        }
        input {
            width: 100%;
            height: 30px;
            margin: 10px 5px 10px 0px;
            border: 1px 1px lightgray solid;
            border-radius: 5px;
            border-width: 1px;
        }
        input.primeira {
            width: 48.5%;
        }
        input.segunda {
            width: 32%;
        }
        input.terceira {
            width: 31.8%;
        }
        input.diferente{
            width: 30%;
            margin-right: -120px;
            margin-top: 10px;
            margin-bottom: 10px ;
            height: 15px;
        }
        input.checklist{
            width: 20px;
            margin: 10px 5px 10px 0px;
            height: 15px;
        }
        div {
            text-align: right;
        }
        button {
            color: white;
            background-color: #007FFF;
            border: 1px lightblue solid;
            border-radius: 5px;
            padding: 5px;
        }
        button#butaod {
            color: #007FFF;
            background-color: white;
            border-color: #007FFF;
        }
    </style>
</head>
<body>
    <form action="" method="GET">
        <label id="espaco" for="unputname">Nome</label>
        <label for="inputsobrenome">Sobrenome</label><br>

        <input class="primeira" type="text" name="Sobrenome" required>
        <input class="primeira" type="text" name="Nome" required><br>

        <label class="espaco" for="inputemail">Email</label>
        <label class="espaco" for="inputtelefone">Telefone</label>
        <label for="inputdatanascimento">Data de Nascimento</label><br>

        <input class="segunda" type="email" name="Email" required>
        <input class="segunda" type="tel" name="Telefone" required>
        <input class="segunda" type="date" name="DataNascimento" required><br>

        <label for="inputgenero">Gênero:    </label>
        <input class="diferente" type="radio" name="genero" required>Feminino
        <input class="diferente" type="radio" name="genero">Masculino<br>
        
        <label for="endereco">
            <label for="inputendereco">Endereço</label>
            <input type="text" name="Endereco" required><br>

            <label class="espaco" for="inputbairro">Bairro</label>
            <label class="espaco" for="inputnumero">Número</label>
            <label class="espaco" for="inputcep">CEP</label><br>

            <input class="terceira" type="text" name="Bairro" required>
            <input class="terceira" type="number" name="Numero" required>
            <input class="terceira" type="number" name="CEP" required><br>

            <label for="inputcomplemento">Complemento</label>
            <input type="text" name="Complemento" required><br>

            <label for="inputestado">Estado:</label>
            <input type="text" name="Estado" required><br>
        </label>

        <label for="termosecondicoes"></label>
        <input class="checklist" type="checkbox" required>Eu li e concordo com estes termos e condições. <br>
        
        <div>
            <button id="butaod" type="reset">Limpar</button>
            <button type="submit" name="btn">Enviar</button>
        </div>
    </form>
</body>
</html>