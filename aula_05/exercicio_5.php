<?php

    $arquivo = "produtos.json";

    if (!file_exists($arquivo)) {
        die("Arquivo produtos.json não encontrado!\n");
    }

    $jsonDados = file_get_contents($arquivo);
    $produtos = json_decode($jsonDados, true);

    if ($produtos === null) {
        die("Erro ao decodificar JSON\n");
    }

    $produtoRemover = "Produto Exemplo";

    $produtosAtualizados = array_filter($produtos, function ($produto) use ($produtoRemover) {
        return $produto["nome"] !== $produtoRemover;
    });

    $produtosAtualizados = array_values($produtosAtualizados);

    $jsonAtualizado = json_encode($produtosAtualizados, JSON_PRETTY_PRINT);

    if (file_put_contents($arquivo, $jsonAtualizado)) {
        echo "Produto removido com sucesso!\n";
    } else {
        echo "Erro ao salvar o arquivo!\n";
    }

?>
