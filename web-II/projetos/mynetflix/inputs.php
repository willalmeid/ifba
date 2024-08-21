<form action="resultado.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $linha['id_filme'] ?>">
    <input type="hidden" name="nome" value="<?php echo $linha['nome'] ?>">
    <input type="hidden" name="foto" value="<?php echo $linha['foto'] ?>">
    <input type="hidden" name="lancamento" value="<?php echo date("d/m/Y", strtotime($linha['lancamento'])); ?>">
    <input type="hidden" name="genero" value="<?php echo $linha['genero'] ?>">
    <input type="hidden" name="diretores" value="<?php echo $linha['diretores'] ?>">
    <input type="hidden" name="roteiristas" value="<?php echo $linha['roteiristas'] ?>">
    <input type="hidden" name="bilheteria" value="<?php echo $linha['bilheteria'] ?>">
    <input type="hidden" name="orcamento" value="<?php echo $linha['orcamento'] ?>">
    <button class="vermais">ver mais</button>
</form>