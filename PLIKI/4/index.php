<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <input type="number" name="width" value="25" id="">
        <input type="number" name="height" value="25" id="">
        <input type="number" name="wiersze" value="5" id="">
        <input type="number" name="kolumny" value="5" id="">
        <input type="submit" value="generuj">
    </form>

    <?php
    // for ($i = 0; $i < 40; $i++) {
    //     if ($i >= 10 && $i <= 15) {
    //         continue;
    //     }

    //     if ($i >= 20) {
    //         break;
    //     }

    //     if ($i >= 30) {
    //         exit(0);
    //     }
    //     if ($i % 2 == 0) {
    //         echo "{$i} <br>";
    //     }
    // }

    // $i = 0;
    // while ($i < 40) {
    //     $i++;
    //     if ($i % 2 == 0) {
    //         echo "{$i} <br>";
    //     }
    // }

    // do {
    //     $i++;
    //     if ($i % 2 == 0) {
    //         echo "{$i} <br>";
    //     }
    // } while ($i <= 40); 

    // for ($i = 0; $i < $_POST['wiersze']; $i++) {
    //     echo "<div style='background-color: blue    ; width: {$_POST['width']}px; height: {$_POST['height']}px;'></div>";
    //     for ($i = 0; $i < $_POST['kolumny']; $i++) {
    //         if ($i % 2 == 0) {
    //             echo "<div style='background-color: blue    ; width: {$_POST['width']}px; height: {$_POST['height']}px;'></div>";
    //         } else {
    //             echo "<div style='background-color: blue    ; width: {$_POST['width']}px; height: {$_POST['height']}px;'></div>";
    //         }
    //     }
    // }
    ?>

    <?php
    echo "<table>";
    for ($i = 0; $i < $_POST['wiersze']; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $_POST['kolumny']; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "<td style='background-color: blue    ; width: {$_POST['width']}px; height: {$_POST['height']}px;'></td>";
            } else {
                echo "<td style='background-color: red    ; width: {$_POST['width']}px; height: {$_POST['height']}px;'></td>";
            }
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>

</html>