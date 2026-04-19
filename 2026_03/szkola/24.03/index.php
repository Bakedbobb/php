<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    for($i = 0; $i < 40; $i++)
        {
            if($i >=10 && $i <= 15) continue;

            if($i > 20) break; // przerywa pętle i program wykonuje się dalej po pętli

            if($i == 30) exit(0); // przerywa działanie aplikacji

            if($i % 2 == 0)
            {
                echo "{$i} <br>";
            }
        }
// ================================================================
    $i = 0;
    while($i < 40)
        {
            if($i % 2 == 0)
                {
                    echo "{$i} <br>";
                }
            $i++;
        }
// ================================================================
    do
    {
        if($i % 2 == 0)
                {
                    echo "{$i} <br>";
                }
            $i++;
    }
    while($i<40);

    ?>
</body>
</html>