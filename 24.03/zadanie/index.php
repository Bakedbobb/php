<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="wyniki.php" method="post">
        Podaj swoje imię: <input type="text" name="name" id="" placeholder="imię">

        <p>1. Jak miał na imię Adam Mickiewicz? (tylko jedna odpowiedź jest prawidłowa)</p>
        <input type="radio" name="answer1" id="" value="no">a) Juliusz<br>
        <input type="radio" name="answer1" id="" value="no">b) Andrzej<br>
        <input type="radio" name="answer1" id="" value="yes">c) Adam<br>
        <input type="radio" name="answer1" id="" value="no">d) Konstanty<br>

        <p>2. Jakie samochody są najszybsze? (tylko jedna prawidłowa odpowiedź)</p>
        <input type="radio" name="answer2" id="" value="yes">a) Wyścigowe<br>
        <input type="radio" name="answer2" id="" value="no">b) Niemiecki<br>
        <input type="radio" name="answer2" id="" value="no">c) Czerwone<br>
        <input type="radio" name="answer2" id="" value="no">d) Śłużbowe<br>

        <p>3. Które liczby są większe od 10? (dwie poprawne odpowiedzi)</p>
        <input type="checkbox" name="answer3" id="" value="no">a) 9<br>
        <input type="checkbox" name="answer3" id="" value="no">b) 10<br>
        <input type="checkbox" name="answer3" id="" value="yes">c) 11<br>
        <input type="checkbox" name="answer3" id="" value="yes">d) 121<br><br>

        <input type="submit" value="Sprawdź">
    </form>
</body>
</html>