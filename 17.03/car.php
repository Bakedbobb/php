<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_POST['brand']) && isset($_POST['model'])&& isset($_POST['condition'])&& isset($_POST['insurance']))
    {
        $brand=$_POST['brand'];
        $model=$_POST['model'];
        $condition=$_POST['condition'];
        $insurance=$_POST['insurance'];

        echo"<div> Podałeś dane pojazdu: {$brand} {$model} {$condition} {$insurance}</div>";

        # checkboxa sprawdzamy inaczej (wysyla sie tylko przy zaznaczeniu)
        # sprawdzamy go wewnatrz glownego ifa
        if(isset($_POST['forsale'])) 
        {
            echo "Jest na sprzedaz!";
        }
        else 
        {
            echo "Nie jest na sprzedaz!";
        }
    }

    ?>

</body>
</html>