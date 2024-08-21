<?php
include('config.php');
function getTransactions($userId) {
    global $conn;
    $sql = "SELECT * FROM transacoes WHERE usuario_id = $userId ORDER BY data DESC";
    $result = $conn->query($sql);
    return ($result->num_rows > 0) ? $result : array();
}

function calculateBalance($userId) {
    global $conn;
    $sql_receita = "SELECT SUM(valor) as receita FROM transacoes WHERE usuario_id = $userId AND tipo = 'receita'";
    $result_receita = $conn->query($sql_receita);
    $row_receita = $result_receita->fetch_assoc();

    $sql_despesa = "SELECT SUM(valor) as despesa FROM transacoes WHERE usuario_id = $userId AND tipo = 'despesa'";
    $result_despesa = $conn->query($sql_despesa);
    $row_despesa = $result_despesa->fetch_assoc();

    return (int)$row_receita['receita'] - (int)$row_despesa['despesa'];
}
?>