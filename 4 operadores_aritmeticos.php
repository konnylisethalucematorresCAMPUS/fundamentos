<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
///////////////////////////////////////////////////////////////////////////////////////////
    /*1- Operadores aritméticos*/ 

    // (SUMA)=> + 
    // (RESTA)=> -  
    // (MULTIPLICACION)=> *
    // (DIVISION)=> /
    // (ELEVAR A LA POTENCIACION)=> **
    // (DIVISION MODULAR)=> %

    //EJEMPLO
    $x = 20;
    $y = 3;
    $z = null; 

    // $z = $x + $y;
    // $z = $x - $y;
    // $z = $x * $y;
    // $z = $x / $y;
    // $z = $x ** $y;
    // $z = $x % $y;
    // echo $z;
///////////////////////////////////////////////////////////////////////////////////////////
    /*2- Operador de incremento / decremento*/

    //++ --
    $counter = 10;
    // $counter = $counter + 1;
   echo "<h2>ejemplo de operador de incremento </h2>";
    // $counter++; operador de incremento 
    //echo $counter; 

   echo "<h2>ejemplo de operador de decrementos </h2>";
    // $counter --; operador de decrementos 
    //echo $counter;

    echo "<h2>ejemplo de operador de incremento y drecremento en dos o mas valores";
    /*en 2 o mas valores */
      
    $counter += 2; //este es para incrementar de 2 en dos 
    $counter -= 4; //este es para decrementar de 4 en cuatro

    echo $counter;

///////////////////////////////////////////////////////////////////////////////////////////
    /*3-la ley de la Jerarquía - precedencia */ 

    //1. (el interpreset es el que aborda la expreciones regulares, de izquierda a derecha. El interprete tiene un respeto por una serie de caracteres, que tienen una prioridad y son los parentesis por lo tanto se atienden en primera estancia. es lo que mas tiene importancia en el codigo) => ()
    //2. (la potenciacion es menor que los parentesis pero mayor que la multiplicacion la division y que el residuo )=> **
    //3. (en tercera estancia la ultiplicacion es menor que los parentesis y la potenciacion pero mayor que el mas y el menos)=> * / %
    //4. (el mas y el menos son los que tienen menos jerarquia, por lo tanto tienen menos prioridad)=> + -

    $total = 4 + 6 * 2;
    echo "{$total}";


    ?>
</body>
</html>