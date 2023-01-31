<?php

    //Cómo archivo, el index debería dejarse solo con esta función, para redireccionar al contenido.

    //Esta función redirecciona al archivo quie ejecuta los ejemplos de funciones.
    //Cuando se ejecute, la URL cambiará instantáneamente hacia el otro archivo.
    header( "location: ejecutor.php" );
    
    /*  Nota: generalmente cuando un sitio entra en reparación, se debe redireccionar a una página
        que diga: "sitio en reparación". Si no se usa esta estrategia, desmontar el sitio va a ser muy difícil.
    */