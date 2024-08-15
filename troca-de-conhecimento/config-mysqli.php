<?php

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'troca-de-conhecimento';

    $connection = new mysqli($host, $usuario, $senha, $banco);

    if ($connection -> connect_errno) {
        die("Falha na conxão: " . $connection -> connect_error);
    }

?>