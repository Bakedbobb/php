<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php                   // <? sie nie używa         

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

    // Liczby
    $n1 = 3;
    $n2 = 2;

    // Akcje
    $dodawanie = $n1 + $n2;
    $odejmowanie = $n1 - $n2;
    $mnozenie = $n1 * $n2;
    $dzielenie = $n1 / $n2;
    $potegowanie = $n1 ** $n2;
    
    if ($wynik > 0) {
        echo "<div style='font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: green;'>{$wynik}</div";
    }
    elseif ($wynik == 0) {
        echo "<h1>{$wynik}</h1";
    }
    else {
        echo "<div style='border: 1px solid grey; color: red;'>{$wynik}</div";
    }
    
    
    // if($akcja == $action1) {
    //     $wynik = $n1 + $n2;
    // }
    // elseif($akcja == $action2) {
    //     $wynik = $n1 - $n2;
    // }
    // elseif($akcja == $action3) {
    //     if($n1 == 0 || $n2 == 0) {
    //         echo "<div>Nie mnoz przez 0</div>";
    //     }
    //     else {
    //         $wynik = $n1 * $n2;
    //     }
    // }
    // elseif($akcja == $action4) {
    //     if($n1 == 0 || $n2 == 0) {
    //         echo "<div>Nie dziel przez 0</div>";
    //     }
    //     else {
    //         $wynik = $n1 / $n2;
    //     }
    // }
    // elseif($akcja == $action5) {
    //     $wynik = $n1 ** $n2;
    // }
    ?>
    <form action="back.php" method="post">
        Liczba1: <input type="number" name="liczba1"><br>
        Liczba2: <input type="number" name="liczba2"><br>
     <br>
    <select>
        <option value="dodawanie">dodawanie</option>
        <option value="odejmowanie">odejmowanie</option>
        <option value="mnozenie">mnozenie</option>
        <option value="dzielenie">dzielenie</option>
        <option value="potegowanie">potegowanie</option>
    </select>

    <input type="submit" value="Zapisz">
    </form>
</body>
</html>
