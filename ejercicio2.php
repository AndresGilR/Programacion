<?php
    require_once('funciones.php');
    echo "Dame una cadena: \n";
    $cadena = (string) fgets(STDIN);
    echo "\nOpcion 1: Negrita, opcion 2: Cursiva, opcion 3: Subrayado, opcion 4: tachado \n";
    $logico = fgets(STDIN);
    palabra($cadena,$logico);
    cierre();