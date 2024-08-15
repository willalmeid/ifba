<?php
    include "bank.php";
    include "header.php";
?>
		<meta charset = "utf-8">
        <link rel="stylesheet" href="./estilo/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel = "stylesheet" type="text/css" href="css/tabela.css"/>
        <link rel="stylesheet" href="./estilo/style.css">
	<body>
        <main>
            <div class="inicial">
                <div class="text">
                    <h6>Aproveite na TV</h6>
                    <p>Assista em Smart TVs, PlayStation, Xbox, Chromecast, Apple TV, aparelhos de Blu-ray e outros dispositivos.</p>
                </div>
            </div>
            <h2>Filmes Disponíveis</h2>
            <div class="container">
                <div class="inside-container">
                    <?php
                        $frase = 0;

                        $sql = "SELECT * FROM filme";
                        $resultado = $conexao->query($sql);
                        $count = mysqli_num_rows($resultado);
                        if (isset($_GET['pesquisa'])) {
                            if ($resultado) {
                                while ($linha = $resultado->fetch_assoc()) {
                                    $teste = strpos(strtolower($linha['nome']), strtolower($_GET['pesquisa']));
                                    if ($teste == false) {
                                        $frase++;
                                    } else {
                    ?>
                                    <div class="box">
                                        <h2> <?php echo $linha['id_filme'] . " - " . $linha['nome'] ?> </h2>
                                        <img src="<?php echo $linha['foto'] ?>" alt="">
                                        <tr>
                                            <ul> <?php echo date("d/m/Y", strtotime($linha['lancamento'])); ?> </ul>
                                            <?php include "inputs.php"; ?>
                                            <ul style="display: flex;justify-content: space-between;">
                                                <button style="margin-right: 5px;" onclick="location.href='form_edit.php?id=<?php echo $linha['id_filme'];?>'"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                                <form method="POST" action="./excluir_registro.php" onsubmit="return confirm('Tem certeza de que deseja excluir este registro?');">
                                                    <input type="hidden" name="id" value="<?php echo $linha['id_filme']; ?>">
                                                    <button type="submit" name="excluir"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </form>
                                            </ul>
                                        </tr>
                                    </div>
                    <?php 
                                    }
                                    if ($frase >= count($linha)) {
                    ?>
                                        <h4 class="nenhum"><?php echo "Nenhum item Encontrado. Pesquise novamente." ?> </h4>
                    <?php
                                    }
                                } 
                            } else {					
                    ?>
                                <tr>
                                    <ul colspan="6"> Nenhum registro</ul>
                                </tr>
                    <?php
                            } 
                        } else {
                            if ($resultado) {
                                while ($linha = $resultado->fetch_assoc()) {
                    ?>
                                    <div class="box">
                                        <h2> <?php echo $linha['id_filme'] . " - " . $linha['nome'] ?> </h2>
                                        <img src="<?php echo $linha['foto'] ?>" alt="">
                                        <tr>
                                            <ul> <?php echo date("d/m/Y", strtotime($linha['lancamento'])); ?> </ul>
                                            <?php include "inputs.php"; ?>
                                            <ul style="display: flex;justify-content: space-between;">
                                                <button style="margin-right: 5px;" onclick="location.href='form_edit.php?id=<?php echo $linha['id_filme'];?>'"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                                <form method="POST" action="excluir_registro.php" onsubmit="return confirm('Tem certeza de que deseja excluir este registro?');">
                                                    <input type="hidden" name="id" value="<?php echo $linha['id_filme']; ?>">
                                                    <button type="submit" name="excluir"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </form>
                                            </ul>
                                        </tr>
                                    </div>
                    <?php
                                }
                            $conexao->close();
                            }
                        }
                    ?>
                </div>
            </div>
            <tr>
                <th style="text-align: right;" colspan="6">Número de registros: <?php echo $count;?></th>
            </tr>
        </main>
        <div style="display:flex; justify-content:center;margin: 20px 0;">
          <button onclick="window.location.href = 'form_add.php';"> Cadastrar Filme</button>
        </div>
        <div class="final">
            <div id="fundo">
                <h2>Motivação</h2>
                <p>Site produzido por William Souza Almeida e João Lucas Souza Almeida pelo curso de Informatica do Instituto Federal de Educação, Ciências e Tecnologia da Bahia (IFBA - Campus Jequié), como requisito parcial de avaliação da disciplina de WEB II a pedido da docente responsável Luenne Nascimento.</p>
            </div>
        </div>
    </main>
    <footer>
        <?php
            include "footer.php";
        ?>
    </footer>
	</body>
</html>