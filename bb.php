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
<br>
<fieldset>
    <legend>Lorem50</legend>
    <?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
        echo'<h3>Oto Wpisany tekst:</h3>'.'<p style="color: red;font-style: italic;"> '.$_POST["tekst"].'</p>';
    }
    else {
        echo "
    <form method='POST'>
        <textarea cols='50' name='tekst'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto debitis delectus earum esse expedita, illo iste iusto libero minima obcaecati quas quos repellendus sapiente soluta vel voluptas. A ab alias aliquam culpa cum delectus ducimus eligendi esse ipsam iste laborum nemo nesciunt numquam quas quo reiciendis repudiandae, temporibus voluptatibus   </textarea> <br>
        <input type='submit'>
    </form>
";
    }
    ?>

</fieldset>
</body>
</html>
