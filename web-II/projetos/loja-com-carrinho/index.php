<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('config-mysqli.php');
        session_start();

        $user = $_POST['input_user'];
        $password = $_POST['input_password'];

        // Consulta o banco o usuário
        $stmt = $conexao->prepare("SELECT password, name FROM users WHERE user = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        
        $stmt->store_result();
        // Verifica se a consulta resulta em um usuário válido
        if ($stmt->num_rows === 1) {
            $stmt->bind_result($passwordHash, $name);
 
            $stmt->fetch();

            if (password_verify($password, $passwordHash)) {
                $_SESSION['user_name'] = $name;

                header('Location: principal.php');
            } else {
                $message_error = "Senha incorreta!";
            }
        } else {
            $message_error = "Usuário não encontrado!";
        }

        $stmt->close();
        $conexao->close();
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tela de login</title>
		<meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	</head>
	<body>
        <div class="container-fluid">
            <div class="row g-3">
                <div class="mx-auto col-10 col-md-8 col-lg-6">
                    <form action="" method="POST" class="mb-3">
                        <div class="mb-3">
                            <label for="input_user" class="form-label">Usuário</label>
                            <input type="text" name="input_user" class="form-control" id="input_user" required>
                        </div>
                        <div class="mb-3">
                            <label for="input_password" class="form-label">Senha</label>
                            <input type="password" name="input_password" class="form-control" id="input_password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        <a href="register.php" class="btn btn-primary" style="background-color: white; color: blue;">Registre-se</a>
                        <?php if (isset($message_error)) { ?>
                        <div class="text-danger">
                            <?php echo $message_error; ?>
                        </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>