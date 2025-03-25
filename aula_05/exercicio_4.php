<?php

    $arquivo = "usuarios.json";

    if (!file_exists($arquivo)) {
        die("Arquivo usuarios.json não encontrado!\n");
    }

    $jsonDados = file_get_contents($arquivo);
    $usuarios = json_decode($jsonDados, true);

    if ($usuarios === null) {
        die("Erro ao decodificar JSON\n");
    }

    $emailBusca = isset($_GET['email']) ? $_GET['email'] : "pedro@email.com";

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
