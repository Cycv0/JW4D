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
<style>
    fieldset{
        border-width:2px;

</style>

<fieldset>
    <legend>Rocznik</legend>
<?php

echo "<form>";
for ($year = 2010; $year <= 2025; $year++) {
    echo "<input type='radio' name='year' checked value='$year'>$year<br>";
}
echo "</form>";
?>

</fieldset>