<!doctype html>
<html lang="en">
<head>
    <style>
        table, th, td
        {
            border-style:solid;
            border-width:2px;
            border-collapse: collapse;
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table style="width:100% border-style:solid border-width:2px background-color:#FFFFE0;
">
    <tr>
        <th>pon</th>
        <td style="background-color:cyan;">wto</td>
        <th>sro</th>
        <td style="background-color:cyan;">czw</td>
        <th>pia</th>
        <td style="background-color:cyan;">sob</td>
        <th>nie</th>
    </tr>
</table>

<pre>
    <?php
    $dni = array("pon", "wto", "sro", "czw", "pia", "sob", "nie");
    foreach ($dni as &$v) {
    }
    ?>
<?php
    foreach ($dni as $dni){
    echo "<td>". $dni. "</td>";
}
    ?>
</pre>
</body>
</html>