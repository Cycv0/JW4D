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

<fieldset name="www" style="border-color: green;padding: 2px">
    <legend>Ankieta </legend>
    <?php

    if($_SERVER['REQUEST_METHOD'] =='POST') {

        ?>

        <p style='color: red'><i><?=$_POST ['']?></p>
    <?php        }
    else {
        ?>
        <form method="post" action="8.php">
            <label for="Imie">Imię:<span style="color: red">*</span></label><br>
            <input type="text" name="Imie" id="Imie"><br>
            <label for="Imie">Nazwisko:<span style="color: red">*</span></label><br>
            <input type="text" name="Nazwisko" id="Nazwisko"><br>

            <label>Wybierz jedną opcję:<span style="color: red">*</span><br>
                <input type="radio" name="U" id="U">
                <label for="U">uczeń</label><br>
                <input type="radio" name="A" id="A">
                <label for="A">absolwent</label><br>
                <input type="radio" name="P" id="P">
                <label for="N">nauczyciel</label><br>
                <input type="radio" name="P" id="P">
                <label for="P">pracownik administracji</label><br>

                <input type="submit" value="Wyślij">
        </form>

        <?php
    }
    ?>


</fieldset>



</body>
</html>