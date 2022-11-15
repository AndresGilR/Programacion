<?php
    $a = array('a','e','i');
    $c = array ('c','d','f','g');
    echo "***********************\n";
    for ($i = 0; $i <= 2; $i++ ){
        for ($j = 0; $j <= 3; $j++){
            for ($k = 0; $k <= 2; $k++){
                echo "****\t";
                echo $a[$i]."\t";
                echo $c[$j]."\t";
                echo $a[$k]."\t";
                echo "****\t";
                echo "\n";
            }

        }

    }
