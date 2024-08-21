<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['user_id'] = $row['id'];
        header("Location: dashboard.php");
    } else {
        $erro_login = "Credenciais inválidas.";
    }
}
?>
<form action="" method="post">
    <label for="email">email</label>
    <input type="email" name="email" id="email">
    <label for="senha">senha</label>
    <input type="password" name="senha" id="senha">
    <button type="submit">entrar</button>
    <a href="register.php">registrar</a>
</form>