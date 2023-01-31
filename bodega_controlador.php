<?php

    require_once( "archivo_mensajes_errores.php" ); //Esta bodega de funciones a su vez incorpora a otra, con más funciones.

    /**
     * Esta función suma varios números, de los cuales solo los dos primeros son obligatorios.
     * @param       número      Primer número a sumar.
     * @param       número      Segundo número a sumar.
     * @param       número      Tercer número a sumar, es opcional.
     * @param       número      Cuarto número a sumar, es opcional.
     * @param       número      Quinto número a sumar, es opcional.
     * @param       número      Sexto número a sumar, es opcional.
     * @return      
     */
    function sumar_numeros( $n1, $n2, $n3 = null, $n4 = null, $n5 = null, $n6 = null)
    {
        $salida = $n1 + $n2; //Se suman los únicos parámetros obligatorios.
        
        if( $n3 != null ) $salida += $n3; //Si el parámetro n3 no es nulo, se suma.
        if( $n3 != null ) $salida += $n4; //Si el parámetro n4 no es nulo, se suma.
        if( $n3 != null ) $salida += $n5; //Si el parámetro n5 no es nulo, se suma.
        if( $n3 != null ) $salida += $n6; //Si el parámetro n6 no es nulo, se suma.
        
        return $salida;
    }
    
    
    /**
     * Calcula el promedio aprovechando la suma como parámetro.
     * @param       número      Suma de los números.
     * @param       número      Cantidad de los números.
     * @return      número      Promedio calculado.
     */
    function promedio1( $suma, $cantidad )
    {
        $salida = $suma / $cantidad; //Algunas veces una función solo requiere una línea de código.
        
        return $salida;
    }
    
    
    /**
     * Calcula el promedio aprovechando la función suma internamente.
     * Podría usarse para el cálculo de notas.
     * @param       número      Número 1 a sumar.
     * @param       número      Número 1 a sumar.
     * @param       número      Número 1 a sumar.
     * @return      número      Promedio calculado.
     */
    function promedio2( $num1, $num2, $num3 )
    {
        $salida = sumar_numeros( $num1, $num2, $num3 ) / 3; 
        
        return $salida;
    }
    
    /**
     * Redirecciona a la biblioteca virtual del Sena.
     * Esta función no necesita parámetros porque cuando se ejecuta, saltará ...
     * a otra página y todas las operaciones y cálculos no importarán.
     */
    function redireccionar_biblioteca_Sena()
    {
        header( "location: https://biblioteca.sena.edu.co" );
    }
    
    
    
    