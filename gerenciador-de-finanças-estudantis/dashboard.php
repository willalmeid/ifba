<?php
session_start();
if (isset($_GET['sair'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
include 'functions.php';

$user_id = $_SESSION['user_id'];
$transacoes = getTransactions($user_id);
$saldo_atual = calculateBalance($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador Financeiro</title>
</head>
<body>
    <a href="?sair=1">sair</a>
    <h1>Painel Principal</h1>
    <p>Saldo Atual: <?php echo $saldo_atual; ?></p>
    <h2>Transações</h2>
    <table>
        <tr>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Data</th>
            <th>Categoria</th>
            <th>Tipo</th>
        </tr>
        <?php 
        if ($transacoes != NULL) {
            while ($row = $transacoes->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row['descricao']; ?></td>
                <td><?php echo $row['valor']; ?></td>
                <td><?php echo $row['data']; ?></td>
                <td><?php echo $row['categoria']; ?></td>
                <td><?php echo $row['tipo']; ?></td>
            </tr>
        <?php endwhile; }?>
    </table>
    <a href="add_transaction.php">adicionar</a>
</body>
</html>