<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errores</title>
</head>
<body>
<?php
        echo "<h1>hola mundo cruel</h1>";
        echo phpversion();

        /* 2. Errores*/
        // 2.1 Parse error: sintaxis de error
        $variable = "hola mundo viejo men";
        echo $variable;

        // 2.2.  Warning: es un error de logica inexistente (logico)
        echo $variablefgfgfg;
        echo "esto si se debe ejecutar";

        // 2.3 Fatal error: es una cosntante indefinida 
        /*este error me bloquea el codigo ademas  de esto significa que ha ocurrido algo muy serio que impide 
        que el programa funcione correctamente. Puede ser causado por diversas razones, como la falta de un archivo necesario, 
        la violación de reglas de sintaxis o el uso incorrecto de funciones o variables*/
        //sdfsdfsd;
?>
</body>
</html>






