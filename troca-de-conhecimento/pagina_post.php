<?php

    include('header.php');
    // include('config-mysqli.php');

?>
<link rel="stylesheet" href="./estilo/style-pagina-post.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<main>
    <section class="left">
        <a href="principal.php" class="material-symbols-outlined">arrow_circle_left</a>
    </section>
    <section class="rigth">
        <?php
            $sql_post = "SELECT * FROM `troca-de-conhecimento`.posts INNER JOIN `troca-de-conhecimento`.users ON `posts`.id_user = `users`.id_user WHERE `posts`.id_post = '".$_GET['id_post']."'";
            $result_sql_post = $connection -> query($sql_post);
            $count_posts = mysqli_num_rows($result_sql_post);
            extract($result_sql_post -> fetch_assoc());

            $sql_comments = "SELECT * FROM `troca-de-conhecimento`.comments INNER JOIN `troca-de-conhecimento`.posts ON `comments`.id_post = `posts`.id_post INNER JOIN `troca-de-conhecimento`.users ON `comments`.id_user = `users`.id_user WHERE `posts`.id_post = '".$_GET['id_post']."'";         
            $result_comments = $connection -> query($sql_comments);
            $caunt_comments = mysqli_num_rows($result_comments);
            // extract($result_comments -> fetch_assoc()); 
        ?>
        <div class="box">
            <div class="img-perfil">
                <img src="<?php echo $img_profile ?>" alt="">
            </div>
            <div class="box-postagem">
                <div class="inf-user">
                    <ul>
                        <li class="title-name"><?php echo $name ?></li>
                        <li class="user-data"><?php echo "@" . $user . "ㅤ·ㅤ" . $matter . "ㅤㅤ·ㅤㅤ" . date("g:i a, d M Y", strtotime($date_post)) ?></li>
                    </ul>
                </div>
                <div class="post">
                    <div class="post-text">
                        <p> <?php echo $text_post ?> </p>
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
        <h2>Comentários</h2>
        <?php
            while ($row_comment = $result_comments -> fetch_assoc()) {
                extract($row_comment);
        ?>
                <div class="box-comments">
                    <div class="img-perfil-comments">
                        <img src="<?php echo $img_profile ?>" alt="">
                    </div>
                    <div class="inside-box-comments">
                        <div class="inf-user">
                            <ul>
                                <li class="title-name"><?php echo $name ?></li>
                                <li class="user-data"><?php echo "@" . $user . "ㅤㅤ·ㅤㅤ" . date("g:i a, d M Y", strtotime($date_post)) ?></li>
                            </ul>
                        </div>
                        <div class="comments">
                            <div class="comments-text">
                                <p><?php echo $text_comment ?></p>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>
        <div class="add_comments">
                    <form action="add.php" method="GET">
                        <label for="text_comment"></label>
                        <input type="text" name="text_comment">
                        <input type="hidden" value="<?php echo $_GET['id_post']; ?>" name = "id_post">
                        <input type = "submit" name = "btn">
                    </form>
        </div>
    </section>  
</main>