<!DOCTYPE html>
<html>
	<head>
		<title>Tela de login</title>
		<meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	</head>
	<body>
        <?php 
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
                include('config-mysqli.php');

                $sql = "INSERT INTO `loja-notebook`.users (`user`, name, email, password) VALUES( ?, ?, ?, ?)";

                $hash = password_hash($_POST['input_password'], PASSWORD_DEFAULT);

                $stmt = $conexao->prepare($sql);

                $stmt->bind_param("ssss", $_POST['input_user'], $_POST['input_name'] , $_POST['input_email'], $hash);
                $stmt->execute();
                header("Location: index.php");
            } else {
        ?>
        <div class="container-fluid">
            <div class="row g-3">
                <div class="mx-auto col-10 col-md-8 col-lg-6">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="input_name" class="form-label">Nome</label>
                            <input type="text" name="input_name" class="form-control" id="input_name">
                        </div>
                        <div class="mb-3">
                            <label for="input_user" class="form-label">Usuário</label>
                            <input type="text" name="input_user" class="form-control" id="input_user">
                        </div>
                        <div class="mb-3">
                            <label for="input_email" class="form-label">E-mail</label>
                            <input type="email" name="input_email" class="form-control" id="input_email">
                        </div>
                        <div class="mb-3">
                            <label for="input_password" class="form-label">Senha</label>
                            <input type="password" name="input_password" class="form-control" id="input_password">
                        </div>
                        <a href="index.php" class="btn btn-primary" style="background-color: white; color: blue;">Voltar</a>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </body>
</html>