<?php

function apertura($titulo="Por si aca"){
    echo "<!DOCTYPE html>\n";
    echo "<html>\n";
    echo "<head>\n";
    echo "<title>$titulo</title>\n";
    echo "</head>\n";
    echo "<body>\n";
}

function titulo($cadena){
    echo "<title>$cadena</title>\n";
}

function cierre(){
    echo "</body>";
    echo "</html>";
}
function palabra($cadena,$logico){
    if ($logico==1){
        echo "<bold>$cadena</bold>";
    }
    if ($logico == 2 ){
        echo "<i>$cadena</i>";
    }
    if ($logico==3){
        echo "<u>$cadena </u>";

    }
    if ($logico==4){
        echo "<strike>$cadena</strike>";

    }
}

