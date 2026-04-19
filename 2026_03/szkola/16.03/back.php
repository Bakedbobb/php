<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_POST['liczba1']) && isset($_POST['liczba2']))
{
    $liczba1=$_POST['liczba1'];
    $liczba2=$_POST['liczba1'];

    echo"<div> Podałeś dane pojazdu: {$liczba1} {$liczba2}</div>";

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