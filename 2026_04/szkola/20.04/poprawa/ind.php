<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php
        if(isset($_POST['login']) && isset($_POST['password']))
        {
            $login=$_POST['login'];
            $password=$_POST['password'];

            if($login == "admin" && $password == "klasa2et")
            {
                echo '
                <div id="container">
                    <div id="content">
                        <h2>Generator wykresu</h2>
                        <br>
                        <form action="">
                            Liczba słupków (3-15): <input type="number" min="3" max="15" id="ilosc" name="ilosc">
                            <select name="kolor" id="kolor">
                                <option value="niebieski">niebieski</option>
                                <option value="czerwony">czerwony</option>
                            </select>
                            <input type="submit" value="Generuj">
                        </form>
                    </div>
                </div>
                ';  
            }
            else
            {
                echo"<div id='err'>Błędny login lub hasło!</div>";
            }
        }
        
    ?>

    <?php
        if(isset($_POST['ilosc']) && isset($_POST['kolor']))
        {
            $ilosc = $_POST['ilosc'];
            $kolor = $_POST['kolor'];

            for($i = 0; i < $ilosc; $i++)
            {
                $dlugosc = 10 * $i;
                echo"<div width='{$dlugosc}'>SLUPEK</div>"; # braklo czasu
            }
        }
    ?>
</body>
</html>