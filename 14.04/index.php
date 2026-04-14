<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = []; // 10 wierszy x 5 kolumn
        $suma_calosci = 0;
        $srednia_wierszy = 0;
        


        for($i = 0; $i < 10; $i++)
        {
            $array[] = []; // tablica w tablicy
            for($k = 0; $k < 5; $k++)
            {
                $array[$i][] = rand(1,100); // [] to pusty wymiar
            }
        }
        
        echo "<table class='liczby'>";

        for($i = 0; $i < 10; $i++)
        {
            echo "<tr>";
            for($k = 0; $k < 5; $k++)
            {
                echo "<td>{$array[$i][$k]}</td>";
                $suma_calosci += $array[$i][$k];
                if ($k == 4)
                {
                    echo "<br>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        for($i = 0; $i < 10; $i++)
        {
            $suma_wiersza = 0;
            $srednia_wiersza = 0;
            $min = 100;
            $max =  0;
            for($k = 0; $k < 5; $k++)
            {
                $suma_wiersza += $array[$i][$k];
                $srednia_wiersza = $suma_wiersza / 5;

                if($array[$i][$k] < $min)
                    {
                        $min = $array[$i][$k];
                    }

        
                if($array[$i][$k] > $max)
                {
                    $max = $array[$i][$k];
                }
                        
                
            }
            echo "Srednia wiersza {$i}: {$srednia_wiersza}<br>";
            echo "Suma wiersza {$i}: {$suma_wiersza}<br>";
            echo "Min wiersza {$i}: {$min}<br>";
            echo "Max wiersza {$i}: {$max}<br><br>";
            
        }

        for($k = 0; $k < 5; $k++)
        {
            $suma_kolumny = 0;
            for($i = 0; $i < 10; $i++)
            {
                $suma_kolumny += $array[$i][$k];
            }
            echo "Suma kolumny {$k}: {$suma_kolumny}<br>";
        }

        echo "<br>";
        $srednia_calosci = $suma_calosci / count($array);
        echo "Suma tablicy: {$suma_calosci}<br>"; 
        echo "Srednia tablicy: {$srednia_calosci}<br>";
    ?>
    
</body>
</html>