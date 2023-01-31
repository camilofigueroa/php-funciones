<?php

    /**
     * Función que contiene todos los mensajes para el software.
     * Todos los mensajes deberían estar en un solo lugar.
     * @param       número      Código de error a retornar.
     */
    function retornar_error( $codigo_error )
    {
       $salida = "";
       
       switch( $codigo_error ){
        
        case 1:
            
            $salida = "Estas en un nuevo programa, bienvenido.";            
            break;
        
        case 2:
            
            $salida = ""; //No se ha definido un mensaje.            
            break;
        
        default:
            
            $salida = "??";
            
       }
       
       return $salida;
    }