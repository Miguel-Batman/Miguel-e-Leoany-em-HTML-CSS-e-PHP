<?php


do {
    echo "1 - Cadastrar aluno
2 - Consultar aluno
3 - Excluir aluno
0 - Sair\n";

    $answer = readline("   ");
    $answerlen = strlen($answer);

    switch ($answer) {
        case 0:
            break;
        case 1:
            global($cpf = readline("Digite o cpf:"));
            echo "cadastrado com sucesso";
        case 2:
            echo;
        case 3:
            echo "foi excluido do cadastro";
    }
} while ($answer != 0);

?>