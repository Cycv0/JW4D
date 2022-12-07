<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
var_dump(abs(-5));
echo min(0, 150, 30, 20, -8, -200);
echo max(0, 150, 30, 20, -8, -200);
echo pi();
var_dump(round(3.4));
var_dump(round(3.6));
$number = 5.045;
var_dump(round($number, 2));
$number = 5.055;
var_dump(round($number, 2));
rand(900, 1000);
echo sqrt (0);
echo sqrt (64);
echo sqrt (256);
echo sqrt (65536);
</body>
</html>
<?php
$x=4;
$y=8;
$b=2.77;
$a=6.44;

echo "<br>zmienna ma wartosc .$a. a funkcja is_int zwraca:";
var_dump (is_int($x));

echo "<br>zmienna ma wartosc .$b. a funkcja is_int zwraca:";
var_dump (is_int($y)) ;

echo "<br>zmienna ma wartosc .$x. a funkcja is_int zwraca:";
var_dump (is_int($a));

echo "<br>zmienna ma wartosc .$y. a funkcja is_int zwraca:";
var_dump (is_int($b)) ;

var_dump(is_float($y));
$dodaj="59.85"+100;
echo " <br>z to: " .$b." i dla funkcji is_float przyjmuje:";
var_dump(is_float($b));
echo " <br>a to: " .$a." i dla funkcji is_float przyjmuje:";
var_dump(is_float($a));
echo "<br>dodaj to: " .$dodaj." i dla funkcji is_numeric przyjmuje:";
var_dump(is_numeric($dodaj));

$c = 5;
$d = 10;
echo "<br>wynik dodawania 5 i 10 wynosi";
$suma = $c + $d;
echo $suma;

$e = 4;
$f = 35;
echo "<br>pole prostokąta o bokach długości $e i $f wynosi: ";
$suma = $e * $f;
echo $suma;
echo "j^2";
echo "<br> obwód trójkąta wynosi:";
echo 2 * $f + 2 * $f;
var_dump(abs(-5));
echo min(0, 150, 30, 20, -8, -200);
echo max(0, 150, 30, 20, -8, -200);
echo pi();
var_dump(round(3.4));
var_dump(round(3.6));
$number = 5.045;
var_dump(round($number, 2));
$number = 5.055;
var_dump(round($number, 2));
rand(900, 1000);
echo sqrt (0);
echo sqrt (64);
echo sqrt (256);
echo sqrt (65536);
?>

