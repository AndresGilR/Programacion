<?php


echo "a \t b \t c \ta O b \ta = c \t Expresion\n";
echo "********************************\n";
for ($a = 0; $a <= 1; $a++) {

    for ($b = 0; $b <= 1; $b++) {


        for ($c = 0; $c <= 1; $c++) {
            $a_o_b = intval($a || $b);
            $a_y_c = intval ($a && $c);
            $expre = intval( $a_o_b && $a_y_c);
            echo "$a \t $b \t $c \t $a_o_b \t\t $a_y_c \t\t $expre\n";


        }
    }
}
