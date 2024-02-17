<?php

    $num = (int) readline("Informe um número: ");
    if ($num >= 0) 
    {
        print "O número " . $num . " é positivo!\n";
        print "Seu dobro é : " . $num*2 . "\n";

    }else{
        print "O número " . $num . " é negativo!\n";
        print "Seu triplo é : " . $num*3 . "\n";
    }