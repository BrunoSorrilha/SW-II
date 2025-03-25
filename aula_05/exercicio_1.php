<?php

    //Criando um array associativo com informações de produtos
    $produtos = [
        ["nome" => "Notebook", "preco" => 3500.00, "quantidade" => 5],
        ["nome" => "Mouse", "preco" => 150.00, "quantidade" => 20],
        ["nome" => "Teclado", "preco" => 200.00, "quantidade" => 15]
    ];

    //Convertendo o array para JSON
    $jsonProdutos = json_encode($produtos, JSON_PRETTY_PRINT);

    //Salvando o JSON no arquivo "produtos.json"
    file_put_contents("produtos.json", $jsonProdutos);

    //Mensagem de sucesso
    echo "Arquivo produtos.json criado com sucesso!\n";

?>
