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
<fieldset style="border: 3px solid green; padding: 10px;">
    <legend>Liczby</legend>
    <form action="6.php" method="post">
    <?php
    foreach (range (0, 100, 10) as $v)
    {
    if (!empty($_POST['liczby']) &&in_array($sumber, $_POST ['liczby'])) {
    $checked = 'checked';
    }
    else
    {
        $checked = '';
    }
    echo "<label for='$v'><input type='checkbox' name='check[]' id='c'.$v value='$v' $checked></label> $v";
    }
    ?>

    <input type="submit" value="Wyślij">
</form>
    <?php
//    if($_SERVER ['REQUEST_METHOD']==='POST') {
//        echo '<P>';
//        if (!empty($_POST['check'])) {
//            echo "te liczby zostały wybrane".implode(','.$_POST['check']);
//            echo ""<input id="c." .$v . '"name="check[]" type = "checkbox" value="'.$v. '"' . $v .'>"
//            echo "<label for"c_>' . $v . '" style=marging-right: 20px;"> ' . $v . '</label>'
//            foreach($_POST['check']as $v)
//            {
//            echo $v;
//        }
//            else {
//            echo 'zadna liczba nie zostala wybrana';
//        }
//        echo '</p>';
//    }
?>
</fieldset>
</body>
</html>
