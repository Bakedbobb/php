<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="car.php" method="post">
        Marka: <input type="text" name="brand" id=""><br>
        Model: <input type="text" name="model" id=""><br>
        Stan: <select name="condition" id="">
            <option value="new">Nowy</option>
            <option value="used">Używany</option>
        </select><br>
        Czy posiada ubezpieczenie:
        <input type="radio" name="insurance" value="yes" id="">TAK
        <input type="radio" name="insurance" value="no" id="">NIE
        <br>
        Czy jest na sprzedaż: <input type="checkbox" name="forsale" id="">
        <br>
        <input type="submit" value="Zapisz pojazd">
    </form> -->

    <form action="car.php", method="post">
        N1: <input type="number" name="n1" id=""><br>
        N2: <input type="number" name="n2" id=""><br>
        Akcja: <select name="action" id="">
            <option value="add">Dodaj</option>
            <option value="subtract">Usuń</option>
            <option value="divide">Podziel</option>
            <option value="multiply">Pomnóż</option>
            <option value="intensifies">Potęguj</option>
        </select>
        <br>
        <input type="submit" value="Oblicz">
    </form>
</body>

</html>