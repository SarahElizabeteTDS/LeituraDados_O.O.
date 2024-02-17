<?php

    $num1 = readline("Informe o primeiro número: ");
    $num2 = readline("Informe o segundo número: ");
    $num3 = readline("Informe o terceiro número: ");

    if ($num3 > $num2 && $num2 > $num1) 
    {
        print "O número " . $num1 . " é o menor número\n";
    } elseif ($num1 > $num3 && $num3 > $num2) {
        print "O número " . $num2 . " é o menor número\n";
    } else {
        print "O número " . $num3 . " é o menor número\n";
    }