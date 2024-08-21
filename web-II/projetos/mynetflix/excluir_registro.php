<?php
    include('bank.php');
    if (isset($_POST['excluir'])) {
        $id_filme = $_POST['id'];
        $sql = 'DELETE FROM filme WHERE id_filme=?';

        $stmt = $conexao->prepare($sql);

        $data = date("Y-m-d", strtotime($_POST['data']));

        $stmt->bind_param("i", $id_filme);
        $stmt->execute();
        $conexao->close();
        header("Location: index.php");
        exit();
    }

?>