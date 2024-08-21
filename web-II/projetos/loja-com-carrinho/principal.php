<?php

    include 'header.php';
    
    $notebooks = array(
        ["id" => 1, "nome" => 'Acer Aspire Nitro 5', "preco" => '7999', "img" => './imagens/notebook-acer.png'],
        ["id" => 2, "nome" => 'MacBook Ai', "preco" => '8099', "img" => './imagens/notebook-apple.png'],
        ["id" => 3, "nome" => 'Dell Inspiron i15 3501', "preco" => '6049', "img" => './imagens/notebook-dell.png'],
        ["id" => 4, "nome" => 'ASUS VivoBook X543', "preco" => '2299', "img" => './imagens/notebook-asus.png'],
        ["id" => 5, "nome" => 'Lenovo Ideapad S145', "preco" => '5100', "img" => './imagens/notebook-lenovo.png'],
    );

    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = NULL;
    }

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./estilo/style-principal.css">
<main>
    <h2>Todos os items: </h2>
    <div class="py-4 bg-body-tertiary h-100 container">
        <?php
            foreach ($notebooks as $key => $value) {
        ?>
        <div class="item-container">
            <h3><?php echo $value['nome']  ?></h3>
            <img src="<?php echo $value['img'] ?>" alt="">
            <p><?php echo "R$ " . $value['preco'] . ",00" ?></p>
            <a href="?adicionar=<?php echo $key ?>"><span class="material-symbols-outlined adicionar-carrinho">add_shopping_cart</span></a>
        </div>
        <?php
            }
        ?>
    </div>
</main>
<?php

    if (isset($_GET['adicionar'])) {
        $id_produto = $_GET['adicionar'];
        // colocar SELECT ......
        if (isset($notebooks[$id_produto])) {
            if (isset($_SESSION['carrinho'][$id_produto])) {
                $_SESSION['carrinho'][$id_produto]['quantidade']++;
            } else {
                $_SESSION['carrinho'][$id_produto] = array('quantidade' => 1, 'nome' => $notebooks[$id_produto]['nome'], 'preco' => $notebooks[$id_produto]['preco']);
            }
            echo '<script>alert("O item foi adicionado no carrinho.")</script>';
        }
    } else{
        die('Você não pode adicionar item não existente.');
    }

    include "footer.php";
?>