<?php       
    // Usando MySQLi:

    // Configurações do banco de dados
    $host = "localhost";      // Endereço do servidor do banco de dados
    $usuario = "root";        // Nome de usuário do banco de dados
    $senha = "";          // Senha do banco de dados
    $banco = "jogo-das-perguntas";           // Nome do banco de dados

    // Criar a conexão com o banco de dados
    $conexao = new mysqli($host, $usuario, $senha, $banco);

    // Verificar se a conexão foi estabelecida corretamente
    if ($conexao->connect_errno) {
        die("Falha na conexão: " . $conexao->connect_error);
    }
?>