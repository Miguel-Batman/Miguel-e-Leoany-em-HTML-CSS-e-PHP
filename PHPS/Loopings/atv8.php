<?php

$cpf = 0;

do {
    echo "
1 - Cadastrar aluno
2 - Consultar aluno
3 - Excluir aluno
0 - Sair
\n";

    $answer = readline("Oque quer fazer?\n");
    $answerlen = strlen($answer);

    if ($answerlen >= 4){
        echo "Opção Não encontrada";
    }


    switch ($answer) {
        case 0:
            break;
        case 1:
            global  $cpf;
            $cpf = readline("Digite o cpf:");
            echo "cadastrado com sucesso\n";
            break;
        case 2:
            global $cpf;
            if ($cpf == 0){
                echo "cpf nao encontrado\n";
            }else{
                echo "Esse é o cpf cadastrado\n$cpf\n";
            }
            break;
        case 3:
            global $cpf;
            echo "$cpf foi excluido do cadastro\n";
            $cpf = 0;
            break;
    }
} while ($answer != 0);
