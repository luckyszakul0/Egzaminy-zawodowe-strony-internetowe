<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl_1.css">
    <title>Wędkujemy</title>
</head>
<body>
    <header id="baner">
        <h1>Portal dla wędkarzy</h1>
    </header>
    <section id="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <?php
                $polaczenie = new mysqli('localhost', 'root', '', 'wedkowanie');
                $zapytanie1 = 'SELECT nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1;';

                $wynik1 = $polaczenie->query($zapytanie1);

                while($wiersz1 = $wynik1->fetch_assoc()){
                    echo '<li>' . $wiersz1['nazwa'] . ', występowanie: ' . $wiersz1['wystepowanie'] . '</li>';
                };

                $polaczenie->close();
            ?>
        </ul>
    </section>
    <section id="prawy">
        <img src="./ryba1.jpg" alt="Sum"> <br>
        <a href="./kwerendy.txt">Pobierz kwerendy</a>
    </section>
    <footer id="stopka">
        <p>Stronę wykonał: 0000000</p>
    </footer>
</body>
</html>