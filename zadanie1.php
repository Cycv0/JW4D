<!doctype html>
<html lang="en">
<head>
    <style>
        table, th, td
        {
            border-style:solid;
            border-width:1px;
            color: lightgray;
            padding: 5px;
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form>
    <table>
        <body>
        <?php
        for ($termin = 1; $termin <= 100; $termin++):
            ?>
            <tr>
                <td>
                    <label for="termin-
                <?php
                    echo $termin; ?>">Termin <?php echo $termin;
                    ?>:
                    </label>
                </td>
                <td>
                    <input type="date" id="termin-
                    <?php
                    echo $termin;
                    ?>"
                           name="termin-
                           <?php echo $termin; ?>">
                </td>
            </tr>
        <?php
        endfor
        ?>
        <tr>
            <td colspan="2"><button type="submit">Zapisz</button></td>
        </tr>
        </body>
    </table>
</form>

