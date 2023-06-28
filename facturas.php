<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO</title>
</head>
<body>
    <form action="6 facturas.php" method= "POST"> 
        <label for="">Criptomoneda</label>
        <select name="opt" id="">
            <option value="BTC">Bitcoin</option>
            <option value="ETH">Ethereum</option>
            <option value="DOGE">DOGECOIN</option>
            <option value="BNB">BNB</option>
    
        <label for="">Cantidad</label>
        <input type="number" name="cantidad">

        <label for="">Precio</label>
        <input type="number" name="precio">

        <input type="submit">
    </form>
</body>
</html>
<?php 
// aqui es para obtener los datos
$bit = $_POST['opt'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio' ];


$math = $cantidad * $precio;
echo "Nombre de Criptomoneda{$bit}, la cantidad comprada es: 
{$math}";
?> 