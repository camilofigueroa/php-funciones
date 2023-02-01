<?php

    /**
     * Este es el archivo para llamar y usar las funciones.
     */
    
    //Aquí se hacen diferentes llamados a los archivos que contienen las funciones.
    //El propósito de eas técnicas es organizar el código.
    include( "bodega_vista.php" );
    include_once( "bodega_controlador.php" );
    require( "bodega_modelo.php" );
    
    //Se prueba el ejemplo de la negrilla.
    echo imprimir_negrilla( retornar_error( 1 ) );
    
    echo "<br>";
    
    //Se prueba un ejemplo de la suma de números.
    echo sumar_numeros( 1, 2 );
    
    echo "<br>";
    
    //Se prueba un ejemplo de la suma de números con cuatro parámetros.
    echo sumar_numeros( 1, 2, 5, -1 );
    
    echo "<br>";
    
    //Primera forma para calcular un promedio.
    echo promedio1( sumar_numeros( 4.0, 2, 4.9 ), 3 );
    
    echo "<br><br>";
    
    echo "Un estudiante tiene las siguientes notas. 4, 4.5 y 1, calcular el promedio:<br>";
    echo promedio2( 4, 4.5, 1 );
    echo "<br>El estudiante no es del Sena porque allí solo se usa A o D.";
    
    echo "<br><br>";
    
    //Otra forma de aprovechar las funciones.
    $valor = sumar_numeros( 4.0, 2, 4.9 ); //Se usa una variable global que sirva de puente.
    echo promedio1( $valor, 3 );
    
    echo "<br><br>";
    
    
    //----------- ejemplo 1 de promedio para estudiante ----------------------------------
    
    //Se puede reusar la misma variable global una y otra vez.
    $valor = sumar_numeros( 1.0, 1, 3 ); //Se usa una variable global que sirva de puente.
    $valor =  promedio1( $valor, 3 ); //Volvemos a usar la variable.
    
    //QUitar comentario para ver este ejemplo. Paso de texto por URL.
    /*if( $valor <= 3 ){
        
        //Se puede enviar un mensaje por URL ...
        header( "location: alerta.php?mensajillo=Desaprobado, que decepción." );
        
    }else{
        
        header( "location: alerta.php?mensajillo=Aprobado, casi que no!!!." );
    }*/
    
    //----------fin ejemplo 1 ------------------------------------------------------------
    
    
    //Si se quita el comentario de la siguiente línea, el sitio se irá para la biblioteca Sena.
    //redireccionar_biblioteca_Sena();
    
    echo pintar_div_colores( "Muchas gracias a todos. Chao." );
    
    
    //---------------- sección base de datos ----------------------------------------------
    
    $r = consultar_tabla( "tb_usuarios" );
    imprimir_tabla_bd1( $r, "documento", "nombres" ); //Se imprime campo a campo.
    echo "<br>";
    $r = consultar_tabla( "tb_usuarios" );
    imprimir_tabla_bd2( $r, [ "documento", "nombres", "apellidos" ] ); //Se usa un arreglo para variar la cantidad y nombres de los campos.
    
    
    
    