<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Imie <input type="text" name="fname"><br>
        Nazwisko <input type="text" name="lname"><br>
        Wiek <input type="text" name="age"><br>
        Klasa <input type="text" name="class"><br>
        Szkola <input type="text" name="school"><br>
        <input type="submit" value="Zapisz mnie">
    </form>

    <?php   

    if (isset($_POST['fname'], $_POST['lname'], $_POST['age'], $_POST['class'], $_POST['school'])) {
        echo "Witaj {$_POST['fname']}";
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        foreach ($_POST as $key => $value) {
            echo "<div>{$value}</div>";
        }
    }
    ?>

</body>

</html>