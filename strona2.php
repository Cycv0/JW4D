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

<?php
$losowa=rand(1,30)
?>
<h2 style="text-align: center; color: darkorchid;"> <?php echo $losowa ?></h2>
<h4 style="text-align:center;">
    <?php if($losowa>=20)
        echo "wylosowana liczba jest równa lub większa od 20";
    ?>
</h4>
<h2 style="text-align: center; color: navy;">
<?php
if($losowa%2==0)

{

}
if ($losowa <=10){
    echo "<h4 style= 'color: deeppink'>pierwsza dziesiatka </h4>";
    }elseif ($losowa <=20){
    echo "<h4 style= 'color: deeppink'>druga dziesiatka </h4>";
    }else{
    echo "<h4 style= 'color: deeppink'>trzecia dziesiatka </h4>";
    }

