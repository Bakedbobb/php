<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // if (isset($_POST['brand']) && isset($_POST['model']) && isset($_POST['condition']) && isset($_POST['insurance'])) {
    //     $brand = $_POST["brand"];
    //     $model = $_POST["model"];
    
    //     echo "<div>Podales dane pojazdu: {$brand} {$model} {$_POST['condition']} {$_POST['insurance']}</div>";
    
    //     if (isset($_POST['forsale'])) {
    //         echo 'jest na sprzedaż';
    //     } else {
    //         echo 'nie na sprzedaż';
    //     }
    // }
    
    if (isset($_POST["action"]) && isset($_POST['n1']) && isset($_POST['n2'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $action = $_POST['action'];
        $result = "nie ma wyniku";

        switch ($action) {
            default:
                break;
            case "add":
                $result = $n1 + $n2;
                break;
            case "subtract":
                $result = $n1 - $n2;
                break;
            case "multiply":
                $result = $n1 * $n2;
                break;
            case "divide":
                $result = $n1 / $n2;
                break;
            case "intensifies":
                $result = $n1 ** $n2;
                break;
        }
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