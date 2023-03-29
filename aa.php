<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<comment><form action="forms.php" method="post">
        <label for="1">Usuń "białe" znaki</label>
        <input type="text" id="1" name="1" value="  Tekst  "> <br> <br>
        <label for="2">Usuń ukośnik {Backslash}</label>
        <input type="text" id="2" name="2" value="\Tekst\"> <br> <br>
        <label for="3">Zmień znaki HTML na encje</label>
        <input type="text" id="3" name="3" value="<p> Tekst </p>"> <br> <br>
        <button>Wyślij</button>
    </form></comment>
<?php
var_dump($_POST['1']);
var_dump($_POST['2']);
var_dump($_POST['3']);
var_dump(trim($_POST['1']));
var_dump(stripcslashes($_POST['2']));
var_dump(htmlspecialchars($_POST['3']));
?>
<hr>
<fieldset>
    <legend>Rocznik</legend>
    <?php
    for($x = 2010; $x <= 2025; $x++){
        echo '<label><input type="radio" name="Rok" id="'.$x.'">'.$x. '</input></label> <br>';
    }
    ?>
</fieldset>
<hr>
<form>
    <select>
        <?php
        $miesiace = array(
            1=>"Styczeń",
            2=>"Luty",
            3=>"Marzec",
            4=>"Kwiecień",
            5=>"Maj",
            6=>"Czerwiec",
            7=>"Lipiec",
            8=>"Sierpień",
            9=>"Wrzesień",
            10=>"Październik",
            11=>"Listopad",
            12=>"Grudzień"
        );
        foreach ($miesiace as $Key=>$rok) {
            if ($Key == date("m")) {
                echo "<option selected value='$rok'>$rok</option>";
            }
            else {
                echo '<option value="' . $rok . '">' . $rok . '</option>';
            }
        }
        ?>
    </select>
</form>
</body>
</html>