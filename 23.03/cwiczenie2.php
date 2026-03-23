<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <div style="border: 1px solid blue; height: 100px; width: 300px; background-color: grey;"></div> -->
    <form action="" method="post"> 
        Ile wizytówek wygenerować? <input type="number" name="numer" style="width: 50px">
        <input type="submit" value="Generuj"><br>
    </form>
    <?php
            if(isset($_POST['numer']))
            {
                $numer=$_POST['numer'];
                for($x=1; $x <= $numer; $x++)
                {
                    echo "<div style='border: 5px solid blue; height: 100px; width: 300px; background-color: grey;'>Gość nr {$x}</div>";
                }
            }
    ?>
</body>
</html>