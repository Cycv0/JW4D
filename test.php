<form>
    <table>
        <tbody>
        <!-- Generowanie pól typu data z etykietami -->
        <?php for ($i = 1; $i <= 100; $i++) { ?>
            <tr>
                <td><label for="termin-<?php echo $i; ?>">Termin <?php echo $i; ?>:</label></td>
                <td><input type="date" id="termin-<?php echo $i; ?>" name="termin-<?php echo $i; ?>"></td>
            </tr>
        <?php } ?>

        <!-- Dodanie przycisku "Zapisz" w ostatnim wierszu tabeli -->
        <tr>
            <td colspan="2"><button type="submit">Zapisz</button></td>
        </tr>

        </tbody>
    </table>
</form>
