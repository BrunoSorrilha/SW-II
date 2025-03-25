<?php

    $arquivo = "produtos.json";

    if (!file_exists($arquivo)) {
        $produtos = [
            ["nome" => "Teclado", "preco" => 150, "quantidade" => 10],
            ["nome" => "Mouse", "preco" => 80, "quantidade" => 15],
            ["nome" => "Monitor", "preco" => 700, "quantidade" => 5]
        ];
        file_put_contents($arquivo, json_encode($produtos, JSON_PRETTY_PRINT));
    } else {

        $jsonDados = file_get_contents($arquivo);
        $produtos = json_decode($jsonDados, true);


        if ($produtos === null) {
            die("Erro ao decodificar JSON\n");
        }
    }

    $novoProduto = ["nome" => "Headset", "preco" => 200, "quantidade" => 8];

    $produtos[] = $novoProduto;

    file_put_contents($arquivo, json_encode($produtos, JSON_PRETTY_PRINT));

    echo "Novo produto adicionado com sucesso!\n";

?>
