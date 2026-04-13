<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mediana2.php" type="post">
        Podaj ilość liczb: <input type="number" min=1 max=100 name="ilosc_liczb">
        <br>
        Podaj zakres liczb: 
        <br>
        ----min:<input type="number" min=-100 max=100 name="min"> 
        <br>
        ----max:<input type="number" min=-100 max=100 name="max">
        <br>
        <input type="submit">
    </form>
</body>
</html>