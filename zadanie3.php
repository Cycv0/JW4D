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

<fieldset style="border-style: dashed; border-width: 10px; border-color: yellow;">
    <legend>Setki</legend>
    <form action="zadanie3.php" method="post">
        <?php
        foreach (range(1000,9900,100)as $wartosc){
            $checked=(!empty($_POST['liczba']) && in_array($wartosc, $_POST['liczba'])) ? 'checked':'';
            echo "<label for='$wartosc'><input type='checkbox' name='liczba[]' id='a1'.$wartosc value='$wartosc' $checked >$wartosc</label>";

        }
        ?>
        <br />
        <input type="submit" value="Wybierz">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST ['liczba'])) {
            echo 'Zadna liczba nie została wybrana.';
        }
        else {
            echo 'Te liczby zostały wybrane: ';
            foreach ($_POST['liczba'] as $wartosc) {
                echo $wartosc . ', ';
            }
        }
    }
    ?>
</fieldset>

</body>
