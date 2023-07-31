<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl8.css">
    <title>Nasz sklep komputerowy</title>
</head>
<body>
    <section id="menu">
        <a href="./index.php">Główna</a>
        <a href="./procesory.html">Procesory</a>
        <a href="./ram.html">RAM</a>
        <a href="./grafika.html">Grafika</a>
    </section>
    <section id="logo">
        <h2>Podzespoły komputerowe</h2>
    </section>
    <section id="glowny">
        <h1>Dzisiejsze promocje</h1>
        <table>
            <tr>
                <th>NUMER</th>
                <th>NAZWA PODZESPOŁU</th>
                <th>OPIS</th>
                <th>CENA</th>
            </tr>
            <?php
                $polaczenie = new mysqli('localhost', 'root', '', 'sklep');
                $zapytanie1 = 'SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000;';

                $wynik1 = $polaczenie->query($zapytanie1);
                while($wiersz1 = $wynik1->fetch_assoc()){
                    echo '<tr><td>'.$wiersz1['id'].'</td><td>'.$wiersz1['nazwa'].'</td><td>'.$wiersz1['opis'].'</td><td class="ceny">'.$wiersz1['cena'].'</td></tr>';
                }
            ?>
        </table>
    </section>
    <section id="stopka-1">
        <img src="./scalak.jpg" alt="promocje na procesory">
    </section>
    <section id="stopka-2">
        <h4>Nasz Sklep Komputerowy</h4>
        <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
    </section>
    <section id="stopka-3">
        <p>zadzwoń: 601 602 603</p>
    </section>
    <section id="stopka-4">
        <p>Stronę wykonał: 00000000000</p>
    </section>
</body>
</html>
<?php
    $polaczenie->close();
?>