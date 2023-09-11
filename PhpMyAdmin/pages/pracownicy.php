<h1>Tabela pracownicy</h1>
<?php
$servername="localhost";
$username="JW2";
$password="JW2";
$database="jw2";
$mysqliProceduralConection = mysqli_connect($servername, $username, $password, $database);
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}

$query = 'SELECT * FROM pracownicy  JOIN stanowiska ON stanowiska.Id_stanowisko = pracownicy.Id_stanowisko 
WHERE 1 
ORDER BY pracownicy.Id_pracownika';

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>ID pracownika</th><th>Nazwisko</th><th>Imie</th><th>Stanowisko</th><th> Miasto </th><th>Data zatrudnienia</th><th>Wynagrodzenie</th>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_pracownika'] . '</td><td>'
            . $row['Nazwisko'] . ' </td><td>' . $row['Imie'] . '</td><td> '. $row['Nazwa'] .'</td><td>'. $row['Miasto'] .'</td><td>'. $row['Data_zatrudnienia'] .'</td><td>'. $row['Wynagrodzenie'] .'</td>
';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
?>