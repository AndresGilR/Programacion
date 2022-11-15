    //crear funcion que dada una cadena y un parametro booleano cursiva devuelve
    //un string con el codigo html que la muestra en negrita o cursiva.
    //AMPLIACION: 2 opciones extra : subrayado y otra de decoracion a nuestro gusto.
   //para poner el texto en cursiva<i>…</i>
    // para pasar a letra negrita es <b>Este texto aparecerá escrito en negrita</b>
     //se utiliza para subrayar una cadena <u>este texto aparecera subrayado </u>
     //para tachar el texto debemos poner <strike>este texto aparecera tachado</strike>


    echo "Bienvenido usuario, le voy a transformar con estilos una cadena. Introduce la cadena: \n";
    $cadena = fgets(STDIN);
    echo "\n Ahora pásame si quieres que sea cursiva (opcion 2), negrita (opcion 1) \n";
    echo " \n subrayado (opcion 3) o tachado (opcion 4)\n";
    $logico = (int)fgets(STDIN);
    require_once('funciones.php');
