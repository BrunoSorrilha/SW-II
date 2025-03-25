<?php

    $jsonDados = file_get_contents("usuarios.json");

    $usuarios = json_decode($jsonDados, true);

    if ($usuarios === null) {
        die("Erro ao decodificar JSON\n");
    }

    echo "Lista de Usuários:\n";
    foreach ($usuarios as $usuario) {
        echo "Nome: " . $usuario["nome"] . " - Email: " . $usuario["email"] . "\n";
    }

?>
