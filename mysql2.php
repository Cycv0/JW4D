<!--CREATE USER 'username'@'host' IDENTIFIED WITH authentication_plugin BY 'password';
-->
<!doctype html>
<html lang="en">
<style>
    table,tr,td, th{

        border: 2px solid black;
        border-collapse: collapse;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


$servername = "localhost";
$username = "wieckowski2";
$password = "wieckowski2";
$database = "wieckowski2";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)
{
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}
$query = 'SELECT Nazwa FROM stanowiska';

$result = mysqli_query($conn, $query);


if(mysqli_num_rows($result)> 0){
    echo '<table>';
    echo '<tr ><th>Nazwa stanowiska</th><th>Liczba liter</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td >' . $row['Nazwa'] . '</td><td style="text-align: right">'
            . ' ' .mb_strlen($row['Nazwa'])." liter". '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}



mysqli_close($conn);
?>
</body>
</html>