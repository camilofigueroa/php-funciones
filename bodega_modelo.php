<?php

    //No se han definido funciones que conecten con la base de datos.
    
    /*
        #Base de datos bd_prueba_adso
        #Ejecutar y crear esta tabla para poder realizar las pruebas.
     
        CREATE TABLE tb_usuarios
        (
            documento       varchar( 15 )       not null,
            nombres         varchar( 20 )       not null,
            apellidos       varchar( 20 )       not null,
            fecha_nac       datetime            not null,
            edad            int                 null,
            salario         double              null,
            primary key( documento )    
                
        )engine = innoDB ;
        
    */
    
    
    /**
     * Esta función se encarga de la conexión a la base de datos, es prudente y buena práctica
     * tener una y solo una función que se encargue de eso. Si hay varias conexiones del mismo tipo,
     * el software está mal construido.
     * @return      Conexión        Una conexión a una base de datos según los parámetros establecidos.
     */
    function conectar_a_bd (){
        
        //Esta función adquiere los valores necesarios para la conexión por medio de este include.
        include( "config.php" );
        
        return mysqli_connect( $servidor, $usuario, $clave, $bd );
    }
    
    
    /**
     * Realiza la consulta
     * @param       texto       Un texto que representa el nombre d euna tabla.
     * @return      recordset   Un arreglo que contiene filas y columnas de una consulta.
     */
    function consultar_tabla( $tabla )
    {
        $conexion = conectar_a_bd(); //Se conecta a la base de datos.
        
        $sql = " SELECT * FROM $tabla "; //Se construye la consulta.
        $resultado = $conexion->query( $sql ); //Se ejecuta la consulta.
        $conexion->close(); //Se cierra la conexión.
        
        return $resultado;
    }