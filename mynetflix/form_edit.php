<?php
  include('bank.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Banco de Dados Consulta</title>
		<meta charset = "utf-8">
		<link rel = "stylesheet" type="text/css" href="css/formulario.css"/>
		<style>
      *{
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
      }
			form {
				line-height: 2em; /* espaçamento entrelinhas */
			}
			
			footer p {
				text-align: center;
			}
			article {
        margin: 10% 24%;
        padding: 10px;
        background-color: rgba(128, 128, 128, 0.337);
        display: flex;
        justify-content: center;
      }
      label {
        font-size: 1.2em;
        font-weight: bolder;
      }
      input {
        width: 300px;
        height: 1.5em;
        text-align: center;
        border: 1.5px solid black;
        border-radius: 5px;
      }
		</style>
	</head>
	<body>
		<article>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $sql = "UPDATE filme 
                  SET nome=?, foto=?, 
                  lancamento=?, genero=?,
                  diretores=?, roteiristas=?,
                  bilheteria=?, orcamento=? 
                  WHERE id_filme=?";
          $data = date("Y-m-d", strtotime($_POST['lancamento']));
          $stmt = $conexao->prepare($sql);
          $stmt->bind_param("ssssssssi", $_POST['nome'], $_POST['foto'], $data, $_POST['genero'], $_POST['diretores'], $_POST['roteiristas'], $_POST['bilheteria'], $_POST['orcamento'], $_GET['id']);
          $stmt->execute();

          header("Location: http://localhost/visualizar/projeto-web-IIUnidade%20copy/index.php");
        } else {
          if (isset($_GET['id'])) {
            /* criar uma declaração preparada */
            $stmt = $conexao->prepare("SELECT * FROM filme WHERE id_filme = ?");

            /* parâmetros de ligação para marcadores */
            $stmt->bind_param("i", $_GET['id']);
          
            // /* executar consulta */
            $stmt->execute();

            // /* Formata para a iteração */
            $result = $stmt->get_result();
            ?>
        <form method="POST" action="">
          <?php while ($row = $result->fetch_assoc()) { ?>
            <div>
                <label>Nome filme:* </label>
                <input name="nome" value="<?php echo $row['nome']; ?>" type = "text" required/>
            </div>
            <div>
                <label>Caminho da foto:* </label>
                <input name="foto" value="<?php echo $row['foto']; ?>" type = "text" required/>
            </div>
            <div>
                <label>Lançamento:* </label>
                <input name="lancamento" type = "date" value="<?php echo date("Y-m-d", strtotime($row['lancamento']));?>" required/>
            </div>
            <div>
                <label>Gênero:* </label>
                <input name="genero" value="<?php echo $row['genero']; ?>" type = "text" required/>
            </div>
            <div>
                <label>Diretores:* </label>
                <input name="diretores" value="<?php echo $row['diretores']; ?>" type = "text" required/>
            </div>
            <div>
                <label>Roteiristas:* </label>
                <input name="roteiristas" value="<?php echo $row['roteiristas']; ?>" type = "text" required/>
            </div>
            <div>
                <label>Bilheteria:* </label>
                <input name="bilheteria" value="<?php echo $row['bilheteria']; ?>" type = "text" required/>
            </div>
            <div>
                <label>Orçamento:* </label>
                <input name="orcamento" value="<?php echo $row['orcamento']; ?>" type = "text" required/>
            </div>
          <?php } } ?>
            <div style="display:flex; justify-content:end;margin-right:15px;">
            <button type="submit" name="submit"> Salvar</button>
            </div>
        </form>
      <?php
        }
        $conexao->close();
			?>
		</article>
	</body>
</html>