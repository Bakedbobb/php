<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $color = "red";
    echo "
    <div style='color: {$color};'>
        <p>testowy tekst</p>
    </div>";

    $n1 = 6;
    $n2 = 7;
    $result = "nie wybrano akcji";
    $action = "poteguj"; // dodaj odejmij pomnoz podziel poteguj
    
    switch ($action) {
        default:
            break;
        case "dodaj":
            $result = $n1 + $n2;
            break;
        case "odejmij":
            $result = $n1 - $n2;
            break;
        case "pomnoz":
            $result = $n1 * $n2;
            break;
        case "podziel":
            $result = $n1 / $n2;
            break;
        case "poteguj":
            $result = $n1 ** $n2;
            break;
    }

    if ($result > 0) {
        echo "<div style='color: green; font-style: bold; font-familly: Arial;'>{$result}</div>";
    } elseif ($result < 0) {
        echo "<div style='color: red; border: 2px solid grey;'>{$result}</div>";
    } else {
        echo "<h1>{$result}</h1>";
    }

    ?>
</body>

</html>