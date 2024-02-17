<?php

    $valor = 1;
    $nome = "Fulano";
    $soma = 0;

    while ($valor != 0) 
    {
        $nome = (string) readline("Informe seu nome: ");
        $valor = (int) readline("Informe o valor da contribuição: ");
        print"\n";

        $soma += $valor;
    }

    print "O valor arrecadado é de: " . $soma . "\n";