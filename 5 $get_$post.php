<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>get y post</title>
</head>
<body>
    <h2> ejemplo del metodo $_GET</h2>
    
    <h1><form action="5 $get_$post.php" method = "get">
            <label>Usuario</label>
            <input type="text" name="user">
            <label>Clave</label>
            <input type="Password" name="password">
            <input type="submit" value="Enviar">

        <?php
            //esto es un boton adicional con php boton hijito solo que pues tiene la misma funcion de uno normal en html
            echo '<input type="submit" value="Enviar2">';
        ?>
        </form>
    </h1>
    // ejemplo del metodo $_GET
    <?php
    //esto es para que cuando yo envie mis cresdenciales de usuario y clave se me impriman 
    // el if es un condicional para que si llegaron datos via POST imprimalos pero si no ha llegado informacion pues no haga nada,

    if ($_POST){
    echo "<br>";
    $usuario = $_POST['user'];
    echo $usuario . "<br>";
    $clave = $_POST['password'];
    echo $clave  . "<br>";
    }
    ?>
    

    
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    

</body>
</html>

<?php
    //esto es para que cuando yo envie mis cresdenciales de usuario y clave se me impriman 
   /* echo "<br>";
    $usuario = $_GET['user'];
    echo $usuario . "<br>";
    $clave = $_GET['password'];
    echo $clave  . "<br>";
    */

    echo "<h1>VARIABLES PREDEFINIDAS</h1>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////
    echo "<h2>METODO GET </h2>";
    echo "<p>SE TRANSFIERE DEL CLIENTE AL SERVIDOR POR MEDIO DE URL<br>
    es una matriz asociativa de variables PASADAS al script actual a traves de los parametros <br>
    de URL (tambien conocidos como cadena de consulta). Tenga en cuenta que la matriz no solo se completa <br>
    para las solicitudes GET, sino tambien para todas las solicitudes con una cadena de consulta
    </p>";

    echo "ejemplo del metodo GET ";
    //lo pasa con le metodo GET es que los datos que son como usuario y contraseña al enviarsen se añaden al buscador de la URL
    //por lo tanto hacer formularios o cosas que lleven informacion confidencial lo deal es utilizar el metodo
    

///////////////////////////////////
    echo "<h2>METODO POST </h2>";
    echo "<p>una matriz asosiativa de variables a la secuencia de comandos actual a traves del metodo HTTP POST <br>
    cuando se usa appication/x-xxxx-form-urlendoded o multipar/form-datacomo el tipo de contenido HTTP en la solicitud</p>"
    ?>