<?php

    $produtos = [
        ["nome" => "Notebook", "preco" => 3500.00, "quantidade" => 5],
        ["nome" => "Mouse", "preco" => 150.00, "quantidade" => 20],
        ["nome" => "Teclado", "preco" => 200.00, "quantidade" => 15]
    ];

    $jsonProdutos = json_encode($produtos, JSON_PRETTY_PRINT);


    file_put_contents("produtos.json", $jsonProdutos);


    echo "Arquivo produtos.json criado com sucesso!\n";

?>
