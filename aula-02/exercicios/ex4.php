<?php 

    $opcao = 1;

    switch ($opcao) {
        case 0:
            echo 'Opção selecionada: Abrir';
            break;

        case 1:
            echo 'Opção selecionada: Salvar';
            break;

        case 2:
            echo 'Opção selecionada: Sair';
            break;
        
        default:
            echo 'Selecione alguma opção';
            break;
    };
?>