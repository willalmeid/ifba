<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <nav class="navbar bg-body-tertiary" id="eu">
                <div class="container-fluid">
                    <h1 class="navbar-brand" id="weqw">
                        <img src="Imagens/bootstrap-logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                        <?php 
                            $number = 1;
                            include("cabecalho.php"); 
                        ?>
                    </h1>
                </div>
            </nav>
        </header>
        <main>
            <h1 id="das">
                <?php echo "Pagina ralizada para teste da " . $number . "° PAGINA."; ?>
            </h1>
            <article>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quidem a ullam laborum blanditiis, nobis saepe porro ea dignissimos corporis necessitatibus cupiditate repellendus iure exercitationem at facere assumenda possimus hic. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt magnam corporis dolorum ea ex pariatur, dicta a soluta accusamus repudiandae saepe sapiente maxime quia, nisi rerum minima tempore exercitationem blanditiis.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, aliquam asperiores! Eum voluptatum dolor aut libero alias labore? Veniam at accusamus doloribus culpa labore autem enim facere quam tempora voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium pariatur quos aperiam voluptatem, minima distinctio corporis odio, blanditiis fuga sit eius numquam veritatis eligendi obcaecati enim porro reprehenderit tenetur repellat.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum maxime nisi molestias voluptatem doloribus voluptate consequatur. Culpa, et sit, recusandae, laborum molestiae nobis non illo aperiam corporis porro obcaecati asperiores?</p>
                <h4>PARTICIPANTES</h4>
                <ul>
                    <li>Orea - William Souza</li>
                </ul>
                <ul>
                    <li>Capita - Hebert Patrick</li>
                </ul>
                <ul>
                    <li>JL7 - Jõao Lucas</li>
                </ul>
            </article>
            <nav aria-label="Page navigation example" id="tu">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="Pagina03.php">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="Pagina02.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="Pagina03.php">3</a></li>
                    <li class="page-item"><a class="page-link" href="Pagina02.php">Next</a></li>
                </ul>
            </nav>
        </main>
        <footer id="s">
            <a href="#" class="fixed-bottom" id="rodape">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
                <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z"/>
            </svg>
                <?php include("rodape.php"); ?>
            </a>
        </footer>
    </body>
</html>