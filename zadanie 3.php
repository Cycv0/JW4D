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

<pre>
    <?php
    $owoce = array_fill(8, 5, 'mango');
//    print_r ($owoce);

    $parzyste = range(0,12,2);
//    print_r ($parzyste);

    $dziesiatki = range(-100, 10, -10);
//    print_r ($dziesiatki);

    $polowki = range (-5.5, 5.5, 0.5);
//    print_r($polowki);

    $litery = range("m" , "u");
//    print_r($litery);

    $litery_wstecz = range ("X", "E");
//    print_r ($litery_wstecz);

    $tablica = array ("Tworzenie", "stron", "aplikacji", "internetowcyh");
    list ($n1, $n2, $n3, $n4) = $tablica;
    echo "$n1 $n2 i $n3 $n4.";

    $tablica2 = range(0, 10);
    shuffle ($tablica2);
    foreach ($tablica2 as $tablica21)
    {}
    ?>
    </pre>
<?php
$tablica2 = range(0, 10);
shuffle ($tablica2);
?>
<table style="">
   <tr>
       <?php
       foreach ($tablica2 as $i) {
           //echo '<td style="border: 1px solid dodgerblue;padding 10px center">' . $i . '</td>';
       }
       ?>
   </tr>
</table>
kjhnb kijh jugtvuytvyu
<pre>
    <?php
    $numbers=array(rand(0,99), rand(0,99), rand(0,99), rand(0,99), rand(0,99));
       rsort($numbers);
       print_r ($numbers);

    $Filmy = array ("Skazani na Shawshank" => "dramat", "Nietykalni" => "biograficzny", "Władca Pierscieni: Powrót Króla" => "fantasy", "Pulp Fiction" => "gangsterski", "Siedem" => "kryminal", "Podziemny krag" => "thriller", "Django" => "western", "Krol Lew = animacja", "Avengers: Wojna bez granic")
    (
        [Skazani na Shawshank]
       ?>

</pre>
</body>
</html>