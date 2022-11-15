<?php
    $nombres = array();
    $precios = array();
    $tipos = array();
    $precio_total=array();
$ivas = array();
    //$costo_total=array(); $gastos_envio=array(); $precio_total=array();$iva_total=array();

    do {
        echo "Introduce nombre, precio y tipo de iva (N/R):\n";
        $nombres[] = trim(fgets(STDIN));
        $precios[] = floatval(fgets(STDIN));
        $tipos[] = trim(fgets(STDIN));
        echo "¿Desea introducir otro producto? (S/N)\n";
        $seguir = "n" !=trim(fgets(STDIN));






    }while( $seguir=true );

    function calcular_iva($precio, $tipo){
        if ($tipo =="n"){
            return $precio * 0.21;
        } else {
            return $precio * 0.10;
        }

    }
    function calcular_envio ( $num ){
            $coste = match(true){
            $num>=1 && $num<=2 => 10,
            $num>=3 && $num<=5 => 15,
            $num>=6 && $num<=9 => 20,
            $num >=10 => 25
        };


    }
    $coste_total= 0;
    $iva_total=0;
    foreach ($nombres as $i => $nombre) {

        $tipo_iva = $tipos[$i] == "n" ? "normal" : "reducido";
        $ivas[]= calcular_iva($precios[$i],$tipos[$i]);
        $precio_total[] = round($precios[$i] + $ivas[$i],2);
        echo "Producto $nombre $precios[$i]€ + IVA $tipo_iva  $ivas[$i] $precio_total[$i]€\n";

    }

    $gastos_envio = calcular_envio(count($nombres));
    echo "Los gastos de envío son {$gastos_envio}€";
    echo "Existen? $i $nombre\n";