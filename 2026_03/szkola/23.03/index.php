<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"> <!-- "post" zabezpiecza dane przed przechwyceniem -->
        <!-- Dla php id nie istnieja -->
        Imie: <input type="text" name="fname" id=""><br>
        Nazwisko: <input type="text" name="lname" id=""><br>
        Wiek: <input type="text" name="age" id=""><br>
        Szkoła: <input type="text" name="school" id=""><br>
        <input type="submit" value="Zapisz mnie"><br>
    </form>

    <?php
        // zanim użyjemy _POST trzeba sprawdzić czy zmienna istnieje

        if(isset($_POST['fname'], $_POST['lname']))
        {
            $imie=$_POST['fname'];
            $nazwisko=$_POST['lname'];

            echo "Witaj {$imie} {$nazwisko}";
        }

        // sprawdzanie czy formularz byl wysłany (MNIEJ BEZPIECZNE)
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            foreach($_POST as $zawartoscPola)
            {
                echo "<div>{$zawartoscPola}</div>"; // wypisywanie kazdego pola formularza
            }
        }

    ?>
</body>
</html>