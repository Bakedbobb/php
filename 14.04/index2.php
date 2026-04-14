<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // tablica asocjacyjna
        $student = ["imie" => "Piotr", "nazwisko" => "Kowalski", "klasa" => "2et"];

        // echo "<p> {$student['nazwisko']} </p>";

        $cart = [];
        $cart[] = ["nazwa" => "Napój energetyk", "ilosc" => 2, "cena" => 5];
        $cart[] = ["nazwa" => "Batonik", "ilosc" => 1, "cena" => 3];
        $cart[] = ["nazwa" => "Woda mineralna", "ilosc" => 4, "cena" => 2];

        for($i = 0; $i < count($cart); $i++)
        {
            $cena = $cart[$i]['cena'] * $cart[$i]['ilosc'];
            echo "<div> {$cart[$i]['nazwa']} w ilości {$cart[$i]['ilosc']} kosztuje $cena zł ({$cart[$i]['cena']} zł/szt)</div>";
        }

        foreach ($cart as $one_product)
        {
            foreach($one_product as $property)
            {
                echo "{$property ";
            }
            echo "<br>"
        }
    ?>  
</body>
</html>