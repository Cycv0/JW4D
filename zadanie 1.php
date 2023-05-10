<!doctype html>
<html lang="en">
<head>
    <style>
        fieldset {
            border: 1px solid black;
            padding: 10px;
            background-color: deepskyblue;
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
        <label for="login">Nazwa Towaru:<span class="required"></span></label>
        <input  placeholder=""type="text" id="login" name="login" >
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["login"])) {
            echo '<div class="error">Podaj nazwe produktu.</div>';
        }
        ?>

        <br>
        <label>Wybierz opcje pakowania:<span class="required"></span></label>
        <input type="checkbox" id="opcje" name="opcje"
        <label for="uczen">koperta</label>
        <br>
        <input type="checkbox" id="opcje" name="opcje"
        <label for="absolwent">folia</label>
        <br>
        <input type="checkbox" id="opcje" name="opcje"
        <label for="nauczyciel">folia bąbelkowa</label>
        <br>
        <input type="checkbox" id="opcje" name="opcje"
        <label for="pracownik">karton</label>
        <br>
        <input type="checkbox" id="opcje" name="opcje"
        <label for="pracownik">karton z usztywnieniem</label>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["opcje"])) {
            echo '<div class="error">Wybierz opcje pakowania.</div>';
        }
        ?>
        <br>
        <br>
        <label>Podaj wagę paczki:<span class="required"></span></label>
        <input type="radio" id="2" name="plec"
        <label for="pleck">od 2kg</label>
        <br>
        <input type="radio" id="plecm" name="plec"
        <label for="plecm">od 2 do 5kg</label>
        <br>
        <input type="radio" id="plecn" name="plec"
        <label for="plecn">od 5 do 10kg</label>
        <br>
        <input type="radio" id="plecn" name="plec"
        <label for="plecn">od 10 do 1kg</label>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["plec"])) {
            echo '<div class="error">Określ przyblizoną wagę paczki.</div>';
        }
        ?>

        <br>
        <label for="email">Email:<span class="required"></span></label>
        <input placeholder=""type="text" id="email" name="email" >
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["email"])) {
            echo '<div class="error">Proszę podać email.</div>';
        }
        ?>

        <br>
        <label for="WWW" ">Dodatkowe informacje:<span class="required"></span></label>
        <input placeholder=""type="text" id="WWW" name="WWW" >
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["WWW"])) {
            echo '<div class="error">Wiadomość musi mieć conajmniej 15 znaków.</div>';
        }
        ?>

        <br>
        <input type="checkbox" id="o2" name="o2"
        <label for="pracownik">zgoda na przetwarzanie danych</label>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["o2"])) {
            echo '<div class="error">Potwierdź swoją zgodę.</div>';
        }
        ?>

        <br>
        <input type="submit" value="Wyślij">
    </fieldset>
</form>
</body>
</html>