<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
    } else {
        $erro_registro = "Erro no registro: " . $conn->error;
    }
}
?>
<form action="" method="post">
    <label for="nome">name</label>
    <input type="text" name="nome" id="nome">
    <label for="email">email</label>
    <input type="email" name="email" id="email">
    <label for="senha">senha</label>
    <input type="password" name="senha" id="senha">
    <button type="submit">registrar</button>
</fo