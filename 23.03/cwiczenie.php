<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post"> 
        <input type="text" name="text" id="" placeholder="Wpisz słowo">
        <input type="number" name="number" placeholder="Liczba">
        <input type="submit" value="Buduj schody!"><br>
        <hr>
    </form>
    <?php

        if(isset($_POST['text'], $_POST['number']))
        {
            $text=$_POST['text'];
            $number=$_POST['number'];
            for($x=1; $x <= $number; $x++)
            {
                $zmiennaX=($x * 30);
                echo "<div style='padding-left: {$zmiennaX}px; color: green'>{$text}</div>";
            }
        }
        
    ?>
</body>
</html>