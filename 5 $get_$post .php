<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <!--
        <form action="get_post.php" method = "get">
            <label>Usuario</label>
            <input type="text" name="user">
            <label>Clave</label>
            <input type="Password" name="password">
            <input type="submit" value="Enviar">
        </form>
    !-->

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    <?php
    echo "<h1>VARIABLES PREDEFINIDAS</h1>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////
    echo "<h2>METODO $_GET </h2>";
    echo "<p>"SE TRANSFIERE DEL CLIENTE AL SERVIDOR POR MEDIO DE URL"<br>
    es una matriz asociativa de variables PASADAS al script actual a traves de los parametros <br>
    de URL (tambien conocidos como cadena de consulta). Tenga en cuenta que la matriz no solo se completa <br> 
    para las solicitudes GET, sino tambien para todas las solicitudes con una cadena de consulta
    </p>";

    echo ""ejemplo del metodo GET "";
    //lo pasa con le metodo GET es que los datos que son como usuario y contraseña al enviarsen se añaden al buscador de la URL
    //por lo tanto hacer formularios o cosas que lleven informacion confidencial lo deal es utilizar el metodo
 echo
    "<form action="get_post.php" method = "get">
        <label>Usuario</label>
        <input type="text" name="user">
        <label>Clave</label>
        <input type="Password" name="password">
        <input type="submit" value="Enviar">
    </form>"



///////////////////////////////////
    echo "<h2>METODO $_POST </h2>";
    echo "<p>una matriz asosiativa de variables a la secuencia de comandos actual a traves del metodo HTTP POST <br>
    cuando se usa appication/x-xxxx-form-urlendoded o multipar/form-datacomo el tipo de contenido HTTP en la solicitud</p>"
     ?>
     
</body>
</html>