<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $imie = $_POST['imie'];
    $wynik = 0;

    if (isset($_POST['pyt1']) && $_POST['pyt1'] == 'c') {
        $wynik++;
    }

    if (isset($_POST['pyt2']) && $_POST['pyt2'] == 'c') {
        $wynik++;
    }

    $pyt3 = $_POST['pyt3'];
    if (isset($pyt3[0], $pyt3[1]) and ($pyt3[0] == "c" or $pyt3[0] == "d") and ($pyt3[1] == "c" or $pyt3[1] == "d")) {
        $wynik++;
    }

    echo "<p>$imie - zdobyłeś $wynik punkty</p>";
    ?>

</body>

</html>