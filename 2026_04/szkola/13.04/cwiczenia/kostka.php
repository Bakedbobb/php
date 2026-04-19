<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $wyniki = [0,0,0,0,0,0];

        if(isset($_POST['liczba_rzutow']))
        {
            $liczba_rzutow = $_POST['liczba_rzutow'];

            for ($i = 0; $i < $liczba_rzutow; $i++)
            {
                $wyniki[rand(1,6)-1] += 1;
            }
        }
        
        for ($i = 1; $i <= 6; $i++)
        {
            echo "{$i} - {$wyniki[$i-1]} razy<br>";
        }
    ?>
</body>
</html>