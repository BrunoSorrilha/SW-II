<?php

    //Lendo o arquivo usuarios.json
    $jsonDados = file_get_contents("usuarios.json");

    //Convertendo o JSON para um array PHP
    $usuarios = json_decode($jsonDados, true);

    //Verificando se a conversão foi bem-sucedida
    if ($usuarios === null) {
        die("Erro ao decodificar JSON\n");
    }

    //Exibindo os nomes e emails de todos os usuários
    echo "Lista de Usuários:\n";
    foreach ($usuarios as $usuario) {
        echo "Nome: " . $usuario["nome"] . " - Email: " . $usuario["email"] . "\n";
    }

?>
