<?php

echo "My first PHP script!";
echo "<br>";
echo "Mis datos:";
$nombre= "Joadan Josef Matias Vidal";
$edad =19;
$estatura = 1.75;
echo "soy ..." .strtoupper($nombre). "            tengo" . $edad. "años y mido" .$estatura . "metros";
echo "<br>";
var_dump( is_int($nombre));
echo "<br>";
$x=34;
$y=356.78;
$z=$x+$y;
echo "La suma es $x + $y = $z <br>";
echo "<br>";
$x=34;
$y=356.78;
$z=$x-$y;
echo "La resta es $x - $y = $z <br>";
echo "<br>";
$x=34;
$y=356.78;
$z=$x/$y;
echo "La division es $x / $y = $z <br>";
echo "<br>";
$x=34;
$y=356.78;
$z=$x*$y;
echo "multiplicacion es $x * $y = $z <br>";
echo "<br>";
$x=40;
$y=12;
$z=$x^$y;
echo "la exponenciacion es $x ^ $y = $z <br>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica php</title>
</head>
<body>
    Hola
</body>
</html>