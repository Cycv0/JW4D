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
$months = array(
    'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca',
    'sierpnia', 'września', 'października', 'listopada', 'grudnia'
);

$query = "SELECT imie, nazwisko, data_zatrudnienia FROM pracownicy";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Imię</th><th>Nazwisko</th><th>Data zatrudnienia</th></tr>";
    while($row = $result->fetch_assoc()) {
        $d = strtotime($row['data_zatrudnienia']);
        echo "<tr>";
        echo "<td>" . $row["imie"] . "</td>";
        echo "<td>" . $row["nazwisko"] . "</td>";
        echo "<td>" . date('j', $d) . " " . $months[date('n', $d)-1] . " " . date('Y', $d) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników.";
}

$conn->close();
?>
