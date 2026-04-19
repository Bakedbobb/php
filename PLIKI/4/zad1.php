<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="wyniki.php" method="POST">
        <p>Imię: <input type="text" name="imie" required></p>

        <p>1. Jak miał na imię Adam
            Mickiewicz? (tylko jedna
            odpowiedź jest prawidłowa)</p>
        <input type="radio" name="pyt1" value="a"> a) Juliusz<br>
        <input type="radio" name="pyt1" value="b"> b) Andrzej<br>
        <input type="radio" name="pyt1" value="c"> c) Adam<br>
        <input type="radio" name="pyt1" value="d"> d) Konstanty<br><br>

        <p>2. Jakie samochody są najszybsze?
            (tylko jedna prawidłowa
            odpowiedź)</p>
        <input type="radio" name="pyt2" value="a"> a) wyścigowe<br>
        <input type="radio" name="pyt2" value="b"> b) niemieckie<br>
        <input type="radio" name="pyt2" value="c"> c) czerwone<br>
        <input type="radio" name="pyt2" value="d"> d) służbowe<br><br>

        <p>3. Które liczby są większe od 10?
            (dwie poprawne odpowiedzi)</p>
        <input type="checkbox" name="pyt3[]" value="a"> a) 9<br>
        <input type="checkbox" name="pyt3[]" value="b"> b) 10<br>
        <input type="checkbox" name="pyt3[]" value="c"> c) 11<br>
        <input type="checkbox" name="pyt3[]" value="d"> d) 121<br><br>

        <input type="submit" value="Sprawdź">
</body>

</html>