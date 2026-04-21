<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
            $students_db = [
                ["Anna", "Nowak", 5], ["Jan", "Kowalski", 2], ["Piotr", "Wiśniewski", 1], ["Maria", "Wójcik", 4],
                ["Łukasz", "Kowalczyk", 3], ["Zofia", "Kamińska", 6], ["Marek", "Lewandowski", 2], ["Ewa", "Zielińska", 4],
                ["Adam", "Szymański", 1], ["Katarzyna", "Woźniak", 5], ["Paweł", "Dąbrowski", 3], ["Małgorzata", "Kozłowska", 4],
                ["Tomasz", "Jankowski", 2], ["Agnieszka", "Mazur", 5], ["Robert", "Wojciechowski", 3], ["Barbara", "Kwiatkowska", 6],
                ["Jacek", "Krawczyk", 4], ["Helena", "Kaczmarek", 1], ["Marcin", "Piotrowski", 3], ["Alicja", "Grabowska", 5],
                ["Krzysztof", "Pawłowski", 4], ["Magdalena", "Michalska", 2], ["Rafał", "Nowicki", 3], ["Joanna", "Adamczyk", 4],
                ["Dariusz", "Dudek", 1], ["Grażyna", "Zając", 5], ["Wojciech", "Król", 3], ["Natalia", "Jaworska", 4],
                ["Andrzej", "Wieczorek", 2], ["Monika", "Stępień", 6], ["Sebastian", "Duda", 3], ["Edyta", "Szewczyk", 4],
                ["Karol", "Nowakowski", 5], ["Beata", "Jarosz", 2], ["Grzegorz", "Sowa", 3], ["Urszula", "Witkowska", 4],
                ["Damian", "Rutkowski", 1], ["Marta", "Ostrowska", 5], ["Kuba", "Wilk", 3], ["Iwona", "Tomaszewska", 4],
                ["Michał", "Zalewski", 2], ["Justyna", "Duda", 5], ["Artur", "Wróbel", 3], ["Patrycja", "Kurek", 4],
                ["Kamil", "Jakubowski", 6], ["Renata", "Kalinowska", 2], ["Dominik", "Kopeć", 3], ["Aneta", "Skiba", 4],
                ["Filip", "Mazurek", 5], ["Wiktoria", "Kołodziej", 1]
            ];

            $czyPowyzej = "NIE";
            $zagrozenia = 0;
            $srednia = 0;


            for($i = 0; $i < count($students_db); $i++)
            {
                if(isset($students_db[$i])) 
                {
                    $srednia += $students_db[$i][2];
                }

                if($students_db[$i][2] == 1)
                    {
                        $zagrozenia += 1;
                    }
                
            }
            

            
            $srednia = $srednia / count($students_db);
            
                
            
            echo '
                <div id="container">
            <div id="content">
                <h1>Raport Wyników Klasy</h1>
            </div>
            <div id="content2">
                <div id="div_srednia">
                    <h3>ŚREDNIA KLASY</h3>';
                    
            echo "<b>{$srednia}</b>";
            
            echo '
                </div>
                <div id="div_zagrozenia">
                    <h3>ZAGROŻENIA</h3>';
                        
            echo "<b>{$zagrozenia}</b>";

            echo '
                </div>
            </div>'
    ?>
    
        <?php
            echo '
            <div id="tabela">
            <table>
                <tr>
                    <th>Lp.</th>
                    <th>Imię i Nazwisko</th>
                    <th>Ocena</th>
                    <th>Status</th>
                </tr>';
            
            
            for($i = 0; $i < count($students_db); $i++)
            {
                if(isset($students_db[$i])) 
                {
                    if($students_db[$i][2] > $srednia) {
                        $czyPowyzej = "TAK";
                    }
                    else 
                    {
                        $czyPowyzej = "NIE";
                    }

                    if($students_db[$i][2] == 1)
                    {
                        $zagrozenia += 1;
                    }

                    if($students_db[$i][2] >= 5)
                    {
                        echo "<tr>
                            <td>{$i}.</td>
                            <td>{$students_db[$i][0]} {$students_db[$i][1]}</td>
                            <td><div class='ocena_span'>{$students_db[$i][2]}</div></td>
                            <td>Powyżej średniej: {$czyPowyzej}</td>
                        </tr>";
                    }
                    else 
                    {
                        echo "<tr>
                            <td>{$i}.</td>
                            <td>{$students_db[$i][0]} {$students_db[$i][1]}</td>
                            <td>{$students_db[$i][2]}</td>
                            <td>Powyżej średniej: {$czyPowyzej}</td>
                        </tr>";
                    }
                }
                    else
                    {
                        echo "<div>BRAK ELEMENTU {$i}</div>";
                    }
            }

            
                    
               
        echo '
            </table>
            </div>
        ';
        ?>
        </div>
            
    
</body>
</html>