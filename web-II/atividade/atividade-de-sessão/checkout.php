<?php

    include 'header.php';

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    thead, .total {
        font-weight: bold;
    }
    td {
        text-align: center;
    }
</style>
<main class="d-flex align-items-center py-4 bg-body-tertiary h-100" style="flex-direction: column;">
    <div class="w-100 m-auto container">
        <table class="table table-striped table-bordered border-primary">
            <thead>
                <tr> <!-- linha -->
                    <td>Item</td>
                    <td>Preço</td>
                    <td>Quantidade</td>
                    <td>Total/item</td>
                </tr>
            </thead>
            <tbody>
                <?php

                    if (!isset($total)) {
                        $total = 0;
                    }
    
                    if ($_SESSION['carrinho'] != NULL) {
                        foreach ($_SESSION['carrinho'] as $key => $value) {
                            $total += $value['quantidade'] * $value['preco'];
                ?>
                        <tr>
                            <td><?php echo $value['nome'] ?></td>
                            <td><?php echo "R$ " . $value['preco'] . ",00" ?></td>
                            <td><?php echo $value['quantidade'] ?></td>
                            <td><?php echo "R$ " . $value['quantidade'] * $value['preco'] . ",00" ?></td>
                        </tr>
                <?php
                        }
                ?>
                        <tr class="total">
                            <td colspan="3">Total</td>
                            <td><?php echo "R$ " . $total . ",00" ?></td>
                        </tr>
                <?php
                    } else {
                        echo "<h5 style='text-align: center;'>Carrinho Vazio</h5>";
                    }
                ?>
        </tbody>
        </table>
    </div>
    <a href="principal.php" class="btn btn-primary" style="background-color: white; color: blue;">Voltar</a>
</main>