<?php
    include "conexao-banco.php";
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        .container {
            max-width: 500px;
            padding: 1rem;
            background-color: rgba(128, 128, 128, 0.197);
        }
        thead {
            text-align: center;
            font-size: 1.5em;
            font-weight: bolder;
        }
        tbody {
            text-align: center;
        } 
        .nome {
            font-weight: 400;
        }
        .acerto {
            font-weight: 400;
        }
    </style>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary h-100">
    <?php
        $banco2 = "SELECT * FROM jogadores ORDER BY acerto DESC";
        $jogador = $conexao -> query($banco2);
        $count2 = mysqli_num_rows($jogador);
    ?>
    <div class="w-100 m-auto container">
        <table class="table table-striped table-bordered border-primary">
            <thead>
                <tr>
                    <td>Nome</td>   
                    <td>Acertos</td>
                </tr>
            </thead>
        <?php
        while($row_jogador = $jogador -> fetch_assoc()){
        ?>
            <tbody>
                <tr>
                    <td class="nome"><?php echo strtoupper($row_jogador['nome']) ?></td>
                    <td class="acerto"><?php echo $row_jogador['acerto'] ?></td>
                </tr>
            </tbody>
        <?php
            };
        ?>
        </table>
        <button onclick="window.location.href = 'index.php';" class="btn btn-primary w-100 py-2 mt-2">Pagina Inicial</button>
    </div>
</body>
</html>