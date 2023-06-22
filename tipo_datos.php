<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de datos</title>
</head>
<body>
    <?php
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h2>Tipo de dato Cadena</h2>";
    /*1. String. Serie de caracteres - cadena */

    $cliente = "Falcao";
    //echo "the customer " .$customer; //metodo para concatenar 
    echo "el cliente {$cliente} compró <br>"; //otra manera y la recomendada para utilizar
    
    $comida_favorita = "Panzerotti y Pizza";
    echo "un {$comida_favorita} <br>";

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h2>Tipo de dato enteros</h2>";
    /*2. Integer. Enteros: es un numero*/

    $precio = 5000;
    echo "que costo {$precio}";

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h2>Tipo de dato numeros reales</h2>";
    /*3. FLoating point number - floats- doubles - real numbers. Numeros reales*/

    $porcentaje_de_goles_por_partido = 4.5;
    echo "<br> y ahora esta celebrando su tasa de goles por partido de futbol de {$porcentaje_de_goles_por_partido}";
    

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h2>Tipo de dato booleano </h2>";
    /*4. Boleano.Tiene dos valores true o false*/

    $estado = true;
    echo "es falcao un campeon? eso es {$estado}";

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h2>obtener tipo de dato </h2>";
    /*5. Obtener Tipos de datos*///manera para obtener los tipos de datos que voy utilizando en mi programa

    $type_data = gettype($precio);
    echo "tipo de datos es: {$type_data}";


    $type_data = gettype($porcentaje_de_goles_por_partido);
    echo "<br>tipo de datos es: {$type_data}";

    $type_data = gettype($estado);
    echo "<br>tipo de datos es: {$type_data}";

    ?>
</body>
</html>