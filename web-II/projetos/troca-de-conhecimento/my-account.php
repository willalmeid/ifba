<?php 
    include('header.php');  
?>
<link rel="stylesheet" href="./estilo/style-my-account.css">
<main>
    <?php
        // Pesquisa no banco de dados na tabela users
        $sql_users = "SELECT * FROM `troca-de-conhecimento`.users WHERE user = '".$_SESSION['user']."'";
        $result_users = $connection -> query($sql_users);
        $count_users = mysqli_num_rows($result_users);
        extract($result_users -> fetch_assoc());

        // Pesquisa no banco de dados na tabela postagem
        $sql_posts = 'SELECT * FROM `troca-de-conhecimento`.posts JOIN `troca-de-conhecimento`.users WHERE `posts`.id_user = `users`.id_user AND user = "'.$_SESSION['user'].'" ORDER BY date_post DESC';
        $result_posts = $connection -> query($sql_posts);
        $count_posts = mysqli_num_rows($result_posts);
        // extract($result_posts -> fetch_assoc());
        
    ?>
    <!-- Section para agrupar a parte da direita, no qual estaria a parte da conta do usuario -->
    <section>
        <div class="profile">
            <div class="profile-img">
                <img src="<?php echo $img_profile ?>" alt="">
            </div>
            <div class="profile-user">
                <ul>
                    <li class="profile-name"><?php echo $name ?></li>
                    <li class="profile-user"><?php echo "@" . $user ?></li>
                </ul>
            </div>
            <div class="profile-info-adicionais">
                <ul>
                    <li><?php echo "Email: " .  $email ?></li>
                    <li><?php echo "Matricula: " . $registration ?></li>
                </ul>
            </div>
        </div>
        <div class="my-posts">
            <?php     
                if ($result_posts) {
                    while($row_post = $result_posts -> fetch_assoc()){
                        extract($row_post);
            ?>
                        <div class="box">
                            <div class="img-perfil">
                                <img src="<?php echo $img_profile ?>" alt="">
                            </div>
                            <div class="box-postagem">
                                <div class="inf-user">
                                    <ul>
                                        <li class="title-name"><?php echo $name ?></li>
                                        <li class="user-data"><?php echo "@" . $user . "   ·   " . $matter . "   ·   " . date("g:i a, d M Y", strtotime($date_post)) ?></li>
                                    </ul>
                                </div>
                                <div class="post">
                                    <div class="post-text">
                                        <?php 
                                            if ($text_post != NULL) { 
                                        ?>
                                            <p> <?php echo $text_post ?> </p>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="post-img">
                                        <?php 
                                            if ($img_post != NULL) { 
                                        ?>
                                            <img src="<?php echo $img_post ?>" alt="">
                                        <?php 
                                            } 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php 
                    }
                }
            ?>
        </div>
    </section>
</main>
    
</body>
</html>