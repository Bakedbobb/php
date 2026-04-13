<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $wyniki = [];

        if(isset($_POST['ilosc_liczb']) || isset($_POST['min']) || isset($_POST['max']))
        {
            $ilosc_liczb = $_POST['ilosc_liczb'];
            $min = $_POST['min'];
            $max = $_POST['max'];

            for ($i = 0; $i < $ilosc_liczb; $i++)
            {
                $wyniki[] = rand($min, $max);
            }
        }
        
        $wyniki = sort($wyniki);
        print_r($wyniki);
    ?>

</body>
</html>