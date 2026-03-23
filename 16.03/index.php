<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php                   // <? sie nie używa         http://localhost/MateuszBednarczyk/16.03/

    # php jest server side
    # php to jezyk skryptowy - nie kompiluje sie
    # php wysyla kod z serwera do urzytkownika


    # ; należy dawać na koniec każdej linii

    echo "Hello world!";
    
    $myName = "Janek"; // $ oznacza że jest to zmienna
    $numberA = "20";
    $numberB = 50;

    $result = $numberA + $numberB; // + tylko dodawanie arytmetyczne
    $result_text = $numberA . $numberB; // . to łączenie znaków

    echo "<div>Wynik dodawania to $result</div>"; // 1
    echo "<div style='color: red'>Wynik dodawania to {$result}</div>"; // 2 PREFEROWANY ++
    echo "<div>Wynik dodawania to " . $result . "</div>"; // 3

    ?>
</body>
</html>