<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Pobieranie danych z Formularza 1
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text']) && isset($_POST['number1'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $text = htmlspecialchars($_POST['text']);
    $number1 = (int)$_POST['number1']; // Konwersja na liczbę całkowitą
    $komunikat1 = "<div>$text</div><br>";
}

// Pobieranie danych z Formularza 2
if (isset($_POST['name2']) && isset($_POST['email2']) && isset($_POST['text2']) && isset($_POST['number2'])) {
    $name2 = htmlspecialchars($_POST['name2']);
    $email2 = htmlspecialchars($_POST['email2']);
    $text2 = htmlspecialchars($_POST['text2']);
    $number2 = (int)$_POST['number2']; // Konwersja na liczbę całkowitą
    $komunikat2 = "<div>$text2</div><br>";
}
?>
<div id="container">

    <div id="form1">
        <form action="" method="post">
            Podaj imię: <input type="text" name="name" placeholder="np. Jan"> <br>
            Podaj email: <input type="email" name="email" placeholder="np. a@o2.pl"> <br>
            Ile razy wysłać wiadomość: <input type="number" name="number1" min="0" max="10"> <br>
            <textarea name="text" rows="5" cols="50" placeholder="Wpisz wiadomość tutaj..."></textarea> <br>
            <input type="submit" name="submit" value="Zapisz">
        </form>
        <br>
        <h1>Odebrana Wiadomość:</h1>
        <br>
        <?php
        // Wyświetlanie dla Formularza 2 (używamy zmiennych z 2!)
        if (isset($_POST['name2']) && isset($_POST['email2']) && isset($_POST['text2']) && isset($_POST['number2'])) {
            for ($i = 1; $i <= $number2; $i++) {
                echo "{$name2} ({$email2})";
                echo $komunikat2;
            }
        }
        ?>
    </div>
    <br>
    <br>

    <div id="form2">
        <form action="" method="post">
            Podaj imię: <input type="text" name="name2" placeholder="np. Zosia"> <br>
            Podaj email: <input type="email" name="email2" placeholder="np. b@o2.pl"> <br>
            Ile razy wysłać wiadomość: <input type="number" name="number2" min="0" max="10"> <br>
            <textarea name="text2" rows="5" cols="50" placeholder="Wpisz wiadomość tutaj..."></textarea> <br>
            <input type="submit" name="submit2" value="Zapisz">
        </form>
        <br>
        <h1>Odebrana Wiadomość:</h1>
        <br>
        <?php
        // Wyświetlanie dla Formularza 1 (używamy zmiennych z 1!)
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text']) && isset($_POST['number1'])) {
            for ($i = 1; $i <= $number1; $i++) {
                echo "{$name} ({$email})";
                echo $komunikat1;
            }
        }
        ?>
    </div>
</div>
</body>
</html>