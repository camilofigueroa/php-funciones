<?php

    /**
     * Esta función imprime en negrilla un texto ingresado como parámetro.
     * @mensaje     texto       Mensaje para colocar en negrilla.
     * @return      texto       Mensaje colocado en negrilla.
     */
    function imprimir_negrilla( $mensaje )
    {
       return  "<b>".$mensaje."</b>";
    }
    
    /**
     * Esta función imprime en h1, h2 hasta h6, un texto ingresado como parámetro.
     * @param       texto       Mensaje para ampliar con etiquetas h.
     * @param       texto       Valor del h.
     * @return      texto       Mensaje colocado en negrilla.
     */
    function imprimir_h( $mensaje, $valor )
    {
       return  "<h$valor>$mensaje</h$valor>"; //En php se puede concatenar de esa forma, sin concatenadores intermedios.
    }
    
    /**
     * Coloca un mensaje adentro de un div que cambiará de color.
     * Quizás se podría probar el siguiente ejemplo para ver si se mejora el tema de los colores.
     * https://www.yoelprogramador.com/funcion-php-para-obtener-color-aleatorio/
     * @param       texto       Un texto para adornar.
     * @return      texto       Un texto que representa un html con un div adornado de colores.
     */
    function pintar_div_colores( $mensaje_interno )
    {  
       $salida = "<div style='background-color: ".rand( 0, 1000000 )."; '>$mensaje_interno</div>"; //Cuidado con el juego de comillas dobles y sencillas.
       
       return $salida;
    }