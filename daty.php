<!doctype html>
<html lang="en">
<head>
    <style>
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
<h3> Aktualna godzina</h3>
    <?php
    echo date('H:i:s')
    ?>
<h3> Osiem godzin pozniej </h3>
<?php
echo date('H:i:s',strtotime("+8 hours"));
?>

    <h3>Rozpoczecie roku szkolnego odbylo sie</h3>
    <?php
    echo date('l',strtotime("2022-09-01"));
    ?>

        <h3>i byl to</h3>
    <?php
    $data = "2022-09-01";
    $tydz = date("z",strtotime($data))+1;
    echo $tydz;
    ?>
    <h3> Najblizszy Sylwester odbedzie sie w <?php echo date('N',strtotime("2023-12-31")); ?>. dniu tygodnia</h3>
    <?php
    $dni =  array ("Poniedzialek", "Wtorek", "Sroda", "Czwartek", "Piatek", "Sobota", "Niedziela");
    $mies = array ("Styczen", "Luty", "Marzec", "Kwiecien", "Maj", "Czerwiec", "Lipiec", "Sierpien", "Wrzesien", "Pazdziernik", "Listopad", "Grudzien");
?>
    <p>Urodzilem sie
    <?=(date("N"), $d) == 2 ||date("N", $d) == 4) ? "we" : "w" ?>
    <?= $dayNames
</pre>
</body>
</html>
