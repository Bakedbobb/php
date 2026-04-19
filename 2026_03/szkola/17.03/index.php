<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="car.php" method="post">
        Marka: <input type="text" name="brand"><br>
        Model: <input type="text" name="model"><br>
        Stan: <select name="condition">
            <option value="new">nowy</option>
            <option value="used">urzywany</option>
            </select>
            <br><br>
        Czy posiada ubezpiecznenie <br>
            <input type="radio" name="insurance" value="yes">TAK
            <input type="radio" name="insurance" value="no">NIE<br>
        Czy jest na sprzedaz: <input type="checkbox" name="forsale" id="">
        <input type="submit" value="Zapisz pojazd">
    </form>

    <?php
    ?>
</body>
</html>