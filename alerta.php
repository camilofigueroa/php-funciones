<?php

    include( "bodega_vista.php" );

    if( isset( $_GET['mensajillo'] ) ) //Capturo el mensaje enviado a través de la URL.
    {
        $variable = $_GET['mensajillo'];
    }

    //Ojo, aquí sí se debe cerrar el php para que no se confunda con el html.
?>

<!-- Aquí empieza el html. -->
<html> <!-- Este comentario es de html -->
    <head>
        <title>Mensaje para el estudiante.</title>
    </head>
    
    <body>
        
        <!-- Esto ya es javascript -->
        <script>
            
            // ¿Cambió la forma de comentar?
            // Vale, aquí también se puede usar php, se usa la variable que se generó al inicio del programa.
            alert ( " <?php echo $variable; ?> " );  
            
        </script>
        
        <?php
            
            // ¿Más php?
            for( $i = 1; $i <= 10; $i ++ ){
                
                //Se usará la función que está en otro archivo.
                echo imprimir_h( $variable, 1 ); //Se imprimirá el mensaje con h1.
            }
        
        ?>
        
        
        <?php
            include( "mensaje-html.php" );
        ?>
        
        
        
    </body>
</html>