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

<form action="5.php" method="post">
    <textarea name="5">
Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eros purus, venenatis et elit vel, scelerisque maximus leo. Phasellus sollicitudin vehicula massa, ut congue lorem tincidunt quis. Donec molestie orci et eros consectetur auctor. Duis mattis quam quis lectus imperdiet tristique. Nam blandit interdum dolor ut fermentum. Proin mattis feugiat.
</textarea> <br>
<input type="submit">

</form>
<?php
if($_server[`REQUEST METOD`]==="POST"
{
    echo $_POST['5']
}

else
     ?>
<form method="POST">
    </form>
<?php
}