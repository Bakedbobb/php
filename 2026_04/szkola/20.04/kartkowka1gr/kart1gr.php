<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body,
      html {
        background-color: lightgray;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        padding: 20px;
      }

      hr {
        border-top: 2px solid rgb(33, 104, 185);
      }
      #container {
        background-color: white;
        padding: 20px;
        color: black;
        width: 700px;
        margin: auto;
        border-radius: 8px;
      }
      th {
        background-color: rgb(33, 104, 185);
        color: white;
        padding: 10px;
        text-align: left;
      }

      td {
        padding: 8px;
        border-bottom: 1px solid grey;
      }

      table {
        border-collapse: collapse;
        width: 100%;
      }
      .sum {
        background-color: black;
        color: white;
        padding: 15px;
        float: right;
        margin-top: 20px;
        border-radius: 8px;
      }
    </style>
  </head>
  <body>
    <div id="container">
      <h2>Faktura VAT nr 2026/04/001</h2>
      <hr />
      <table>
        <tr>
          <th>Lp.</th>
          <th>Nazwa produktu</th>
          <th>Ilosc</th>
          <th>Cena jedn. netto</th>
          <th>Wartosc netto</th>
        </tr>

        <?php

$products_db = [
    "Laptop Pro", "Mysz Bezprzewodowa", "Monitor 4K", "Klawiatura Mechaniczna", "Słuchawki ANC",
    "Podkładka pod mysz", "Kabel HDMI", "Dysk SSD 1TB", "Zasilacz 750W", "Obudowa ATX",
    "Pamięć RAM 16GB", "Karta Graficzna RTX", "Procesor i7", "Chłodzenie Wodne", "Pasta Termoprzewodząca",
    "Głośniki 2.1", "Mikrofon USB", "Kamera Internetowa", "Router WiFi 6", "Switch 8-portowy",
    "Drukarka Laserowa", "Skaner Dokumentów", "Toner Czarny", "Papier Ksero A4", "Pendrive 64GB",
    "Karta SD 128GB", "Zewnętrzny napęd DVD", "Adapter USB-C", "Torba na laptopa", "Powerbank 20k mAh",
    "Fotel Biurowy", "Biurko Gamingowe", "Lampa biurkowa LED", "Organizer na kable", "HUB USB",
    "Kabel Ethernet 5m", "Bateria CR2032", "Zestaw czyszczący", "Smartwatch", "Tablet graficzny",
    "Smartfon X12", "Etui na telefon", "Szkło hartowane", "Stacja dokująca", "Głośnik Bluetooth",
    "Słuchawki douszne", "Uchwyt na monitor", "Podnóżek ergonomiczny", "Mata pod fotel", "Klawiatura Numeryczna"
];

$sumanetto = 0; 

for($i = 1 ; $i <= 10 ; $i++){

$product = $products_db[rand(0, count($products_db)-1)];
$ilosc = rand(1, 5);
$cena = rand(50 , 2500);
$wartosc = $ilosc * $cena;
$sumanetto += $wartosc;

echo "<tr><td>{$i}</td><td>{$product}</td><td>{$ilosc} szt.</td><td>{$cena} zł</td><td>{$wartosc} zł</td></tr>";

}


?>
      </table>

      <div class="sum">

      <?php
$vat = $sumanetto * 0.23;
$brutto = $sumanetto + $vat;
echo "Suma netto:  &nbsp;  &nbsp;   &nbsp;   &nbsp;   {$sumanetto} zł"; echo "<br>";
echo "VAT(23%):   &nbsp;    &nbsp;  &nbsp;  &nbsp;   {$vat} zł"; echo "<br>";
echo "RAZEM BRUTTO:  {$brutto} zł";


?>

      </div>
    </div>
  </body>
</html>
