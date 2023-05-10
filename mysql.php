<!--CREATE USER 'username'@'host' IDENTIFIED WITH authentication_plugin BY 'password';
-->
<!doctype html>
<html lang="en">
<style>
    table,tr,td{

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
$query = 'SELECT Tytul, Imie, Nazwisko FROM ksiazki';

$result = mysqli_query($conn, $query);

echo "<H1>Ksiązki i autorzy</H1>" ;

if(mysqli_num_rows($result)> 0){

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<a>Książka </a>'.'<i>'. $row['Tytul'].'</i> <a> została napisana przez </a><b>'.$row['Imie'].' ' .$row['Nazwisko'].'.'.'</b><br>';


    }
    echo '</table>';
} else {
    echo 'brak danych';
}



mysqli_close($conn);
?>
</body>
</html>




