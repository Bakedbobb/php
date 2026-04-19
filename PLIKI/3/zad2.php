<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        padding: 12px;
    }
</style>

<body>
    <form action="" method="post">
        Ile wizytówek wygenerować?
        <input type="number" name="count" value="10">
        <input type="submit" value="Generuj">
    </form>
    <br><br>

    <div style="display: flex; flex-wrap:wrap; gap: 8px;">
        <?php
        for ($i = 1; $i <= $_POST['count']; $i++) {
            echo "<div style='border: 2px solid blue; background-color: lightgray; width: 220px; height: 80px; padding-left: 12px; display: flex; flex-direction: column; justify-content: center;'>
        <p style='font-size: x-large; font-weight: bold;'>Gość nr. {$i}</p>
        <p style='font-size: large;'>Miejsce zarezerwowane</p>
        </div>";
        }
        ?>
    </div>
</body>

</html>