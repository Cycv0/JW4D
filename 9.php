<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    legend {
        background-color: lightgreen;
        border: solid;
    }
    fieldset {
        background-color: lightgreen;
    }
</style>
<?php $l = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["l"])) {
    echo '<div class="error">Proszę podać login.</div>';
}
else {
    $l = $_POST["l"];
}
?>
<fieldset name="www" style="border-color: darkgreen;padding: 10px">
    <legend>Formularz z walidacją </legend>
    <form method="post" action="9.php">
        <label for="Imie">Login:<span style="color: red">*</span></label><br>
        <input type="text" name="l" id="l" value="<?=$l?>"><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["l"])) {
            echo '<div class="error">Proszę podać login.</div>';
        }
        else {
            $l = $_POST["l"];
        }
        ?>
        <label for="Imie">Email:<span style="color: red">*</span></label><br>
        <input type="text" name="e" id="e"><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["e"])) {
            echo '<div class="error">Proszę podać email.</div>';
        }
        ?>
        <label for="Imie">Strona Internetowa:<span style="color: red">*</span></label><br>
        <input type="text" name="w" id="w"><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["w"])) {
            echo '<div class="error">Proszę podać stronę internetowa.</div>';
        }
        ?>


        <label>Wybierz miasto/miasta:<span style="color: red">*</span><br>
            <input type="checkbox" name="m" id="m">
            <label for="U">Warszawa</label><br>
            <input type="checkbox" name="m" id="m">
            <label for="U">Poznań</label><br>
            <input type="checkbox" name="m" id="m">
            <label for="U">Gdańsk</label><br>
            <input type="checkbox" name="m" id="m">
            <label for="U">Szczecin</label><br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["m"])) {
                echo '<div class="error">Proszę wybrać miasto.</div>';
            }
            ?>

        <label>Wybierz jedną opcje:<span style="color: red">*</span><br>
            <input type="radio" name="p" id="p">
            <label for="U">kobieta</label><br>
            <input type="radio" name="p" id="p">
            <label for="A">mężczyzna</label><br>
            <input type="radio" name="p" id="p">
            <label for="N">nie chce podawać</label><br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["p"])) {
                echo '<div class="error"> Proszę wybrać jedną opcję.</div>';
            }
            ?>

            <input type="submit" value="Wyślij">
    </form>



</fieldset>



</body>
