<?php

    include("config-mysqli.php");

    if (!isset($_GET['shearch'])) {
        // Pesquisa no banco de dados na tabela postagem
        $sql_posts = "SELECT * FROM `troca-de-conhecimento`.posts INNER JOIN `troca-de-conhecimento`.users WHERE `posts`.id_user = `users`.id_user ORDER BY date_post DESC";
        $result_posts = $connection -> query($sql_posts);
        $count_posts = mysqli_num_rows($result_posts);
        // extract($result_posts -> fetch_assoc());    
    } else {

        $shearch = strtolower($_GET['shearch']);
        $sql_posts = "SELECT * FROM `troca-de-conhecimento`.posts INNER JOIN `troca-de-conhecimento`.users WHERE `posts`.id_user = `users`.id_user AND matter LIKE '%".strtolower($_GET['shearch'])."%' ORDER BY date_post DESC";
        $result_posts = $connection -> query($sql_posts);
        $count_posts = mysqli_num_rows($result_posts);
        // extract($result_posts -> fetch_assoc());
    }
?>

<!-- Section para agrupar a parte do feed do usuario -->
<section class="rigth">
    <div class="box-post">
        <?php
            // $agora = new DateTime('2000-01-01', new DateTimeZone('America/Sao_Paulo'));
            // echo $agora->format('Y-m-d H:i:s'); 
            date_default_timezone_set('America/Sao_Paulo');
            $agora = date('Y-m-d H:i:s');
            // var_dump($agora);
            // die();// Pega o momento atual
            // $agora_format = $agora ->format('Y-m-d H:i:sP');
            if (isset($_FILES['img_post']) && !empty($_POST['text_post'])) {
                $foto = $_FILES["img_post"];
    
                // Se a foto estiver sido selecionada
                if (!empty($foto["name"])) {
            
                    $error = array();
            
                    // Verifica se o arquivo é uma imagem
                    if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
                        $error[1] = "Isso não é uma imagem.";
                    } 
            
                    // Se não houver nenhum erro
                    if (count($error) == 0) {
                    
                        // Pega extensão da imagem
                        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
            
                        // Gera um nome único para a imagem
                        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
            
                        // Caminho de onde ficará a imagem
                        $caminho_imagem = "imagens/" . $nome_imagem;
            
                        // Faz o upload da imagem para seu respectivo caminho
                        move_uploaded_file($foto["tmp_name"], $caminho_imagem);
                    
                        $query = "INSERT INTO `troca-de-conhecimento`.posts (id_user, matter, img_post, text_post, date_post) VALUES('".$_SESSION['id_user']."', '".$_POST['matter']."', '".$caminho_imagem."', '".$_POST['text_post']."', '".$agora."');";
                        // Insere os dados no banco
                        $connection->query($query);
                        header("Location: {$_SERVER['PHP_SELF']}");
                        exit();
                    } elseif (count($error) != 0) {
                        echo "<h1> TESTE </h1>";
                        foreach ($error as $erro) {
                            echo $erro . "<br />";
                            header("Location: {$_SERVER['PHP_SELF']}");
                            exit();
                        }
                    }
                }
                unset($_POST['img_post'], $_POST['text_post'], $_POST['matter']);
            }else {
                include('post.php');
            }
        ?>
    </div>
    <?php 
        if ($result_posts) {
            while($row_post = $result_posts -> fetch_assoc()){
                // var_dump($row_post);
                extract($row_post);
    ?>
                <a href="pagina_post.php?id_post= <?php echo $id_post ?>">
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
                </a>
    <?php
            }
        }
    ?>
</section>