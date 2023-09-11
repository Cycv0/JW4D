<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nazwa = $_POST['Nazwa'];
    $query = sprintf("INSERT INTO 'dzialy' (Nazwa) VALUES ('%s');",
        mysqli_real_escape_string($mysqlProceduralConnection, $nazwa));


    if (mysqli_query($mysqlProceduralConnection, $query)) {
        echo '<h4 class="success">Nowe Dane zostały dodane</h4>';

    } else {
        echo '<h4 class="failure"> Bląd w czasie dodawania:</h4><br>' . mysqli_error($mysqlProceduralConnection);
    }
}
else {
    ?>
    <form action="?page=dzialy_dodaj" method="post">
        <table>
            <tr>
                <td><label for="Id_dzial">Id_dzial</label></td>
                <td><input disabled id="Id_dzial" name="Id_dzial" type="text"></td>
            </tr>
            <tr>
                <td><label for="Nazwa">Nazwa</label></td>
                <td><input id="Nazwa" maxlength="40" name="Nazwa" type="text"></td>
            </tr>
            <tr>
                <td colspan="2" style="align-items:center;"><input type="submit" value="Wyślij"></td>
            </tr>
        </table>
    </form>
<?php } ?>
