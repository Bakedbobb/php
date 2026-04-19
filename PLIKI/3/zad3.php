<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfigurator Tabeli Mnożenia</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }

        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            width: 50px;
            height: 50px;
        }

        .header-row,
        .header-col {
            background-color: <?php $_POST['kolor'] ?>;
            color: white;
            font-weight: bold;
        }

        .normal-cell {
            color: black;
        }

        input[type="number"] {
            width: 60px;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h1>Konfigurator Tabeli Mnożenia</h1>
        <br>
        <label>Liczba wierszy (1-15):</label><br>
        <input type="number" min="1" max="15" value="10" name="wiersze">
        <br><br>
        <label>Liczba kolumn (1-15):</label><br>
        <input type="number" min="1" max="15" value="10" name="kolumny">
        <br><br>
        <label>Kolor nagłówków:</label><br>
        <input type="color" name="kolor" value="#0000FF">
        <br><br>
        <input type="submit" value="Generuj">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['wiersze']) && isset($_POST['kolumny'])) {
        $wiersze = $_POST['wiersze'];
        $kolumny = $_POST['kolumny'];
        $kolor = $_POST['kolor'];

        echo "<table>";

        echo "<tr>";
        echo "<td class='header-row'>X</td>";
        for ($j = 1; $j <= $kolumny; $j++) {
            echo "<td class='header-row'>$j</td>";
        }
        echo "</tr>";

        for ($i = 1; $i <= $wiersze; $i++) {
            echo "<tr>";
            echo "<td class='header-col'>$i</td>";

            for ($j = 1; $j <= $kolumny; $j++) {
                $wynik = $i * $j;
                echo "<td class='normal-cell'>$wynik</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        echo "<p>Wygenerowano tabliczkę mnożenia: $wiersze wierszy × $kolumny kolumn</p>";
    }
    ?>
</body>

</html>