    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="" method="post">

            <input type="text" name="text" value="klasa 2et" id="">
            <input type="number" name="count" value="15" id="">
            <input type="submit" value="Buduj schody!">
        </form>

        <?php

        for ($i = 0; $i < $_POST['count']; $i++) {
            $offset = $i * 12;
            echo "<div style='margin-left: {$offset}px;'>{$_POST['text']} (Stopień {$i})</div>";
        }
        ?>

    </body>

    </html>