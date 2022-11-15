<?php
    //no a y  (b != c)
    echo "a \t b \t c \t expresion \n";
    echo "***************************** \n";
    for ($a = 0; $a <= 1; $a++){
        for ($b = 0; $b <= 1; $b++){
            for ($c = 0; $c <= 1; $c++){
                $expresion = intval (!$a && ($b != $c));
                echo "$a \t $b \t $c \t $expresion \n";

            }

        }

    }