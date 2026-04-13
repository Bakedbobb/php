<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Szerokość obrazka: <input type="number" name="width" id="" style="width: 30px"> px <br>
        Wysokość obrazka: <input type="number" name="height" id="" style="width: 30px"> px <br> 
        Ilość wierszy: <input type="number" name="rows" id="" style="width: 30px"> <br> 
        Ilość kolumn: <input type="number" name="columns" id="" style="width: 30px"> <br> 
        <input type="submit" value="Generuj">
    </form>

    <?php
        if(isset($_POST['width'], $_POST['height'], $_POST['rows'], $_POST['columns']))
        for($i=0;$i<$_POST['rows'];$i++)
        {
        echo "<section style='display:flex; flex-wrap: wrap;'>";
        for($k=0;$k<$_POST['columns'];$k++)
        {
                if(($i + $k) % 2 == 0)
                {
                    echo "<div style='width:{$_POST['width']}px; height:{$_POST['height']}px; border:1px solid red; background-color:white; margin:1px;'></div>";
                }
                else
                {
                    echo "<div style='width:{$_POST['width']}px; height:{$_POST['height']}px; border:1px solid red; background-color:black; margin:1px;'></div>";
                }
        }
        echo "</section>";
        }
    ?>
</body>
</html>