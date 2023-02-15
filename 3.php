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
<form action="forms.php" method="post">
    <label for="1" białe znaki </label>
    <input type="text" id="1" name="1" value="  text  ">
    <label for="2" ukosnik </label>
    <input type="text" id="2" name="2" value="\text\">
    <label for="3" znaki </label>
    <input type="text" id="3" name="3" value="<h3> text </h3>">
    <button> send </button>
    </form>
<?php
var_dump($_POST["1"]);
var_dump($_POST["2"]);
var_dump($_POST["3"]);
?>
</html>
