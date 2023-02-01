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
    
    
    
    /**
     * Una forma simple de imprimir los campos de cualquier consulta.
     * @param       array       Un arreglo que contiene los nombres de los campos a imprimir.
     * @param       texto       El primer campo opcional a imprimir de una consulta.
     * @param       texto       El segundo campo opcional a imprimir de una consulta.
     * @param       texto       El tercer campo opcional a imprimir de una consulta.
     */
    function imprimir_tabla_bd1( $resultado, $campo1 = null, $campo2 = null, $campo3 = null )
    {   
        while( $fila = mysqli_fetch_assoc( $resultado ) )
        {
            if( $campo1 != null ) echo $fila[ $campo1 ]; //Si el parámetro 1 ha sido ocupado, se usará par mostrar.
            if( $campo2 != null ) echo $fila[ $campo2 ]; //Si el parámetro 2 ha sido ocupado, se usará par mostrar.
            if( $campo3 != null ) echo $fila[ $campo3 ]; //Si el parámetro 3 ha sido ocupado, se usará par mostrar.
        }
    }
    
    /**
     * Una forma de imprimir los campos de cualquier consulta.
     * @param       array       Un arreglo que contiene los nombres de los campos a imprimir.
     */
    function imprimir_tabla_bd2( $resultado, $campos )
    {        
        while( $fila = mysqli_fetch_assoc( $resultado ) )
        {
            for( $i = 0; $i < count( $campos ); $i ++ )
            echo $fila[ $campos[ $i ] ];            
        }
    }