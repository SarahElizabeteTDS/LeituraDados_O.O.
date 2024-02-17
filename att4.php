<?php 

    $pares = 0;
    $impares = 0;
    $num = 0;
    
    for ($i = 0; $i < 10; $i++) 
    { 
        $num = readline("Informe um número: ");

        if ($num % 2 == 0) 
        {
            print "O número " . $num . " é par.\n";
            $pares += 1;
        }else{
            print "O número " . $num . " é impar.\n";
            $impares += 1;
        }
    }

    print "A quantidade de números pares é de: " . $pares . "\n";
    print "A quantidade de números impares é de: " . $impares . "\n";