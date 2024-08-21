<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            color: gray;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        body, html {
            background-color: gray;
        }
        h1 {
            padding-bottom: 10px;
            font-size: 2.3em;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include('config-mysqli.php');

            $sql = "INSERT INTO `troca-de-conhecimento`.users (`user`, name, email, registration, password) VALUES( ?, ?, ?, ?, ?)";

            $hash = password_hash($_POST['input_password'], PASSWORD_DEFAULT);

            $stmt = $connection->prepare($sql);

            $stmt->bind_param("sssss", $_POST['input_user'], $_POST['input_name'] , $_POST['input_email'], $_POST['input_matricula'], $hash);
            $stmt->execute();
            header("Location: index.php");
        } else {
    ?>
            <div class="container-fluid" style="margin-top: 22vh;">
                <div class="row g-3">
                    <div class="mx-auto col-10 col-md-8 col-lg-6" style="padding: 50px; background-color: white; border-radius: 5px;">
                        <form action="" method="POST">
                            <h1>Registre-se</h1>
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
                                <label for="input_matricula" class="form-label">Matricula</label>
                                <input type="text" name="input_matricula" class="form-control" id="input_matricula">
                            </div>
                            <div class="mb-3">
                                <label for="input_password" class="form-label">Senha</label>
                                <input type="password" name="input_password" class="form-control" id="input_password">
                            </div>
                            <a href="index.php" class="btn btn-primary" style="background-color: white; color: #25a25a; border-color: #25a25a;">Voltar</a>
                            <button type="submit" class="btn btn-primary" style="background-color: #25a25a; border-color: #25a25a;">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
    <?php 
        } 
    ?>   
</body>
</html>