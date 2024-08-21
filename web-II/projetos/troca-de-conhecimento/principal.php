<?php 
    include('header.php');  
?>
<link rel="stylesheet" href="./estilo/style-principal.css">
<main>
    <?php
            // Pesquisa no banco de dados na tabela users
            $sql_users = "SELECT * FROM `troca-de-conhecimento`.users WHERE user = '".$_SESSION['user']."'";
            $result_users = $connection -> query($sql_users);
            $caunt_users = mysqli_num_rows($result_users);
            extract($result_users -> fetch_assoc());
    ?>
            <!-- Section para agrupar a parte da direita, no qual estaria a parte da conta do usuario -->
            <section class="left">
                <div class="left-img">
                    <img src="<?php echo $img_profile ?>" alt="">
                <div class="left-user">
                    <ul>
                        <li class="left-name"><?php echo $name ?></li>
                        <li class="left-user"><?php echo "@" . $user ?></li>
                    </ul>
                </div>  
                <div class="info-adicionais">
                    <ul>
                        <li><?php echo "Email: " .  $email ?></li>
                        <li><?php echo "Matricula: " . $registration ?></li>
                    </ul>
                </div>
            </section>
            <?php include ('feed.php'); ?> 
</main>
    
</body>
</html>