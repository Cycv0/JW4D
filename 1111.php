<table>
    <tr>
        <th>Nazwa stanowiska</th>
        <th>Liczba liter</th>
    </tr>

    <?php
    // Połączenie z bazą danych MySQL
    $conn = mysqli_connect("localhost", "wieckowski2", "wieckowski2", "wieckowski2");

    // Sprawdzenie czy udało się połączyć z bazą danych
    if (mysqli_connect_errno()) {
        echo "Błąd połączenia z bazą danych MySQL: " . mysqli_connect_error();
    } else {
        // Zapytanie SQL do pobrania danych z bazy danych
        $query = "SELECT nazwa_stanowiska FROM tabela_stanowiska";
        $result = mysqli_query($conn, $query);

        // Przetwarzanie wyników zapytania
        while ($row = mysqli_fetch_assoc($result)) {
            $nazwa_stanowiska = $row['nazwa_stanowiska'];
            $liczba_liter = strlen($nazwa_stanowiska);

            // Wyświetlanie danych w tabeli
            echo "<tr>";
            echo "<td>$nazwa_stanowiska</td>";
            echo "<td>$liczba_liter liter</td>";
            echo "</tr>";
        }

        // Zwolnienie zasobów związanych z wynikami zapytania
        mysqli_free_result($result);

        // Zamknięcie połączenia z bazą danych
        mysqli_close($conn);
    }
    ?>
</table>
