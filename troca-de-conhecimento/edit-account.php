<?php

    include('<config-mysqli.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $teste = $_GET['id'];
        $sql = "UPDATE `troca-de-conhecimento`.users 
                SET user=?, name=?, email=? 
                -- registration=?, img_profile=? 
                WHERE id_user= ?";
        $stmt = $connection->prepare($sql);

        $hash = password_hash($_POST['input_password'], PASSWORD_DEFAULT);
        $stmt->bind_param("sssi", $_POST['user'], $_POST['nome'], $_POST['email'], $_GET['id']);
        $stmt->execute();

        header("Location: http://localhost/troca-de-conhecimento/principal.php");
    } else {
        if (isset($_GET['id'])) {
            $sql = "SELECT * FROM `troca-de-conhecimento`.`users` WHERE id_user = '".$_GET['id']."'";
            $result = $connection -> query($sql); 
            extract($result -> fetch_assoc());
?>
    <link rel="stylesheet" href="./estilo/style-edit-account.css">
        <body>
            <main>
                <section id="login">
                    <div class="formulário">
                        <form method="POST" action="">
                            <div class="campo">
                                <label>Nome:* </label>
                                <input name="nome" value="<?php echo $name; ?>" type = "text" required/>
                            </div>
                            <div class="campo">
                                <label>Usuário:* </label>
                                <input name="user" value="<?php echo $user; ?>" type = "text" required/>
                            </div>
                            <div class="campo">
                                <label>Email:* </label>
                                <input name="email" type = "email" value="<?php echo $email;?>" required/>
                            </div>
                            <div class="campo">
                                <label>Matrícula:* </label>
                                <input name="registration" value="<?php echo $registration; ?>" type = "text" required/>
                            </div>
                            <div style="display:flex; justify-content:end; margin-right:15px;">
                                <button type="submit" name="submit"> Salvar</button>
                            </div>
                        </form>
                    </div>
                </section>
            </main>
        </body>                      
<?php   
        } 
    } 
    $connection->close();  
?>