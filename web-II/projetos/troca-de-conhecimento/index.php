<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('config-mysqli.php');
        session_start();

        $user = $_POST['input_user'];
        $password = $_POST['input_password'];

        $stmt = $connection -> prepare("SELECT id_user, password, name FROM users WHERE user = ?");
        $stmt -> bind_param("s", $user);
        $stmt -> execute();

        $stmt -> store_result();
        
        if ($stmt -> num_rows === 1) {
            $stmt -> bind_result($id_user, $passwordHash, $name);
            $stmt -> fetch();

            if (password_verify($password, $passwordHash)){
                $_SESSION['user'] = $user;
                $_SESSION['id_user'] = $id_user;

                header('Location: principal.php');
            } else {
                $message_error = "Senha incorreta! Tente Novamente.";
            }
        } else {
            $message_error = "Usuário não encontrado. Caso não tenha login, Cadastre-se.";
        }

        $stmt -> close();
        $connection -> close();
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="estilo/style-login.css">
</head>
<body>
    <main>
        <section id="login">
            <div class="formulario">
                <h1>Login</h1>
                <p>Seja Bemvindo(a). <br> Faça login para poder acessar todas as funcionalidades do site.</p>
                <form action="" method="POST">
                    <div class="campo">
                        <i id="burguer" class="material-icons">person</i>
                        <label for="input_user"></label>
                        <input type="text" name="input_user" id="input_user" required>
                    </div>
                    <div class="campo">
                        <i id="burguer" class="material-icons">vpn_key</i>
                        <label for="input_password"></label>
                        <input type="password" name="input_password" id="input_password" required>
                    </div>
                    <div class="butao">
                        <button type="submit">Acessar</button>
                        <a href="register.php">Quero me registrar</a>
                    </div>
                    <?php if (isset($message_error)) { ?>
                    <div class="tex-danger">
                        <?php echo $message_error; ?>
                    </div>
                    <?php } ?>
            </div>
            </form>
        </section>
    </main>
</body>
</html>