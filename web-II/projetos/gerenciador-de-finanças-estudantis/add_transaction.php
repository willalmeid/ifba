<?php
session_start();
include('config.php');
if (isset($_GET['sair'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO transacoes (usuario_id, descricao, valor, data, tipo, categoria) 
            VALUES ($user_id, '$descricao', $valor, '$data', '$tipo', '$categoria')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php");
    } else {
        $erro_transacao = "Erro ao adicionar transação: " . $conn->error;
    }
}else{
?>
    <a href="?sair=1">sair</a>
    <form action="" method="post">
        <label for="descricao">descricao</label>
        <input type="text" name="descricao" id="descricao" required>
        <label for="valor">valor</label>
        <input type="number" name="valor" id="valor" required>
        <label for="data">data</label>
        <input type="date" name="data" id="data" required>
        <select name="tipo" id="tipo" required>
            <option value="receita" selected>Receita</option>
            <option value="despesa">Despesa</option>
        </select>
        <label for="categoria">categoria</label>
        <input type="text" name="categoria" id="categoria" required>
        <button type="submit">adicionar</button>
    </form>

<?php
}
?>
