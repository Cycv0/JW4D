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

<fieldset>
    <legend>Liczby</legend>
    <form action="7.php" method="post">
        <?php
        foreach (range(0,100,10)as $wartosc){
            $checked=(!empty($_POST['liczba']) && in_array($wartosc, $_POST['liczba'])) ? 'checked':'';
            echo "<label for='$wartosc'><input type='checkbox' name='liczba[]' id='a1'.$wartosc value='$wartosc' $checked >.$wartosc.</label>";

        }
        ?>
        <br />
        <input type="submit" value="Wyślij">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST ['liczba'])) {
            echo 'Nie wybrano żadnych liczb.';
        }
        else {
            echo 'Wybrano liczby: ';
            foreach ($_POST['liczba'] as $wartosc) {
                echo $wartosc . ', ';
            }
        }
    }
    ?>
</fieldset>

</body>
</