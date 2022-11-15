<?php
    //Creamos un objeto con la fecha de hoy
    $ahora = new DateTime("now");

    //Pedimos una fecha por teclado con estructura (YYYY-MM-DD)
    echo "Bienvenido usuario. Te diré hace cuanto se ha hecho una publicación: (YYYY-MM-DD) \n";
    $entrada = trim(fgets(STDIN));

    //Creamos la variable que recibe una fecha por entrada
    $fecha_entrada = new DateTime($entrada);

    //Buscamos la diferencia entre las fechas
    $diferencia = $ahora -> diff($fecha_entrada);

    //Mostramos la diferencia por pantalla
    echo $ahora -> format('Y-m-d H:i:s')."\n";
    echo $diferencia -> format('Y-m-d');


