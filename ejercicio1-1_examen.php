<?php
    //No A y B
    echo "a \t b \tNo a \t No a Y b \n";
   echo "*****************************\n";
    for ($a = 0; $a <= 1; $a++ ){
        for ($b = 0; $b<=1; $b++){
            //Exclamacion es para decir que es NO algo. EJ : $no_a = !$a;
            $no_a = (int) !$a;
            $no_a_y_b = intval (!$a && $b);
            echo "$a \t $b \t $no_a\t\t $no_a_y_b \n";
        }

    }