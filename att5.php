<?php

    $num1 = (int) readline("Insira o primeiro número: ");
    $num2 = (int) readline("Insira o segundo número: ");
    $num = 0;

    if ($num2 > $num1) 
    {
        for ($i = $num1; $i <= $num2 ; $i++) 
        { 
            $num = $i;
            if ($num % 5 == 0) 
            {
                print "O número " . $num . " é divisivel por 5\n";
            }else
            {
                print "O número " . $num . " não é divisivel por 5\n";
            }
        }
    }else{
        for ($i = $num2; $i <= $num1; $i++) 
        { 
            $num = $i;
            if ($num % 5 == 0) 
            {
                print "O número " . $num . " é divisivel por 5\n";
            }else
            {
                print "O número " . $num . " não é divisivel por 5\n";
            }
        }

    }