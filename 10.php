<!doctype html>
<html lang="en">
<head>
    <style>
        fieldset {
            border: 1px solid black;
            padding: 10px;
            background-color: lightgreen;
        }
        legend {
            border: 1px solid black;
            background-color:  lightgreen;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            margin-top: 20px;
        }
        .required:after {
            content: " *";
            color: red;
        }
        .error {
            color: red;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daniel Drozdowski 29.03.2023</title>
</head>
<body>
<form method="post">
    <br>
    <fieldset>
        <legend>Formularz z walidacją</legend>
        <label for="login">Login:<span class="required"></span></label>
        <input  placeholder="Podaj login "type="text" id="login" name="login" >
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["login"])) {
            echo '<div class="error">Proszę podać login.</div>';
        }
        ?>

        <br>
        <label for="email">Email:<span class="required"></span></label>
        <input placeholder="Podaj email "type="text" id="email" name="email" >
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["email"])) {
            echo '<div class="error">Proszę podać email.</div>';
        }
        ?>

        <br>
        <label for="WWW" ">Strona internetowa:<span class="required"></span></label>
        <input placeholder="Podaj stronę internetową "type="text" id="WWW" name="WWW" >
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["WWW"])) {
            echo '<div class="error">Proszę podać stronę internetowa.</div>';
        }
        ?>

        <br>
        <br>
        <label>Wybierz miasto/miasta:<span class="required"></span></label>
        <input type="checkbox" id="miasto" name="miasto"
        <label for="uczen">Warszawa</label>
        <br>
        <input type="checkbox" id="miasto" name="miasto"
        <label for="absolwent">Poznań</label>
        <br>
        <input type="checkbox" id="miasto" name="miasto"
        <label for="nauczyciel">Gdańsk</label>
        <br>
        <input type="checkbox" id="miasto" name="miasto"
        <label for="pracownik">Szczecin</label>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["miasto"])) {
            echo '<div class="error">Proszę wybrać miasto.</div>';
        }
        ?>
        <br>
        <br>
        <label>Wybierz jedną opcje:<span class="required"></span></label>
        <input type="radio" id="pleck" name="plec"
        <label for="pleck">kobieta</label>
        <br>
        <input type="radio" id="plecm" name="plec"
        <label for="plecm">mężczyzna</label>
        <br>
        <input type="radio" id="plecn" name="plec"
        <label for="plecn">nie chcę podawać</label>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["plec"])) {
            echo '<div class="error">Proszę wybrać jedną opcję.</div>';
        }
        ?>
        <br>
        <input type="submit" value="Wyślij">
    </fieldset>
</form>
</body>
</html>