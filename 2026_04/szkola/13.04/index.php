<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- W php nie musimy ustalać rozmiaru tablicy
     Tablice mogą mieć różne typy w sobie -->
     <?php
        $array = []; // deklaracja tablicy
        $array2 = ["test", "test2", 10, 12.5, true];
        
        // echo jest tylko do typow prostych (wyświetlanie produkcyjne)
        // print_r($array2); // print_r używany do debugowania
        // echo "<br>";
        // var_dump($array2); // alternatywa 

        unset($array2[1]); 
        // po usunięciu elementu tworzy się luka w pamięci i numeracji
        // for zgłosi z tego powodu błąd a foreach nie, bo pomija i iteruje dalej

        // usuwając coś z tablicy musimy naprawić numeracje
        $array2 = array_values($array2);

        for($i = 0; $i < count($array2); $i++) // długość tablicy poprzez count (nie jak len z pythona)
        {
            if(isset($array2[$i])) 
            {
                echo "<div> {$array2[$i]} </div>";
            }
            else
            {
                echo "<div>BRAK ELEMENTU {$i}</div>";
            }
        }

        // echo = print
        echo "<br>";
        print "<br>";

        foreach($array2 as $one) // dla każdego elementu tablicy pobierz go jako (przypisanie wartości tablicy do $one)
        {
            echo "<div> {$one} </div>";
        }
    ?> 
</body>
</html>