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
$odcinki=rand(1,20)
?>
<h1 style="text-align: center; color: darkgreen; border-style: solid; border-width: 4px;"> <?php echo $odcinki ?></h1>
<?php
switch ($odcinki) {
    case 2:
        echo "<h3 style= 'text-align: center; '> pierwszy sezon </h3>";
        break;
    case 3:
        echo "<h3 style= 'text-align: center; '> pierwszy sezon </h3>";
        break;
    case 4:
        echo "<h3 style= 'text-align: center; '> pierwszy sezon </h3>";
        break;
    case 5:
        echo "<h3 style= 'text-align: center; '> pierwszy sezon </h3>";
        break;
    case 6:
        echo "<h3 style= 'text-align: center; '> pierwszy sezon </h3>";
        break;
    case 7:
        echo "<h3 style= 'text-align: center; '> drugi sezon </h3>";
        break;
    case 8:
        echo "<h3 style= 'text-align: center; '> drugi sezon </h3>";
        break;
    case 9:
        echo "<h3 style= 'text-align: center; '> drugi sezon </h3>";
        break;
    case 10:
        echo "<h3 style= 'text-align: center; '> drugi sezon </h3>";
        break;
    case 11:
        echo "<h3 style= 'text-align: center; '> drugi sezon </h3>";
        break;
    case 12:
        echo "<h3 style= 'text-align: center; '> trzeci sezon </h3>";
        break;
    case 13:
        echo "<h3 style= 'text-align: center; '> trzeci sezon </h3>";
        break;
    case 14:
        echo "<h3 style= 'text-align: center; '> trzeci sezon </h3>";
        break;
    case 15:
        echo "<h3 style= 'text-align: center; '> trzeci sezon </h3>";
        break;
    case 16:
        echo "<h3 style= 'text-align: center; '> trzeci sezon </h3>";
        break;
    case 17:
        echo "<h3 style= 'text-align: center; '> czwarty sezon </h3>";
        break;
    case 18:
        echo "<h3 style= 'text-align: center; '> czwarty sezon </h3>";
        break;
    case 19:
        echo "<h3 style= 'text-align: center; '> czwarty sezon </h3>";
        break;
    case 20:
        echo "<h3 style= 'text-align: center; '> czwarty sezon </h3>";
        break;
    default:
        echo "<h3 style= 'text-align: center; '> Pilot </h3>";
}

?>
