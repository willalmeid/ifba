<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .container {
        max-width: 350px;
        padding: 1rem;
    }
    label {
        margin-right: 15px;
    }
    input {
        padding: 2px 0px;
        border: 1px solid black;
        border-radius: 5px;
        text-align: center;
    }
</style>
<?php

    include "conexao-banco.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "teste";

        $sql = "INSERT INTO jogadores (nome)
        VALUES('{$_POST['nome_jogador']}')";

        mysqli_query($conexao, $sql);

        setcookie('jogador', $_POST['nome_jogador']);
        $conexao->close();

        setcookie('qtd_pergunta', 0);
        setcookie('acertos', 0);
        
        header("Location: perguntas.php");
    } else {
?>
        <div class="d-flex align-items-center py-4 bg-body-tertiary h-100">
            <div class="w-100 m-auto container">
                <form method="POST" action="">
                    <div>
                        <label>Nome Jogador:* </label>
                        <input name="nome_jogador" type = "text" required/>
                    </div>
                    <div>
                        <button type="submit" name="submit" class="btn btn-primary w-100 py-2 mt-2"> Salvar</button>
                    </div>
                </form>
            </div>
        </div>

<?php
    }
    $conexao->close();
?>