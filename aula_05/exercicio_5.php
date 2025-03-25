<?php

    $arquivo = "produtos.json";

    //Verifica se o arquivo existe
    if (!file_exists($arquivo)) {
        die("Arquivo produtos.json não encontrado!\n");
    }

    $jsonDados = file_get_contents($arquivo);
    $produtos = json_decode($jsonDados, true);

    if ($produtos === null) {
        die("Erro ao decodificar JSON\n");
    }

    //Nome do produto a ser removido
    $produtoRemover = "Produto Exemplo";

    //Filtra os produtos removendo o que tem o nome especificado
    $produtosAtualizados = array_filter($produtos, function ($produto) use ($produtoRemover) {
        return $produto["nome"] !== $produtoRemover;
    });

    //Reindexa o array
    $produtosAtualizados = array_values($produtosAtualizados);

    //Converte o array atualizado para JSON
    $jsonAtualizado = json_encode($produtosAtualizados, JSON_PRETTY_PRINT);

    //Salva no arquivo
    if (file_put_contents($arquivo, $jsonAtualizado)) {
        echo "Produto removido com sucesso!\n";
    } else {
        echo "Erro ao salvar o arquivo!\n";
    }

?>
