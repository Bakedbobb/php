<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['name']) && isset($_POST['answer1']) && isset($_POST['answer2']) && isset($_POST['answer3']))

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $wynik = 0;
        foreach($_POST as $odpowiedz => $zawartoscPola)
        {
            $wynik + $zawartoscPola;
        }
        echo "{$_POST['name']} – zdobyles {$wynik} punkty";
    }
?>
</body>
</html>