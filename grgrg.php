<!doctype html>
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
    <form method="post" action="grgrg.php">
        <label for="Imie">Imię:<span style="color: red">* Imię jest wymagane</span></label><br>
        <input type="text" name="Imie" id="Imie"><br>
        <label for="Imie">Nazwisko:<span style="color: red">* Nazwisko jest wymagane</span></label><br>
        <input type="text" name="Nazwisko" id="Nazwisko"><br>

        <label>Wybierz jedną opcję:<span style="color: red">* Wybierz jedną opcje</span><br>
            <input type="radio" name="p" id="p">
            <label for="U">uczeń</label><br>
            <input type="radio" name="p" id="p">
            <label for="A">absolwent</label><br>
            <input type="radio" name="p" id="p">
            <label for="N">nauczyciel</label><br>
            <input type="radio" name="p" id="p">
            <label for="P">pracownik administracji</label><br>

            <input type="submit" value="Wyślij">
    </form>



</fieldset>



</body>
