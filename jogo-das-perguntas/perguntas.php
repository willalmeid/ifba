<?php
    include "conexao-banco.php";
?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Desafio do Conhecimento</title>
    <style>
        .container {
            max-width: 800px;
            padding: 1rem;
            font-size: 1.2em;
        }
        form {
            background-color: rgba(128, 128, 128, 0.197);
            padding: 10px;
        }
        h2 {
            font-size: 2em;
            font-weight: bold;
            text-align: center;
        }
        h4 {
            font-size: 1.3em;
        }
    </style>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary h-100">
    <?php
        if (isset($_POST['id_pergunta'])) {
            $sql = "SELECT * FROM perguntas WHERE id_pergunta>$_POST[id_pergunta] ORDER BY id_pergunta ASC LIMIT 1";
        } else {
            $sql = "SELECT * FROM perguntas ORDER BY id_pergunta LIMIT 1";
        }
        $resultado = $conexao -> query($sql);
        $count = mysqli_num_rows($resultado);

        setcookie('qtd_pergunta', $_COOKIE['qtd_pergunta']+1);

        if (isset($_COOKIE['acertos']) && isset($_POST['resposta_certa'])) {
            if ($_POST['resposta'] == $_POST['resposta_certa']) {
                setcookie('acertos', $_COOKIE['acertos']+1);  
            }
        }
    ?>
    <div class="w-100 m-auto container">
        <form method="POST" action="">  
            <?php
            var_dump($count);
            var_dump($_COOKIE['acertos']);
                if ($count != 0 && $_COOKIE['qtd_pergunta'] <= 5) {
                    $row_pergunta = $resultado -> fetch_assoc();
                    extract($row_pergunta);
                    echo "<h2>Questões Aleatórias</h2>" . "<br>";
                    echo "<h4>" . $pergunta . "</h4>" . "<br>";
                    echo "<label>Alternativas: </label>" . "<br>";
                    echo "<input type='hidden' name='id_pergunta' value='$id_pergunta'>";
                    echo "<input type='hidden' name='resposta_certa' value='$resposta_certa'>";
                    echo "<input type='radio' name='resposta' value='$opcao_1' required> $opcao_1 <br>";
                    echo "<input type='radio' name='resposta' value='$opcao_2'> $opcao_2 <br>";
                    echo "<input type='radio' name='resposta' value='$opcao_3'> $opcao_3 <br>";
                    echo "<input type='radio' name='resposta' value='$opcao_4'> $opcao_4 <br>";
                } else if ($_COOKIE['qtd_pergunta'] == 6){
                    $atualizar = "UPDATE jogadores SET acerto=? WHERE nome=?";
                    $stmt = $conexao -> prepare($atualizar);
                    $stmt -> bind_param("is", $_COOKIE['acertos'], $_COOKIE['jogador']);
                    $stmt -> execute();
                    setcookie('acertos', NULL);
                    setcookie('qtd_pergunta', NULL);
                    setcookie('jogador', NULL);
                    header("Location: ranking.php");
                } else {
                    header('Location: perguntas.php');
                }
            ?>
            <input type="submit" name="valResposta" value="Responder" class="btn btn-primary w-100 py-2 mt-2">
        </form>
    </div>
</body>
</html>