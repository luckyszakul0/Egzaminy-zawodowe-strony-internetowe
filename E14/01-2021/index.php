<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl_1.css">
    <title>Podzespoły komputerowe</title>
</head>
<body>
    <header id="logo">
        <h1>Sklep Komputerowy</h1>
    </header>
    <nav id="menu">
        <a href="./index.php">Główna</a>
        <a href="./procesory.html">Procesory</a>
        <a href="./ram.html">RAM</a>
        <a href="./grafika.html">Grafika</a>
        <a href="./hdd.html">HDD</a>
    </nav>
    <main id="glowny">
        <h2>Lista aktualnie dostępnych podzespołów</h2>
        <table>
            <tr><th>NAZWA PODZESPOŁU</th><th>OPIS</th><th>CENA</th></tr>
            <?php
                $polaczenie = new mysqli('localhost', 'root', '', 'sklep');

                $zapytanie1 = 'SELECT nazwa, opis, cena FROM podzespoly WHERE dostepnosc = 1;';
                $wynik1 = $polaczenie->query($zapytanie1);

                while($wiersz1 = $wynik1->fetch_assoc()){
                    echo '<tr><td>' . $wiersz1['nazwa'] . '</td><td>' . $wiersz1['opis'] . '</td><td>' . $wiersz1['cena'] . '</td></tr>';
                }

                $polaczenie->close();
            ?>
        </table>
    </main>
    <footer id="stopka-1">
        <h3>Sklep Komputerowy</h3>
        <p>ul. Legnicka 61, Wrocław</p>
        <p>Współpracujemy z hurtownią <a href="http://www.ddata.pl/" target="_blank">ddata</a></p>
    </footer>
    <footer id="stopka-2">
        <p>Stronę wykonał: 00000000</p>
    </footer>
    <footer id="stopka-3">
        <p>zadzwoń do nas: 71 506 50 60</p>
    </footer>
    <footer id="stopka-4">
        <img src="./sklep.jpg" alt="sklep komputerowy">
    </footer>
</body>
</html>