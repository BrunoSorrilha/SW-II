<?php

    $arquivo = "usuarios.json";

    //Verifica se o arquivo existe
    if (!file_exists($arquivo)) {
        die("Arquivo usuarios.json não encontrado!\n");
    }

    //Lendo o JSON
    $jsonDados = file_get_contents($arquivo);
    $usuarios = json_decode($jsonDados, true);

    //Verifica se a conversão deu certo
    if ($usuarios === null) {
        die("Erro ao decodificar JSON\n");
    }

    //Email a ser buscado
    $emailBusca = isset($_GET['email']) ? $_GET['email'] : "joao@email.com";

    //Busca o usuário pelo email
    $usuarioEncontrado = null;
    foreach ($usuarios as $usuario) {
        if ($usuario["email"] === $emailBusca) {
            $usuarioEncontrado = $usuario;
            break;
        }
    }

    //Exibe o resultado
    if ($usuarioEncontrado) {
        echo "Usuário encontrado:\n";
        echo "ID: " . $usuarioEncontrado["id"] . "\n";
        echo "Nome: " . $usuarioEncontrado["nome"] . "\n";
        echo "Email: " . $usuarioEncontrado["email"] . "\n";
    } else {
        echo "Usuário não encontrado com o email: $emailBusca\n";
    }

?>
