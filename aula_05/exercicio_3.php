<?php

    $arquivo = "produtos.json";

    //Verifica se o arquivo existe, se não, cria um com dados de exemplo
    if (!file_exists($arquivo)) {
        $produtos = [
            ["nome" => "Teclado", "preco" => 150, "quantidade" => 10],
            ["nome" => "Mouse", "preco" => 80, "quantidade" => 15],
            ["nome" => "Monitor", "preco" => 700, "quantidade" => 5]
        ];
        file_put_contents($arquivo, json_encode($produtos, JSON_PRETTY_PRINT));
    } else {
        //Lendo o JSON do arquivo
        $jsonDados = file_get_contents($arquivo);
        $produtos = json_decode($jsonDados, true);

        //Verificando se a conversão foi bem-sucedida
        if ($produtos === null) {
            die("Erro ao decodificar JSON\n");
        }
    }

    //Novo produto a ser adicionado
    $novoProduto = ["nome" => "Headset", "preco" => 200, "quantidade" => 8];

    //Adicionando o novo produto ao array
    $produtos[] = $novoProduto;

    //Convertendo o array atualizado para JSON e salvando no arquivo
    file_put_contents($arquivo, json_encode($produtos, JSON_PRETTY_PRINT));

    echo "Novo produto adicionado com sucesso!\n";

?>
